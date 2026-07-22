<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'phone',
        'hourly_rate',
        'profile_photo',
        'google_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Role helper methods
    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    public function isHr(): bool
    {
        return $this->role === 'hr';
    }

    public function isEmployee(): bool
    {
        return $this->role === 'employee';
    }

    // Returns uploaded profile photo if set, otherwise a generated avatar
    public function getPhotoUrlAttribute(): string
    {
        if ($this->profile_photo) {
            return asset('storage/' . $this->profile_photo);
        }

        return 'https://ui-avatars.com/api/?name=' . urlencode($this->name) . '&background=0d9488&color=fff';
    }

    // Relationships
    public function attendance()
    {
        return $this->hasMany(Attendance::class, 'employee_id');
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'employee_id');
    }

    public function payroll()
    {
        return $this->hasMany(Payroll::class, 'employee_id');
    }

    public function wageRequests()
    {
        return $this->hasMany(WageRequest::class, 'employee_id');
    }

    public function jobOpeningsPosted()
    {
        return $this->hasMany(JobOpening::class, 'posted_by');
    }

    // Show a single user's profile (admin view)
    public function show(User $user)
    {
        return view('admin.users.show', compact('user'));
    }
}