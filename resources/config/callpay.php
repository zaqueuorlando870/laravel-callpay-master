<?php

/*
 * This file is part of the Laravel Callpay package.
 *
 * (c) Prosper Zaqueu Orlando <zaqueuorlando870@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /**
     * Username Key From Callpay Dashboard
     *
     */
    'username' => getenv('CALLPAY_USERNAME_KEY'),

    /**
     * Password Key From Callpay Dashboard
     *
     */
    'password' => getenv('CALLPAY_PASSWORD_KEY'),

    /**
     * salt Key From Callpay Dashboard
     *
     */
    'salt_key' => getenv('CALLPAY_SALT_KEY'),

    /**
     * Callpay Payment URL
     *
     */
    'paymentUrl' => getenv('CALLPAY_PAYMENT_URL'),

    /**
     * Optional User Id address of the
     *
     */
    'userID' => getenv('CALLPAY_USER_ID'),

];
