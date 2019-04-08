<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Notifications\CustomPasswordReset;
use App\Notifications\ResetPassword as ResetPasswordNotification;

class Customers extends Model
{
    //
    use Notifiable;
    protected $table = "customers";

    public function listgr(){
    	return $this->belongsto('App\GroupCustomers','idgroup','id');
    }

    protected $fillable = [
        'cusfullname', 'cusemail', 'cuspass',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
    public function getEmailForPasswordReset() {
        return $this->cusemail;
    }
}
