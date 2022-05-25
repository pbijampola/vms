<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitee extends Model
{
    use HasFactory;

    protected $fillable=['name','email','mobile_number','host','purpose','invite_date','invite_time'];
}
