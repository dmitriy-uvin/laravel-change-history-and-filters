<?php

namespace App\Filters\Document;

use App\Filters\QueryFilter;

class DocumentFilters extends QueryFilter
{
    public function type($type)
    {
        return $this->builder->where('type', $type);
    }

    public function length($order = 'desc')
    {
        return $this->builder->orderBy('length', $order);
    }
}
