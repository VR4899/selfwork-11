<x-layout>
    <x-masthead title="Articolo di {{$article->user->name}}"></x-masthead>
    
    
    <div class="container ">
        <div class="row">
            
      
            
            <div class="col-12 col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$article->title}}</h5>
                        <p class="card-text">{{$article->subtitle}}</p>
                        <p class="card-text">{{$article->body}} </p>
                    

                        
                        
                        

                        @auth
                           <a href="{{route('article.edit',compact('article'))}}" class="btn btn-warning my-2">Modifica articolo</a>
                       
                     
                        <form action="{{route('article.destroy',compact('article'))}}" 
                        method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn btn-danger" type="submit"> Elimina articolo </button>
                         <a href="{{route('article.index')}}" class="btn btn-info my-2">Torna indietro</a>
                    
                        </form>
                        @endauth
                        
                    </div>
                </div>
                
            </div>
      
        </div>
    </div>
    
</x-layout>

