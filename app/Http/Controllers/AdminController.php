<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Newsletter;
use App\Models\Recruitment;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Storage;

class AdminController extends Controller
{

  /**
   * Display a registration form.
   *
   * @return \Illuminate\Http\Response
   */
  public function userAdd()
  {
    return view('dashboard.pages-users-add');
  }

  public function users()
  {
    $user = User::paginate(10);
    return view('dashboard.pages-users', ['users' => $user]);
  }

  /**
   * Store a new user.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $request->validate([
      'name' => 'required|string|max:250',
      'email' => 'required|email|max:250|unique:users',
      'password' => 'required|min:8|confirmed'
    ]);

    User::create([
      'name' => $request->name,
      'email' => $request->email,
      'password' => Hash::make($request->password)
    ]);

    $credentials = $request->only('email', 'password');
    Auth::attempt($credentials);
    $request->session()->regenerate();
    return redirect('/admin/users')
      ->withSuccess('You have successfully registered & logged in!');
  }
  public function editUser(User $user)
  {
    return view('dashboard.pages-users-edit', ['user' => $user]);
  }
  public function updateUser(Request $request, User $user)
  {
    $request->validate([
      'name' => 'required|string|max:250',
      'email' => 'required|email|max:250|unique:users',
      'password' => 'required|min:8|confirmed'
    ]);      

   $userData = ['name'=>$request->name, 'email'=>$request->email, 'password'=> Hash::make($request->password)];
    $user->update($userData);
    return redirect('/admin/users')->with(['message' => 'User actualizado com sucesso!', 'status' => 'success']);
  }

  public function destroyUser(Article $article)
  {
    Storage::delete('upload/img' . $article->image);
    Storage::delete('upload/ducuments' . $article->document);

    $article->delete();
    return redirect('/admin/artigos')->with(['message' => 'Artigo deletado com sucesso!', 'status' => 'info']);
  }

  /**
   * Display a login form.
   *
   * @return \Illuminate\Http\Response
   */
  public function login()
  {
    return view('dashboard.pages-login');
  }

  /**
   * Authenticate the user.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function authenticate(Request $request)
  {
    $credentials = $request->validate([
      'email' => 'required|email',
      'password' => 'required'
    ]);

    if (Auth::attempt($credentials)) {
      $request->session()->regenerate();
      return redirect('admin')
        ->withSuccess('You have successfully logged in!');
    }

    return back()->withErrors([
      'email' => 'Your provided credentials do not match in our records.',
    ])->onlyInput('email');

  }

  /**
   * Display a dashboard to authenticated users.
   *
   * @return \Illuminate\Http\Response
   */
  public function dashboard()
  {
    if (Auth::check()) {
      $countUsers = User::count();
      $countRecrut = Recruitment::count();
      $countNewsletter = Newsletter::count();
      $countArticles = Article::count();
      $totalMax = $countUsers + $countNewsletter + $countArticles + $countRecrut;
      $percUsers = ($countUsers / $totalMax) * 100;
      $percArtigos = ($countArticles / $totalMax) * 100;
      $percNewsletter = ($countNewsletter / $totalMax) * 100;
      $percRecrutamento = ($countRecrut / $totalMax) * 100;

      return view('dashboard.index', ['user' => $countUsers, 'recrutamento' => $countRecrut, 'newsletter' => $countNewsletter, 'artigos' => $countArticles, 
      'percUsers'=> $percUsers, 'percArtigos' => $percArtigos, 'percNews'=>$percNewsletter, 'percRecrutamento'=>$percRecrutamento]);
    }

    return redirect('login')
      ->withErrors([
        'email' => 'Please login to access the dashboard.',
      ])->onlyInput('email');
  }

  /**
   * Log out the user from application.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function logout(Request $request)
  {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('login')->withSuccess('You have logged out successfully!');
  }
  public function noticia()
  {
    $newsletter = Newsletter::paginate(10);
    return view('dashboard.pages-newsletter', ['newsletter' => $newsletter]);
  }
  public function noticiaAdd()
  {
    return view('dashboard.pages-newsletter-add');
  }
  public function storeNoticias(Request $request)
  {
    $request->validate([
      'title' => 'required|string|max:255',
      'date' => 'required',
      'image' => 'required|file|mimes:jpeg,jpg,png,gif',
      'document' => 'required|file|mimes:pdf,jpeg,jpg,png',
    ]);

    $imageName = time() . '.' . $request->image->extension();
    $documentName = time() . '.' . $request->document->extension();

    $request->image->storeAs('upload/img', $imageName);
    $request->document->storeAs('upload/ducuments', $documentName);


    $newsletterData = ['title' => $request->title, 'date' => $request->date, 'image' => $imageName, 'document' => $documentName];

    Newsletter::create($newsletterData);
    return redirect('/admin/noticias')->with(['message' => 'Newsletter adicionado com sucesso!', 'status' => 'success']);
  }
  public function editNoticia(Newsletter $newsletter)
  {
    return view('dashboard.pages-newsletter-edit', ['news' => $newsletter]);
  }
  public function updateNoticia(Request $request, Newsletter $newsletter)
  {
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

    $newsletterData = ['title' => $request->title, 'date' => $request->date, 'image' => $imageName, 'document' => $documentName];


    $newsletter->update($newsletterData);
    return redirect('/admin/noticias')->with(['message' => 'Notícia actualizado com sucesso!', 'status' => 'success']);
  }
  public function destroyNoticias(Newsletter $newsletter)
  {
    Storage::delete('upload/img' . $newsletter->image);
    Storage::delete('upload/ducuments' . $newsletter->document);

    $newsletter->delete();
    return redirect('/admin/noticias')->with(['message' => 'Notícia deletada com sucesso!', 'status' => 'info']);
  }

  public function artigosAdd()
  {
    return view('dashboard.pages-artigos-add');
  }

  public function indexRecrutamento()
  {
    $recrutamentos = Recruitment::paginate(10);
    return view('dashboard.pages-recrutamento', ['recrutamentos' => $recrutamentos]);
  }

  public function storeRecrutamento(Request $request)
  {
    $request->validate([
      'image' => 'required|file|mimes:jpeg,jpg,png,gif',
      'title' => 'required',
      'position' => 'required',
      'status' => 'required',
      'description' => 'required',
    ]);

    $imageName = time() . '.' . $request->image->extension();

    $request->image->storeAs('upload/img', $imageName);


    $recrutamentoData = ['image' => $imageName, 'title' => $request->title, 'position' => $request->position, 'status' => $request->status, 'description' => $request->description];

    Recruitment::create($recrutamentoData);
    return redirect('/admin/recrutamentos')->with(['message' => 'Recrutamentos adicionado com sucesso!', 'status' => 'success']);
  }

  public function recrutamentoAdd()
  {
    return view('dashboard.pages-recrutamento-add');
  }
  public function editRecrutamento(Recruitment $recruitment)
  {
    return view('dashboard.pages-recrutamento-edit', ['recrutamento' => $recruitment]);
  }
  public function updateRecrutamento(Request $request, Recruitment $recruitment)
  {
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

    $recruitmentData = ['image' => $imageName, 'title' => $request->title, 'position' => $request->position, 'status' => $request->status, 'description' => $request->description];


    $recruitment->update($recruitmentData);
    return redirect('/admin/recrutamentos')->with(['message' => 'Recrutamento Actualizado com sucesso!', 'status' => 'success']);
  }

  public function destroyRecrutamento(Recruitment $recruitment)
  {
    Storage::delete('upload/img' . $recruitment->image);
    Storage::delete('upload/ducuments' . $recruitment->document);

    $recruitment->delete();
    return redirect('/admin/recrutamentos')->with(['message' => 'Recrutamento deletado com sucesso!', 'status' => 'info']);
  }

  public function indexArticles()
  {
    // $articles = Article::orderBy('id', 'year')->paginate(3);
    $articles = Article::paginate(10);
    return view('dashboard.pages-artigos', ['articles' => $articles]);
  }
  public function storeArticle(Request $request)
  {

    $request->validate([
      'fullname' => 'required',
      'year' => 'required',
      'title' => 'required',
      'image' => 'required|file|mimes:jpeg,jpg,png,gif',
      'document' => 'required|file|mimes:pdf,jpeg,jpg,png',
    ]);

    $imageName = time() . '.' . $request->image->extension();
    $documentName = time() . '.' . $request->document->extension();

    $request->image->storeAs('upload/img', $imageName);
    $request->document->storeAs('upload/ducuments', $documentName);


    $articleData = ['name' => $request->fullname, 'year' => $request->year, 'title' => $request->title, 'image' => $imageName, 'document' => $documentName];

    Article::create($articleData);
    return redirect('/admin/artigos')->with(['message' => 'Artigo adicionado com sucesso!', 'status' => 'success']);
  }
  public function editArticle(Article $article)
  {
    return view('dashboard.pages-artigos-edit', ['article' => $article]);
  }
  public function updateArticles(Request $request, Article $article)
  {
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

    $articleData = ['name' => $request->fullname, 'year' => $request->year, 'title' => $request->title, 'image' => $imageName, 'document' => $documentName];


    $article->update($articleData);
    return redirect('/admin/artigos')->with(['message' => 'Artigo actualizado com sucesso!', 'status' => 'success']);
  }

  public function destroyArticles(Article $article)
  {
    Storage::delete('upload/img' . $article->image);
    Storage::delete('upload/ducuments' . $article->document);

    $article->delete();
    return redirect('/admin/artigos')->with(['message' => 'Artigo deletado com sucesso!', 'status' => 'info']);
  }

}