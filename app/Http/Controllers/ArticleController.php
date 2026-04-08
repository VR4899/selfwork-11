<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         $articles = Article::all();
        return view('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    
    $request->validate([
        'title' => 'required|string|max:255',
        'subtitle' => 'required|string|max:255',
        'body' => 'required|string',
        'img' => 'nullable|image|max:2048',
    ]);

    $img = 'img/default.png';

    if ($request->hasFile('img')) {
        $img = $request->file('img')->store('img', 'public');
        
    }
    $article = Article::create([
        'title' => $request->title,
        'subtitle' => $request->subtitle,
        'body' => $request->body,
        'img' => $img,
        'user_id'=> Auth::user()->id,
    ]);
   
    

    return redirect()->back()->with('message', 'Articolo creato con successo');
}

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
         return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        if ($request->file('img')) {
            $img = $request->file('img')->store('img','public');

        } else {
            $img = $article->img;
        }
        $article->update([
            'title' => $request->title,
            'subtitle' => $request->subtitle,
            'body' => $request->body,
            'img' => $img,

        ]);

        return redirect(route('article.index'))->with('message', 'Articolo modificato con successo');


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->back()->with('message', 'Articolo eliminato correttamente');   
        }
}
