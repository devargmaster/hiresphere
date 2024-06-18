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
        'company_name',
        'location',
        'image',

    ];
    public function applicants()
    {
        return $this->belongsToMany(Applicant::class, 'applicant_job', 'job_id', 'applicant_id')->withTimestamps();
    }
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
