<?php

namespace App\Validators;

use Illuminate\Validation\Validator;

class CustomValidator extends Validator
{
    /**
     * alpah
     *
     * @param string $attribute
     * @param string $value
     * @return true
     */
    public function validateAlpha($attribute, $value)
    {
        return (preg_match("/^[a-z]+$/i", $value));
    }

    /**
     * alpah_dash
     *
     * @param string $attribute
     * @param string $value
     * @return true
     */
    public function validateAlphaDash($attribute, $value)
    {
        return (preg_match("/^[a-z0-9_-]+$/i", $value));
    }

    /**
     * alpah_num
     *
     * @param string $attribute
     * @param string $value
     * @return true
     */
    public function validateAlphaNum($attribute, $value)
    {
        return (preg_match("/^[a-z0-9]+$/i", $value));
    }
    /*無名関数の場合はuseを使用
    18歳以上/未満*/
}