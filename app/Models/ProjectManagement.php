<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectManagement extends Model
{
    use HasFactory;

    protected $table = 'projects'; // Ensure this matches your database table name

    protected $fillable = [
        'name',
        'description',
        'price',
        'duration',
        'status',
    ];

    // Example relationships (uncomment if needed)
    // public function architect()
    // {
    //     return $this->belongsTo(User::class, 'architect_id');
    // }

    // public function builder()
    // {
    //     return $this->belongsTo(User::class, 'builder_id');
    // }
}
