<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\ArticleInterface;
use App\Interfaces\AuthorInterface;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

class ArticleController extends Controller
{
    private $articleRepository;

    public function __construct(ArticleInterface $articleRepository)
    {
        $this->articleRepository = $articleRepository;
    }

    /**
     * create a article
     * @param Request $request - Request $request ('id', 'author_id', 'title', 'url', 'content')
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'author_id' => 'required|exists:authors,id',
                'title' => 'required',
                'url' => 'required|unique:articles,url',
                'content' => 'required',
            ]);
            $article = $this->articleRepository->store($request);
            return $this->successResponse($article);
        } catch (ValidationException $validationException) {
            return $this->validationErrorResponse($validationException);
        } catch (Exception $exception) {
            return $this->exceptionErrorResponse($exception);
        }
    }

    /**
     * get list of articles
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        try {
            $article = $this->articleRepository->index($request);
            return $this->successResponse($article);
        } catch (ValidationException $validationException) {
            return $this->validationErrorResponse($validationException);
        } catch (Exception $exception) {
            return $this->exceptionErrorResponse($exception);
        }
    }

    /**
     * get a article by id
     * @param $id - article id
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function show($id, Request $request)
    {
        try {
            $article = $this->articleRepository->show($id, $request);
            return $this->successResponse($article);
        } catch (ValidationException $validationException) {
            return $this->validationErrorResponse($validationException);
        } catch (Exception $exception) {
            return $this->exceptionErrorResponse($exception);
        }
    }

    /**
     * update the article by id
     * @param $id - article id
     * @param Request $request - ('id', 'author_id', 'title', 'url', 'content')
     * @return \Illuminate\Http\JsonResponse
     */
    public function update($id, Request $request)
    {
        try {
            $request->validate([
                'author_id' => 'sometimes||required|exists:authors,id',
                'title' => 'sometimes||required',
                'url' => 'sometimes||required|unique:articles,url',
                'content' => 'sometimes||required',
            ]);
            $article = $this->articleRepository->update($id, $request);
            return $this->successResponse($article);
        } catch (ValidationException $validationException) {
            return $this->validationErrorResponse($validationException);
        } catch (Exception $exception) {
            return $this->exceptionErrorResponse($exception);
        }
    }

    /**
     * delete the article by id
     * @param $id - article id
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($id)
    {
        try {
            $article = $this->articleRepository->delete($id);
            return $this->successResponse($article);
        } catch (ValidationException $validationException) {
            return $this->validationErrorResponse($validationException);
        } catch (Exception $exception) {
            return $this->exceptionErrorResponse($exception);
        }
    }
}
