<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Newsletter;
use App\Models\Recruitment;
use Illuminate\Http\Request;
use Storage;

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
        $newsletter = Newsletter::all();
        return view('dashboard.pages-newsletter', ['newsletter' => $newsletter]);
    }
    public function noticiaAdd(){
        return view('dashboard.pages-newsletter-add');
    }
    public function storeNoticias(Request $request){
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'image' => 'required|file|mimes:jpeg,jpg,png,gif',
            'document' => 'required|file|mimes:pdf,jpeg,jpg,png',
        ]);

        $imageName =  time() . '.' . $request->image->extension();
        $documentName =  time() . '.' . $request->document->extension();

        $request->image->storeAs('upload/img', $imageName);
        $request->document->storeAs('upload/ducuments', $documentName);

      
        $newsletterData = ['title' => $request->title,  'date' => $request->date, 'image' => $imageName, 'document' => $documentName];
      
        Newsletter::create($newsletterData);
        return redirect('/admin/noticias')->with(['message' => 'Newsletter adicionado com sucesso!', 'status' => 'success']);
    }
    public function editNoticia(Newsletter $newsletter) {
        return view('dashboard.pages-newsletter-edit', ['news' => $newsletter]);
    }
    public function updateNoticia(Request $request, Newsletter $newsletter) {
        $request->validate([
            'title' => 'required',
            'date' => 'required',
            'image' => 'required|file|mimes:jpeg,jpg,png,gif',
            'document' => 'required|file|mimes:pdf,jpeg,jpg,png',
        ]);

        $imageName = '';
        $documentName = '';
        if ($request->hasFile('image') && $request->hasFile('document')) {
          $imageName = time() . '.' . $request->image->extension();
          $documentName = time() . '.' . $request->document->extension();
          $request->image->storeAs('upload/img', $imageName);
          $request->document->storeAs('upload/ducuments', $documentName);
          if ($newsletter->image && $newsletter->document) {
            Storage::delete('upload/img' . $newsletter->image);
            Storage::delete('upload/ducuments' . $newsletter->document);
          }
        } else {
          $imageName = $newsletter->image;
          $documentName = $newsletter->document;
        }
    
        $newsletterData = ['title' => $request->title,  'date' => $request->date, 'image' => $imageName, 'document' => $documentName];
        
    
        $newsletter->update($newsletterData);
        return redirect('/admin/noticias')->with(['message' => 'Notícia actualizado com sucesso!', 'status' => 'success']);
      }
      public function destroyNoticias(Newsletter $newsletter) {
        Storage::delete('upload/img' . $newsletter->image);
        Storage::delete('upload/ducuments' . $newsletter->document);

        $newsletter->delete();
        return redirect('/admin/noticias')->with(['message' => 'Notícia deletada com sucesso!', 'status' => 'info']);
      }

    public function artigosAdd()
    {
        return view('dashboard.pages-artigos-add');
    }

    public function indexRecrutamento(){
        $recrutamentos = Recruitment::all();
        return view('dashboard.pages-recrutamento', ['recrutamentos'=>$recrutamentos]);
    }

    public function storeRecrutamento(Request $request){
        $request->validate([
            'image' => 'required|file|mimes:jpeg,jpg,png,gif',
            'title' => 'required',  
            'position' => 'required',
            'status' => 'required',          
            'description' => 'required',
        ]);

        $imageName =  time() . '.' . $request->image->extension();
       
        $request->image->storeAs('upload/img', $imageName);

      
        $recrutamentoData = ['image' => $imageName,  'title' => $request->title, 'position' => $request->position,  'status' => $request->status, 'description' => $request->description];
      
        Recruitment::create($recrutamentoData);
        return redirect('/admin/recrutamentos')->with(['message' => 'Recrutamentos adicionado com sucesso!', 'status' => 'success']);
    }

    public function recrutamentoAdd(){
        return view('dashboard.pages-recrutamento-add');
    }
    public function editRecrutamento(Recruitment $recruitment) {
        return view('dashboard.pages-recrutamento-edit', ['recrutamento' => $recruitment]);
      }
    public function updateRecrutamento(Request $request, Recruitment $recruitment) {
        $request->validate([
            'image' => 'required|file|mimes:jpeg,jpg,png,gif',
            'title' => 'required',  
            'position' => 'required',
            'status' => 'required',          
            'description' => 'required',
        ]);

        $imageName = '';
        if ($request->hasFile('image')) {
          $imageName = time() . '.' . $request->image->extension();
          $request->image->storeAs('upload/img', $imageName);
          if ($recruitment->image) {
            Storage::delete('upload/img' . $recruitment->image);
          }
        } else {
          $imageName = $recruitment->image;
        }
    
        $recruitmentData = ['image' =>$imageName,  'title' => $request->title, 'position' => $request->position,  'status' => $request->status, 'description' => $request->description];
        
    
        $recruitment->update($recruitmentData);
        return redirect('/admin/recrutamentos')->with(['message' => 'Recrutamento Actualizado com sucesso!', 'status' => 'success']);
      }

      public function destroyRecrutamento(Recruitment $recruitment) {
        Storage::delete('upload/img' . $recruitment->image);
        Storage::delete('upload/ducuments' . $recruitment->document);

        $recruitment->delete();
        return redirect('/admin/recrutamentos')->with(['message' => 'Recrutamento deletado com sucesso!', 'status' => 'info']);
      }

    public function indexArticles() {
        // $articles = Article::orderBy('id', 'year')->paginate(3);
        $articles = Article::all();
        return view('dashboard.pages-artigos', ['articles' => $articles]);
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

        $imageName =  time() . '.' . $request->image->extension();
        $documentName =  time() . '.' . $request->document->extension();

        $request->image->storeAs('upload/img', $imageName);
        $request->document->storeAs('upload/ducuments', $documentName);

      
        $articleData = ['name' => $request->fullname,  'year' => $request->year, 'title' => $request->title, 'image' => $imageName, 'document' => $documentName];
      
        Article::create($articleData);
        return redirect('/admin/artigos')->with(['message' => 'Artigo adicionado com sucesso!', 'status' => 'success']);
    }
    public function editArticle(Article $article) {
        return view('dashboard.pages-artigos-edit', ['article' => $article]);
      }
    public function updateArticles(Request $request, Article $article) {
        $request->validate([
            'fullname' => 'required',
            'year' => 'required',
            'title' => 'required',
            'image' => 'required|file|mimes:jpeg,jpg,png,gif',
            'document' => 'required|file|mimes:pdf,jpeg,jpg,png',
        ]);

        $imageName = '';
        $documentName = '';
        if ($request->hasFile('image') && $request->hasFile('document')) {
          $imageName = time() . '.' . $request->image->extension();
          $documentName = time() . '.' . $request->document->extension();
          $request->image->storeAs('upload/img', $imageName);
          $request->document->storeAs('upload/ducuments', $documentName);
          if ($article->image && $article->document) {
            Storage::delete('upload/img' . $article->image);
            Storage::delete('upload/ducuments' . $article->document);
          }
        } else {
          $imageName = $article->image;
          $documentName = $article->document;
        }
    
        $articleData = ['name' => $request->fullname,  'year' => $request->year, 'title' => $request->title, 'image' => $imageName, 'document' => $documentName];
        
    
        $article->update($articleData);
        return redirect('/admin/artigos')->with(['message' => 'Artigo actualizado com sucesso!', 'status' => 'success']);
      }

      public function destroyArticles(Article $article) {
        Storage::delete('upload/img' . $article->image);
        Storage::delete('upload/ducuments' . $article->document);

        $article->delete();
        return redirect('/admin/artigos')->with(['message' => 'Artigo deletado com sucesso!', 'status' => 'info']);
      }
 
}