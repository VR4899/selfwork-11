<x-layout>
   
    <x-masthead title="Inserisci un nuovo articolo"></x-masthead>


  <x-display-message/>


     <x-display-errors/>
   
    
    <div class="container">
        <div class="row mt-5">
            <div class="col-12 col-md-6 justify-content-center my-5">
                <form class="rounded-4 shadow bg-secondary-subtle p-3 "
                 action="{{route('article.store')}}" 
                 method="POST"
                 enctype="multipart/form-data">

                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo del articolo</label>
                        <input name='title' type="text" value="{{old('title')}}" class="form-control" id="title" >
                    </div>
                     <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo dell'articolo</label>
                        <input name="subtitle" type="text" class="form-control"   id="subtitle" cols="30">
                    </div>
                     <div class="mb-3">
                        <label for="body" class="form-label">Corpo dell'articolo</label>
                        <textarea name="body" class="form-control"   id="body" cols="30" rows="10">{{old('body')}}</textarea> 
                    </div>
                    
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci immagine</label>
                        <input name='img' type="file" class="form-control d-flex me-3 " id="img" >
                        
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                   
                   
                </form>
            </div>
            
        </div>
    </div>
    
    
</x-layout>