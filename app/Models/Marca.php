<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;
    
    protected $fillable = ['name'];
    
    static $rules = [
        'name' => 'required | unique:marcas'
    ];
    public function producto() {
        return $this->HasMany('App\Models\Producto');
    }
}
