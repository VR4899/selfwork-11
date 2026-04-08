<x-layout>
  
    <x-masthead title="Articoli"></x-masthead>
    
      <x-display-message/>
    
    
    <div class="container">
        <div class="row">

            
            @foreach ($articles as $article)
            
            <div class="col-12 col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-text">{{$article->subtitle}}</p>
                        <p class="card-text">{{$article->body}} </p>
                        
                        <a href="{{route('article.show',compact('article'))}}" class="btn btn-primary ">Dettaglio articolo</a>


                    </div>
                </div>
                
            </div>
            @endforeach
        </div>
    </div>
    
</x-layout>