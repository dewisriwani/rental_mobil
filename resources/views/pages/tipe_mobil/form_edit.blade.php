@extends('template.index')

@section('content')
    <div class="container-fluid px-4">
        <h1 class="mt-4">Tipe Mobil</h1>
        <div class="d-flex justify-content-between mb-3">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Edit Data Tipe Mobil</li>
            </ol>
            <a href="/tipemobil" class="btn btn-warning">kembali</a>
        </div>
        <div class="card shadow">
            <div class="card-body">
                <form action="/tipemobil/update/{{ $tipeMobilData->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Tipe Mobil</label>
                        <input type="text" value="{{$tipeMobilData->tipe}}" class="form-control" name="tipe" required>
                        
                    </div>
                    <div class="form-group mt-3">
                        <button class="form-control btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection