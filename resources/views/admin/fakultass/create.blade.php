@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        Tambah Data
    </div>
    <div class="card-body">
        <form action="{{ route("admin.fakultass.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group {{ $errors->has('nama') ? 'has-validated' : '' }}">
                <label for="nama">Nama Fakultas</label>
                <input type="text" id="nama" name="nama" class="form-control" value="{{ old('nama', isset($fakultas) ? $fakultas->nama : '') }}" step="0.01" required>
                <span class='text-danger'>{{$errors->first('nama')}}</span>
            </div>
            <div>
                <input class="btn btn-danger" type="submit" value="{{ trans('global.save') }}">
            </div>
        </form>
    </div>
</div>
@endsection