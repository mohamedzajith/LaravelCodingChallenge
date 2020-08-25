<?php
namespace App\Repositories;

use App\Interfaces\ArticleInterface;
use App\Model\Article;
use Exception;
use Illuminate\Http\Request;

class ArticleRepository implements ArticleInterface
{
    /**
     * list of articles
     * @param Request $request
     * @return Array of Objects
     * @throws Exception
     */
    public function index(Request $request)
    {
        try {
            $articles = Article::all();
            return $articles;
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    /**
     * create a article
     * @param Request $request ('id', 'author_id', 'title', 'url', 'content')
     * @return Objects
     * @throws Exception
     */
    public function store(Request $request)
    {
        try {
            $article = Article::create([
                'author_id' => $request->author_id,
                'title' => $request->title,
                'url' => $request->get('url'),
                'content' => $request->get('content'),
            ]);
            return $article;
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    /**
     * get a single article by id
     * @param $id - article id
     * @param Request $request
     * @return Object
     * @throws Exception
     */
    public function show($id, Request $request)
    {
        try {
            $article = Article::find($id);
            return $article;
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    /**
     * update the article
     * @param $id - article id
     * @param Request $request ('id', 'author_id', 'title', 'url', 'content')
     * @return Object
     * @throws Exception
     */
    public function update($id, Request $request)
    {
        try {
            $article = Article::find($id);
            if ($article) {
                Article::where('id',$id)->update([
                    'author_id' => $request->author_id ? $request->author_id : $article->author_id,
                    'title' => $request->title ? $request->title : $article->title,
                    'url' => $request->url ? $request->url : $article->url,
                    'content' => $request->get('content') ? $request->get('content') : $article->content
                ]);
                return Article::find($id);
            }
            throw new Exception('Article not found!', 404);
        } catch (Exception $exception) {
            throw $exception;
        }
    }

    /**
     * delete the article
     * @param $id - article id
     * @return mixed
     * @throws Exception
     */
    public function delete($id)
    {
        try {
            $article = Article::find($id);
            if ($article) {
                Article::where('id',$id)->delete();
                return $article;
            }
            throw new Exception('Article not found!',404);
        } catch (Exception $exception) {
            throw $exception;
        }
    }
}