<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    protected $primaryKey = 'applicant_id';
    public function job()
    {
        return $this->belongsToMany(Job::class, 'applicant_job', 'applicant_id', 'job_id')->withTimestamps();
    }
}
