<?php

class Validator
{
    public static $errors = [];

    public static function required($value, $msg)
    {
        if (empty($value)) {
            self::$errors[] = $msg;
        }
        return new static;
    }

    public static function min($value, $min, $msg)
    {
        if (strlen($value) < $min) {
            self::$errors[] = $msg;
        }
        return new static;
    }

    public static function max($value, $max, $msg)
    {
        if (strlen($value) > $max) {
            self::$errors[] = $msg;
        }
        return new static;
    }

    public static function numeric($value, $msg)
    {
        if (!is_numeric($value)) {
            self::$errors[] = $msg;
        }
        return new static;
    }

    public static function anyErrors()
    {
        if (count(self::$errors) > 0) {
            return self::$errors;
        }
    }

    public static function isPhone($value, $msg)
    {
        if (!preg_match("/^[0-9]{3}[0-9]{4}[0-9]{4}$/", $value)) {
            self::$errors[] = $msg;
        }
        return new static;
    }

    public static function isEmail()
    {
    }

    public static function categoryRequired($value, $msg)
    {
        if ($value == 0) {
            self::$errors[] = $msg;
        }
        return new static;
    }
}
