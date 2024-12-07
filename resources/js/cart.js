import { apiUpdate as updateQuantity, updateNoteCartLink } from './cart-api';

(function () {
    "use strict"
    /**
     * lay ra id cua item muon mua
     * quantity cua item tuong ung
     */
    const checkOut = () => {
        // lay input la checkbox, duoc check, co attribute la vtx-item
        const nodeLists = document.querySelectorAll('input[type="checkbox"]:checked[name^=item][vtx-item]')
        const result = []
        nodeLists.forEach((element) => {
            const item_id = element.getAttribute('vtx-item')

            if (item_id !== undefined && typeof item_id !== 'boolean') {
                result.push(
                    {
                        item_id,
                        quantity: document.querySelector('input[name="item[' + item_id + '][quantity]"]').value
                    }
                )
            }
        })

        console.table(result);
    }

    const updateCart = (element) => {
        const elements = document.querySelectorAll('input[name^="link"][type="checkbox"][vtx-cart-link], textarea[name^="link"][vtx-cart-link]');

        const result = []
        // const model = {
        //     cart_link_id: string,
        //     note: string,
        //     dong_go: boolean,
        //     kiem_dem: boolean,
        // }

        elements.forEach((element) => {
            console.log(element);
            const cart_link_id = element.getAttribute('vtx-cart-link')

            result.push({
                cart_link_id,
                dong_go: document.querySelector('input[name="link[' + cart_link_id + '][dong_go]"]').checked,
                kiem_dem: document.querySelector('input[name="link[' + cart_link_id + '][kiem_dem]"]').checked,
                note: document.querySelector('textarea[name="link[' + cart_link_id + '][note]"]').value,
            })
        });

        console.table(result);
    }

    // for cart items delete
    document.querySelectorAll(".btn-delete").forEach((element) => {
        let i = document.querySelectorAll(".btn-delete").length

        element.onclick = () => {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                    element.parentElement.parentElement.remove()
                    i = document.querySelectorAll(".btn-delete").length
                    if (i < 1) {
                        document.getElementById("cart-container-delete").remove()
                        document.getElementById("cart-empty-cart").classList.remove("d-none")
                    }
                }
            })
        }
    })

    let
        value = 1,
        minValue = 0,
        maxValue = 1000;

    const
        productMinusBtn = document.querySelectorAll("tr[item] button.product-quantity-minus"),
        productPlusBtn = document.querySelectorAll("tr[item] button.product-quantity-plus"),
        itemCheckboxes = document.querySelectorAll('table.cart .vtx-item, table.cart .vtx-cart, table.cart .vtx-link'),
        vtxCheckout = document.querySelector('.vtx-checkout'),
        vtxUpdateCart = document.getElementById('vtx-update-carts');


    vtxUpdateCart.onclick = updateCart
    vtxCheckout.onclick = checkOut

    productMinusBtn.forEach((element) => {
        element.onclick = () => {
            value = Number(element.parentElement.childNodes[3].value)
            if (value > minValue) {
                value = Number(element.parentElement.childNodes[3].value) - 1;
                element.parentElement.childNodes[3].value = value;
                updateQuantity(element.closest('tr[item'))
            }
        }
    })

    productPlusBtn.forEach((element) => {
        element.onclick = () => {
            if (value < maxValue) {
                value = Number(element.parentElement.childNodes[3].value) + 1;
                element.parentElement.childNodes[3].value = value;
                updateQuantity(element.closest('tr[item'))
            }

        }
    })

    itemCheckboxes.forEach((element) => {
        element.onchange = (e) => {
            const vtx = {
                item: false,
                link: false,
                cart: false,
            },
                classList = e.target.classList

            classList.forEach(className => {
                if (className.startsWith('vtx-item')) {
                    vtx['item'] = '.' + className
                } else if (className.startsWith('vtx-link-')) {
                    vtx['link'] = '.' + className
                } else if (className.startsWith('vtx-cart-')) {
                    vtx['cart'] = '.' + className
                }
            });

            if (vtx.link) { // neu tat ca cac link trong 1 shop duoc click -> auto check shop
                if (vtx.item) { // neu tat cac sp trong link duoc click -> auto check link, nguoc lai un-check link
                    const items = document.querySelectorAll('.vtx-item' + vtx.link)
                    document.querySelector(vtx.link).checked = Array.from(items).some((item) => !item.checked) ? false : true
                }

                const links = document.querySelectorAll('.vtx-link' + vtx.cart)
                document.querySelector(vtx.cart).checked = Array.from(links).some((link) => !link.checked) ? false : true
            }

            if (vtx.link && vtx.item === false) { // click link -> auto check sp trong link
                document.querySelectorAll('.vtx-item' + vtx.link).forEach(e => e.checked = document.querySelector(vtx.link).checked)
            } else if (vtx.cart && vtx.link === false && vtx.item === false) { // click shop -> auto check link cua shop va sp cua shop
                document.querySelectorAll(vtx.cart).forEach(e => e.checked = document.querySelector(vtx.cart).checked)
            }
        }
    })
})();

(() => {
    "use strict"

    let debounceTimer;

    /**
     * Ham handler + co data cutomer truyen vao
     *
    */
    const apiUpdateCartLink = async (event, data) => {
        let target = event.target // ta co the check doi tuong dang check o day la gi

        console.log('====================================');
        console.log(target);
        console.log(data);
        console.log('====================================');
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        const rawResponse = await fetch('/e-commerce/cart-links', {
            method: 'PUT',
            headers: {
                // 'X-XSRF-TOKEN': token,
                'X-CSRF-TOKEN': csrfToken,  // Thêm CSRF token vào header
                'Accept': 'application/json',
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(data)
        });

        const content = await rawResponse.json();

        console.log(content);

    }

    /**
     * js ket hop vs genrate view
     * html assing attribute vtx-cart-link va div con co input hoac text co name dang ben duoi
    */
    const sNote = 'tr[vtx-cart-link] [name^="link["][name$="[note]"]',
        sDongGo = 'tr[vtx-cart-link] [name^="link["][name$="[dong_go]"]',
        sKiemDem = 'tr[vtx-cart-link] [name^="link["][name$="[kiem_dem]"]';

    document.querySelectorAll(sNote + ',' + sDongGo + ',' + sKiemDem)
        .forEach(node => {
            node.oninput = (event) => {
                let link_id = node.closest('tr[vtx-cart-link]')?.getAttribute('vtx-cart-link')
                let note = node.closest('tr[vtx-cart-link]').querySelector(sNote)?.value || null
                let dong_go = node.closest('tr[vtx-cart-link]').querySelector(sDongGo)?.checked ?? false
                let kiem_dem = node.closest('tr[vtx-cart-link]').querySelector(sKiemDem)?.checked ?? false

                clearTimeout(debounceTimer)
                debounceTimer = setTimeout(() => {
                    apiUpdateCartLink(event, {
                        link_id,
                        note,
                        dong_go,
                        kiem_dem
                    })
                }, 999);
            }
        });
})();

(() => {
    let inputNodeLists = document.querySelectorAll('tr[item] input[name^="item["][name$="[quantity]"]')

    inputNodeLists.forEach(node => {
        node.oninput = event => {
            const numberValue = Number((node.value).replace(/\D/g, ''));
            node.value = numberValue || 1;
            updateQuantity(node.closest('tr[item]'), 1000)
        }
    })
})();

(() => {
    const nodeLists = document.querySelector('tr[vtx-cart-link] textarea[name^="link["][name$="[note]"]')

    nodeLists.forEach(node => {
        const note = node.value || null

        updateNoteCartLink(node, {
            cart_link_id: node.closest('tr[vtx-cart-link]').getAttribute('vtx-cart-link'),
            msg_to_shop: note
        })
    })
})();
