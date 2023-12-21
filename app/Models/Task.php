<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;


class Task extends Model
{
    use HasFactory;

    public function proyect(): BelongsTo
    {
        return $this->belongsTo(Proyect::class);
    }

    public function statu()
    {
        return $this->belongsTo(Statu::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function comment(): hasMany
    {
        return $this->hasMany(Comment::class);
    }
    
}
