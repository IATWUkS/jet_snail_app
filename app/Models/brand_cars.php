<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class brand_cars extends Model
{
    public $timestamps = false;

    public function brand(): BelongsTo
    {
        return $this->belongsTo(brand_cars::class);
    }
}
