<?php
namespace App\Functions\Validator;

class AddressValidator {

    private static $validationRules = [
        "studio_id"=>"required|numeric",
        "complete_address"=>"required|string|regex:/^[A-Za-z ,.]/",
        "province_id"=>"required|numeric|digits_between:2,2",
        "district_id"=>"required|numeric|digits_between:4,4",
        "subdistrict_id"=>"required|numeric|digits_between:7,7",
    ];


    public static function getValidationRules(){
        return self::$validationRules;
    }

    public static function getValidationRule($key){
        return self::$validationRules[$key];
    }

}
?>