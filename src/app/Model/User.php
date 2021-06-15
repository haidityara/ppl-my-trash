<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    // Role 0 Admin 1 Buyer 2 Seller
    public function register($fullName, $email, $password, $role)
    {
        $checkEmail = User::where('email', $email)->count();
        if ($checkEmail > 0) {
            return false;
        }

        $data = new User();
        $data->name = $fullName;
        $data->email = $email;
        $data->password = md5($password);
        $data->role = $role;
        $data->save();
        return true;
    }
}
