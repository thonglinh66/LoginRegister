<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $table = 'employee';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
        'id',
        'username_emp',
        'fullname',
        'address',
        'sex',
        'phone',
        'email',
        'position',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public $timestamps = false;
}
