<?php
Session::start();

class Auth
{
    /* Admin Account */
    public static function user()
    {
        if (Session::get('user')) {
            return Session::get('user')[0];
        }
        return false;
    }

    /* User Account */
    public static function customer()
    {
        if (Session::get('customer')) {
            return Session::get('customer')[0];
        }
        return false;
    }

    public static function mustBeAdmin()
    {
        if (!self::user()) {
            Redirect::url('admin/account/login.php');
        } else {
            return true;
        }
    }

    public static function mustBeCustomer()
    {
        if (!self::customer()) {
            Redirect::url('login.php');
        } else {
            return true;
        }
    }
}
