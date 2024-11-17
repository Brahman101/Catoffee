<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservasi extends Model
{
    use HasFactory;

    protected $table = 'reservasi';
    protected $fillable = ['menu', 'room', 'user_id'];

    public function setMenuAttribute($value)
    {
        $this->attributes['menu'] = !empty($value) ? $value : null;
    }

    public function getMenuAttribute($value)
    {
        return $value ?? 'No menu specified';
    }

    public function scopeWithValidMenu($query)
    {
        return $query->where(function ($q) {
            $q->whereNull('menu')
                ->orWhereRaw('LENGTH(menu) - LENGTH(REPLACE(menu, " ", "")) BETWEEN 1 AND 9');
        });
    }
}
