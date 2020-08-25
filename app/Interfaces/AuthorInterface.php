<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface AuthorInterface
{
    public function store(Request $request);
}