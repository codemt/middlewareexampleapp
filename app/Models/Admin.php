<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    //
    use Notifiable;

    protected $table = 'admins';
    protected $guard = "admin";

    protected $fillable=[

            'id','email','password'
    ];

    

}
