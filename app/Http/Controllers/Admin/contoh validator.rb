adminValidator.php
        "username"=>"required|min:2|max:50|regex:/^[A-Za-z ]+$/",
        "password"=>"required|min:8|max:100|confirmed",
        "email"=>"required|min:4|max:50|email|unique:t_admins",
        "full_name"=>"required|min:2|regex:/^[a-zA-Z]+$/u",
        "centre_id"=>"required|exists:t_centre,id",

login-admin.blade.php
        value="{{old('email')}}"

form-input-vaccine.php
        <div class="form-group">
                    <label for="input-1">Vaccine Name</label>
                    <input type="text" class="form-control" id="input-1" name="vaccine_name" placeholder="Enter vaccine name">
                </div>
                <div class="form-group">
                    <label for="input-2">Manufacturer</label>
                    <input type="text" class="form-control" id="input-2" name="manufacturer" placeholder="Enter manufacturer">
                </div>