<?php
namespace App\Functions\Validator;

class AdminValidator{

    private static $validationRules = [
        "username"=>"required|min:2|max:50|",
        "full_name"=>"required",
        "email"=>"required|min:4|max:50|email|unique:t_admins",
        "centre_id"=>"required|exists:t_centre,id",
        "password"=>"required|confirmed|min:6",
    ];

    public static function getValidationRules(){
        return self::$validationRules;
    }

    public static function getValidationRule($key){
        return self::$validationRules[$key];
    }

}