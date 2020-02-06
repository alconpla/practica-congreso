<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ponencia extends Model
{
    use SoftDeletes;
    
    protected $table = 'ponencia';
    
    protected $hidden = ['created_at','updated_at'];
    
    protected $fillable = ['iduser', 'titulo', 'video'];
    
    public function user() {
        return $this->belongsTo('App\User', 'iduser');
    }
}
