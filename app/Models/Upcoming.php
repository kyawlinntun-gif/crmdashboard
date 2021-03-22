<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upcoming extends Model
{
    use HasFactory;

    protected $fillable = [
      'title', 'completed', 'approved', 'waiting', 'taskId'
    ];

    public function setCompletedAttribute($value)
    {
      $this->attributes['completed'] = $value ? $value : false;
    }

    public function setApprovedAttribute($value)
    {
      $this->attributes['approved'] = $value ? $value : false;
    }

    public function setWaitingAttribute($value)
    {
      $this->attributes['waiting'] = $value ? $value : true;
    }
}
