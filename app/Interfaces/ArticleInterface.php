<?php

namespace App\Interfaces;

use Illuminate\Http\Request;

interface ArticleInterface
{
    public function index(Request $request);

    public function store(Request $request);

    public function show($id, Request $request);

    public function update($id, Request $request);

    public function delete($id);
}