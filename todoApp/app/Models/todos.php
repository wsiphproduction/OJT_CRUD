<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class todos extends Model
{

    use SoftDeletes;

    use HasFactory;
    protected $table='todos';
    protected $primary_key='id';

}