<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'job_opening_id',
        'name',
        'email',
        'phone',
        'cv_path',
        'status',
    ];

    // Relationships
    public function jobOpening()
    {
        return $this->belongsTo(JobOpening::class);
    }
}