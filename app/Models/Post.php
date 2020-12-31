<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;

    protected static function booted()
    {
        parent::booted();

        static::updating(function ($post) {
            $post->adjust();
        });
    }

    public function adjustments()
    {
        return $this->belongsToMany(User::class, 'adjustments')
            ->latest('pivot_updated_at')
            ->withPivot(['id', 'before', 'after'])
            ->withTimestamps();
    }

    public function adjust($userId = null, $difference = null)
    {
        $userId = $userId ?: Auth::id();
        $difference = $difference ?: $this->getDifference();

        $this->adjustments()->attach($userId, $difference);
    }

    public function getDifference()
    {
        $changes = $this->getDirty();

        $before = json_encode(array_intersect_key($this->fresh()->toArray(), $changes));
        $after = json_encode($changes);

        return compact('before', 'after');
    }
}
