<?php

namespace App\Models;

use App\Filters\QueryFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;

    public function scopeFilter($builder, QueryFilter $filters)
    {
        return $filters->apply($builder);
    }
}
