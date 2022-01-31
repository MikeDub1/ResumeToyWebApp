<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Columns that can be filled in the experiences table.
     *
     * @var array
     */
    protected $fillable = ['role', 'organization', 'description', 'start_date', 'end_date'];
}
