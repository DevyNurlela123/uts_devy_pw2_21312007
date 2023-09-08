@extends('layout.master')

@section('judul')
    Tambah Peran
@endsection

@section('content')
<form method="post" action="/peran">
    @csrf
    <div class="form-group">
        <label>Film</label>
        <input type="text" name="Film" value="" class="form-control" >
    </div>

    @error('Film')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Cast</label>
        <input type="text" name="cast" value="" class="form-control" >
    </div>

    @error('cast')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Nama</label>
        <input type="number" name="nama" value="" class="form-control" >
    </div>

    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Action</label>
        <input type="text" name="action" value="" class="form-control" >
    </div>
    
    @error('action')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Genre</label>
        <select name="genre" class="form-control">
            <option value="">Pilih Genre</option>
            @forelse ($genre as $key => $item)
            <option value="{{ $item['id'] }}">{{ $item['nama'] }}</option>
            @empty
            @endforelse
        </select>
    </div>
    
    @error('genre_id')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection