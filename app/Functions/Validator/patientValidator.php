<?php
namespace App\Functions\Validator;

class patientValidator{

    private static $validationRules = [
        "username"=>"required|min:2|max:50",
        "fullName"=>"required",
        "ic_passport"=>"required|unique:t_patients",
        "email"=>"required|min:4|max:50|email|unique:t_patients",
        "password"=>"required|confirmed|min:6",
    ];

    public static function getValidationRules(){
        return self::$validationRules;
    }

    public static function getValidationRule($key){
        return self::$validationRules[$key];
    }
}
?>