<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'institution_id',
        'from',
        'phonenumber',
        'email',
        'note'
    ];

    public function institution()
    {
        return $this->belongsTo(Institution::class);
    }
}
