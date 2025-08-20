<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    use Hasfactory;
    protected $guarded = [];

    protected $hidden = ['created_at', 'updated_at'];  // oculto datos que no quiero que se muestren
}
