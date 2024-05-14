<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Applicant extends Model
{
    use HasFactory;
    protected $primaryKey = 'applicant_id';
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'phone',
        'address',
        'city',
        'state',
        'zip',
        'country',
        'resume',
        'cover_letter',
        'job_id',
        'status',
        'notes',
        'source',
        'ip_address',
        'user_agent',
        'referrer',
        'applied_at',
    ];
    public function job()
    {
        return $this->belongsToMany(Job::class, 'applicant_job', 'applicant_id', 'job_id')->withTimestamps();
    }
}
