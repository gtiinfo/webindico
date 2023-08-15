<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function dashboard()
    {
        return view('dashboard.index');
    }

    public function users(){
        return view('dashboard.pages-users');
    }
    public function userAdd(){
        return view('dashboard.pages-users-add');
    }
    public function noticia(){
        return view('dashboard.pages-newsletter');
    }
    public function noticiaAdd(){
        return view('dashboard.pages-newsletter-add');
    }

    public function artigosAdd()
    {
        return view('dashboard.pages-artigos-add');
    }

    public function storeArticle( Request $request )
    {

        $request->validate([
            'fullname' => 'required',
            'year' => 'required',
            'title' => 'required',
            'image' => 'required|file|mimes:jpeg,jpg,png,gif',
            'document' => 'required|file|mimes:pdf,jpeg,jpg,png',
        ]);

        $imageDir = $request->file('image')->storePublicly('image/articles');
        $documentDir = $request->file('document')->storePublicly('document/articles');
      
        $article = new Article;
        $article->name = $request->fullname;
        $article->title = $request->title;
        $article->year = $request->year;
        $article->image = $imageDir;
        $article->document = $documentDir;

        if ($article->save()) {
            return back()->with('message', 'article was succesfully added');
        }
       

        return back()->withErrors('any error ocured while trying to add article');
    }
    public function artigos()
    {
        $articles = Article::all();
        return view('dashboard.pages-artigos', compact('articles'));
    }


}