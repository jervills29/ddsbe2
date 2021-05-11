<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model {
    protected $table = 'usertbl';
    protected $fillable = [
        'username', 'password', 'gender',
    ];
    public $timestamp = false;
    protected $primarykey = 'id';

    protected $hidden =[
        'password'
    ];
}


?>