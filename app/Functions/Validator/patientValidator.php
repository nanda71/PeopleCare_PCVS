<?php
namespace App\Functions\Validator;

class patientValidator{

    private static $validationRules = [
        "username"=>"required|min:2|max:50|regex:/^[A-Za-z ]+$/",
        "email"=>"required|min:4|max:50|email|unique:tb_users",
        "password"=>"required|min:8|max:100|confirmed",
        "ic_passport"=>"required|confirmed",
    ];

    public static function getValidationRules(){
        return self::$validationRules;
    }

    public static function getValidationRule($key){
        return self::$validationRules[$key];
    }

}