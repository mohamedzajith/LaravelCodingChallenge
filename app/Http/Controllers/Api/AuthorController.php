<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\AuthorInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class AuthorController extends Controller
{
    private $authorRepository;

    public function __construct(AuthorInterface $authorRepository)
    {
        $this->authorRepository = $authorRepository;
    }

    /**
     * create a author
     * @param Request $request - ('name')
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|max:255',
            ]);
            $author = $this->authorRepository->store($request);
            return $this->createResponse($author);
        } catch (ValidationException $validationException) {
            return $this->validationErrorResponse($validationException);
        } catch (Exception $exception) {
            return $this->exceptionErrorResponse($exception);
        }
    }
}
