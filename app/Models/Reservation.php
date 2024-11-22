<?php

namespace App\Models;

use App\Models\Room;
use Illuminate\Database\Eloquent\Model;
use PHPUnit\Framework\Constraint\Count;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    /** @use HasFactory<\Database\Factories\ReservationFactory> */
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function courses()
    {
        return $this->hasMany(Course::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
