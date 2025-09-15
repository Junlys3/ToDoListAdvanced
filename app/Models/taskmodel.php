<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class taskmodel extends Model
{

    protected $table = 'tasks';
    
    protected $fillable=[
        'user_id',
        'title',
        'status',
        'description'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
    
}


