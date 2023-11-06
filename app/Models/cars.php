<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class cars extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function brand(): BelongsTo
    {
        return $this->belongsTo(brand_cars::class, 'brand_cars_id');
    }

    public function name(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_cars_id');
    }

    public function type(): BelongsTo
    {
        return $this->belongsTo(type_cars::class, 'type_cars_id');
    }

    public function status(): BelongsTo
    {
        return $this->belongsTo(status_cars::class, 'status_cars_id');
    }
}
