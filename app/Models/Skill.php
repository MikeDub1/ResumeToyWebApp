<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

   public $timestamps = false;

   /**
    * Columns which can be mass assigned in the database.
    *
    * @var array
    */
   protected $fillable = ['skill_name', 'description', 'user_id'];
}
//Link user ID to skills table.