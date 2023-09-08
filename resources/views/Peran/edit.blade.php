@extends('layout.master')

@section('judul')
Edit Peran
@endsection

@section('content')
<form  method="post" action="/peran/{{ $peran->id }}">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Film</label>
        <input type="text" name="film" value="{{ $film->Film }}" class="form-control">
    </div>
    @error('film')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <div class="form-group">
        <label>Cast</label>
        <input type="text" name="cast" value="{{ $film->cast }}" class="form-control">
    </div>
    @error('cast')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $cast->nama }}" class="form-control">
    </div>
    @error('nama')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <div class="form-group">
        <label>Action</label>
        <input type="text" name="poster" value="{{ $film->action }}" class="form-control">
    </div>
    @error('action')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <div class="form-group">
        <label>Genre</label>
        <input type="text" name="genre_id" value="{{ $film->genre_id }}" class="form-control">
    </div>
    @error('genre_id')
        <div class="alert alert-danger">{{$message}}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection