<?php

namespace App\Enums;

enum WaybillTracking: int
{
    case SHOP_PHAT_HANG = 1;
    case KHO_TQ_NHAN_HANG = 2;
    case ROI_KHO_TQ = 3;
    case KHO_VN_NHAN_HANG = 4;
    case ROI_KHO_VN = 5;
    case KHACH_NHAN_HANG = 6;
}
