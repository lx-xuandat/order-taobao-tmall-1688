<?php

namespace App\Enums;

enum UserType: int {
    case Admin = 1; // co 1 user duy nhat
    case GuiHangTQVN = 2; // co 1 user duy nhat
    case CustomerUndefined = 3; // co 1 user duy nhat

    case Employees = 15;
    case ShopTQ = 16;
    case ShipperVN = 17;
    case Customer = 18;
}
