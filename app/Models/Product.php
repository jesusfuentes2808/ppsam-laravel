<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function local()
    {
        return $this->belongsTo(Local::class);
    }

    public function getStatusNameAttribute($value)
    {
        if($this->status == 1){
            return 'activo';
        } else {
            return 'inactivo';
        }

    }
}
