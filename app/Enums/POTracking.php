<?php

namespace App\Enums;

enum POTracking: int {
    case CHUA_GUI_DON = 1;
    case DA_GUI_DON__DA_DAT_COC = 2;
    case DA_GUI_DON__CHUA_DAT_COC = 3;
    case CSKH_DANG_KIEM_DUYET__PO_CHUA_MUA_HANG = 4;
    case CSKH_DA_KIEM_DUYET__PO_CO_THE_MUA_HANG = 5;
    case PO_DANG_MUA_HANG = 6;
    case PO_MUA_HANG_THANH_CONG = 7;
    case REJECT = 8;
}
