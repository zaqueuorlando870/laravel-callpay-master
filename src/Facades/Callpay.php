<?php

/*
 * This file is part of the Laravel Callpay package.
 *
 * (c) Prosper Zaqueu Orlando <zaqueuorlando870@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Zaqueuorlando870\Callpay\Facades;

use Illuminate\Support\Facades\Facade;

class Callpay extends Facade
{
    /**
     * Get the registered name of the component
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-callpay';
    }
}
