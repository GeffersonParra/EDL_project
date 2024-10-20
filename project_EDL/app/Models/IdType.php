<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdType extends Model
{
    use HasFactory;

    protected $table = 'types_of_id';

    protected $fillable = [
        'id',
        'id_type',
        'id_description',
    ];
}
