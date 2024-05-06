<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];
    public function applicants()
    {
        return $this->belongsToMany(Applicant::class)->withTimestamps();
    }
}
