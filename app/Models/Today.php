<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Today extends Model
{
    use HasFactory;

    protected $fillable = [
      'title', 'completed', 'approved', 'taskId'
    ];

    public function setCompletedAttribute($value)
    {
      $this->attributes['completed'] = $value ? $value : false;
    }

    public function setApprovedAttribute($value)
    {
      $this->attributes['approved'] = $value ? $value : false;
    }
}
