<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $casts = [
        'id' => 'string',
    ];
    protected $with = ['guestMessages'];

    public function guestMessages()
    {
        return $this->hasMany(GuestMessage::class);
    }
}
