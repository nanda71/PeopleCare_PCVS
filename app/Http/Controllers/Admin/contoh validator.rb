"username"=>"required|min:2|max:50|regex:/^[A-Za-z ]+$/",
        "password"=>"required|min:8|max:100|confirmed",
        "email"=>"required|min:4|max:50|email|unique:t_admins",
        "full_name"=>"required|min:2|regex:/^[a-zA-Z]+$/u",
        "centre_id"=>"required|exists:t_centre,id",

login-admin.blade.php
        value="{{old('email')}}