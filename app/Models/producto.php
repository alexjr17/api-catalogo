<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class producto extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'update_at'];
    
    public function marca()
    {
        return $this->belongsTo('App\Models\Marca');
    }
}
