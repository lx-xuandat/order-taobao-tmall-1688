import axios from "axios";


export const apiUpdate = (rowItemElement, delay = 400) => {
    let delayEnd;
    console.log('====================================');
    console.log(rowItemElement);
    console.log('====================================');

    const item = {
        item_id: rowItemElement.getAttribute('item'),
        item_quantity: rowItemElement.querySelector('input[name^="item["][name$="quantity]"]').value
    }

    return new Promise((resolve, reject) => {
        // Hủy timeout cũ nếu tồn tại
        clearTimeout(delayEnd);

        // Thiết lập timeout mới
        delayEnd = setTimeout(() => {
            axios.put('/e-commerce/cart-items/update-quantity', { item })
                .then(response => {
                    resolve(response.data); // Trả về kết quả từ server
                })
                .catch(error => {
                    reject(error); // Xử lý lỗi
                });
        }, delay);
    });

}

export const updateNoteCartLink = (data) => {
    let delayEnd;

    return new Promise((resolve, reject) => {
        // Hủy timeout cũ nếu tồn tại
        clearTimeout(delayEnd);

        // Thiết lập timeout mới
        delayEnd = setTimeout(() => {
            axios.put('/e-commerce/cart-links/update-message-to-shop', { cart_link: data })
                .then(response => {
                    resolve(response.data); // Trả về kết quả từ server
                })
                .catch(error => {
                    reject(error); // Xử lý lỗi
                });
        }, delay);
    });
}