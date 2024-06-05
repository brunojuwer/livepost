<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $casts = [
        'body' => 'array',
    ];

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'post_id');
    }

    public function getTittleUpperCaseAttribute(): string // accessor version 8
    {
        return strtoupper($this->title);
    }

    protected function title(): Attribute // accessor and mutator version 10
    {
        return Attribute::make(
            get: fn (string $value) => ucwords($value), // accessor
            set: fn (string $value) => strtoupper($value), // mutator
        );
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'post_user', 'post_id', 'user_id');
    }
}
