<?php

namespace App\Http\Controllers;

use App\Filters\Document\DocumentFilters;
use App\Models\Document;

class DocumentsController extends Controller
{
    public function index(DocumentFilters $filters)
    {
        return view('documents', [
            'documents' => Document::filter($filters)->get()
        ]);
    }
}
