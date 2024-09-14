<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    protected $table = 'todo';
    protected $primarKey = 'id';
    protected $fillable = [
        'todo_name',
        'todo_desc'
    ];
    use HasFactory;
}
