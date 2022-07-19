<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'size', 'observations', 'marca_id', 'inventory', 'date'];
    
    static $rules = [
        'name' => 'required',
        'size' => 'required',
        'observations' => 'required | min:40',
        'marca_id' => 'required',
        'inventory' => 'required',
        'date' => 'required'
    ];

    public function marca()
    {
        return $this->belongsTo('App\Models\Marca');
    }
}
