<?php

namespace App\Exceptions;

use Exception;

class AddToCartException
{
    public function __construct() {

    }

    public function WebsiteNotSupport()
    {
        return new Exception('Website nay hien chua ho tro mua hang.', 422);
    }
}
