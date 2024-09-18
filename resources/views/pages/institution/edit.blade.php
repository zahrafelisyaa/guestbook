@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h3 class="fw-bold mb-3 pb-2 border-bottom">Edit Nama</h3>

        <a href="{{ route('admin.institution.index') }}" class="btn btn-sm btn-secondary mb-3">Kembali</a>

        <form action="{{ route('admin.institution.update', $institution->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label for="name" class="form-label">Nama</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $institution->name}}" />
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('admin.institution.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
@endsection
