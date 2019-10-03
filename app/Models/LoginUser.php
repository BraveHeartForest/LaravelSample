<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginUser extends Model
{
    protected $table = 'loginusers'; //これを入力しないと、SQL発行対象のテーブル名がlogin_usersとなってしまう
}
