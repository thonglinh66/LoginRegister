<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technicians extends Model
{
    protected $table = 'technicians';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
        'id',
        'username',
        'fullname',
        'address',
        'sex',
        'phone',
        'email',
        'position',
    ];
    public $timestamps = false;
}
