<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guarded = array('id');
    public $timestamps = false;

    public static $rules = array(
        'mail' => 'email',
        'password' => 'required|alpha_dash|min:8|confirmed',
        'password_confirmation' => 'required|alpha_dash|min:8',
    );

    public function getData()
    {
        return $this->id . ': ' . $this->mail . '(' . $this->password . ')';
    }
}
