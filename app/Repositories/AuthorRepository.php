<?php
namespace App\Repositories;

use App\Interfaces\AuthorInterface;
use App\Model\Author;
use Exception;
use Illuminate\Http\Request;

class AuthorRepository implements AuthorInterface
{
    /**
     * @param Request $request - ('name')
     * @return Object
     * @throws Exception
     */
    public function store(Request $request)
    {
        try {
            $author = Author::create([
                "name" => $request->name,
            ]);
            return $author;
        } catch (Exception $exception) {
            throw $exception;
        }
    }
}