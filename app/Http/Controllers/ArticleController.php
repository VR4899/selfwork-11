<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

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
    // 1. Validazione dei dati
    $request->validate([
        'title' => 'required|string|max:255',
        'subtitle' => 'required|string|max:255',
        'body' => 'required|string',
        'img' => 'nullable|image|max:2048',
    ]);

    // 2. Percorso immagine di default
    $img = 'img/default.png';

    // 3. Se l'utente carica un'immagine, salvala nello storage pubblico
    if ($request->hasFile('img')) {
        $img = $request->file('img')->store('img', 'public');
    }

    // 4. Creazione dell'articolo
    Article::create([
        'title' => $request->title,
        'subtitle' => $request->subtitle,
        'body' => $request->body,
        'img' => $img,
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
