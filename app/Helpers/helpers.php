<?php

if (!function_exists('in_request_array')) {
    function in_request_array($needle, $haystack = '*')
    {
        if (is_array($needle))
        {
            foreach ($needle as $item)
                if (in_array($item, request()->input($haystack) ?? []))
                    return true;
            return false;
        }
        return in_array($needle, request()->input($haystack) ?? []);
    }
}

if (!function_exists('cart')) {
    function cart()
    {
        return new \App\Helpers\Cart\CartService;
    }
}
