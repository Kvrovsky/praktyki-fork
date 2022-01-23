<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $fillable = [ 'name', 'description', 'permanent', 'remote', 'wage', 'wage_period', 'negotiable', 'city', 'days', 'category_id', 'user_id' ];
}
