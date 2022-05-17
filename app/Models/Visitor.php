<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Visitor extends Model
{
    use HasFactory;
    protected $fillable=['name','phone_number','email','address','gender','description','visit_who','in_time','out_time','designation'];

    //relationship between visitor and user
    public function user(): BelongsTo
        {
            return $this->belongsTo(User::class);
        }
}
