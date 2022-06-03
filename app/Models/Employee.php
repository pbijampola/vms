<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;



class Employee extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;
    protected $fillable = [
        'employee_name',
        'email',
        'phone_number',
        'department',
        'employee_role',
        'employee_id',
        'image',
        // 'check_in',
        // 'check_out',
        // 'total_hour'
    ];
    public function department(){
        return $this->belongsToMany(Department::class);
    }

}
