@extends('layouts.app')
@section('title','Halaman Tambah Data')
@section('content')
<div class="container d-flex justify-content-center">
    <div class="card w-50">
        <div class="card-header">Buat postingan baru</div>
        <div class="card-body">
            <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="title">Judul postingan</label>
                    <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" name="title">
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <select id="category" class="form-control @error('category_id') is-invalid @enderror" name="category_id">
                        <option value="1">Baju koko</option>
                        <option value="2">Baju Muslim Wanita</option>
                        <option value="3">Kerudung</option>
                    </select>
                    @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" id="image" class="form-control @error('image') is-invalid @enderror" name="image">
                    @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" id="description" cols="30" rows="5" class="form-control  @error('description') is-invalid @enderror" name="description"></textarea>
                    @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
                </div>
                <button type="submit" class="btn btn-primary float-right">Buat</button>
            </form>
        </div>
    </div>
</div>
@endsection