<?php

namespace App\Models;

use App\Enums\TableStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Table extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'guest_number',
        'status',
        'location'
    ];

    protected $cast = [
        'status' => TableStatus::class,
        'location' => LocationStatus::class,
    ];

    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }
}
