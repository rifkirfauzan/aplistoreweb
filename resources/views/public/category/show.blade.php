@extends('layouts.frontend')
@section('title','Halaman katalog')
@section('custom-style')
<style>
    .move-vertical-animation{
        transition: 0.2s;
    }
    
    .move-vertical-animation:hover{
        transform: translateY(-10px);
    }
    
    
</style>
@endsection

@section('content')
<main role="main">
    
    
    
    <div class="album py-5 bg-light">
        <div class="container">
            
            <h4 class="mb-4 text-center"> Katalog - {{ $category->name }}</h4>
            <div class="row">
                
          @foreach ($category->shops as $shop)                  
                <div class="col-md-4">
                    <div class="card mb-4 shadow-sm move-vertical-animation">
                        <a href="{{ route('post.show',$shop->slug)}}">
                            <img width="348px" height="225px" src="{{ asset('storage/'.$shop->image) }}" style="object-fit: cover;">
                        </a>
                        
                        
                        <div class="card-body">
                            <p class="card-text">{{ $shop->description }}</p>
                            <div class="d-flex justify-content-between align-items-center">                           
                                <small class="text-muted">{{ $shop->user->name }}</small>
                                <small class="text-muted">{{ $shop->created_at->diffForHumans() }}</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach      
            </div>
        </div>
    </div>
    
</main>
@endsection