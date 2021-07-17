@extends('layouts.frontend')
@section('title','Halaman detail')
@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-md-6 mx-auto text-center">
            <h1><strong>{{ $shop->title}}</strong></h1>
         <p class="text-muted">{{ $shop->created_at->format('d M Y') }} Posted by {{ $shop->user->name }}  <a href="{{ route('category.show',$shop->category->id )}}">{{ $shop->category->name }}</a></p>
        </div>
        <div class="col-md-8 mx-auto d-flex justify-content-center">
           <img width="730px" height="500px" src="{{ asset('storage/'. $shop->image ) }}" style="border-radius: 20px; object-fit: cover;">
        </div>
        <div class="col-md-8 mx-auto mt-4">
            <p>{{ $shop->description}}</p>
        </div>
        <div class="container mx-auto">
            <button type="submit" class="btn btn-primary mx-auto d-flex justify-content-center">Beli Sekarang</button>
    </div>
    </div>
</div>
@endsection