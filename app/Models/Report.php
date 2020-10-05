<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'report';

    protected $primaryKey = 'id';

    protected $keyType = 'int';

    protected $fillable = [
        'id',
        'username_emp',
        'userame_tech',
        'title',
        'address',
        'description',
        'tatus',
        'image',
        'created_at',
        'updated_at',
        'deleted_at',
    ];
    public $timestamps = false;
}
