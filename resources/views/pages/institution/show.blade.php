@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h3 class="fw-bold mb-2 pb-2 border-bottom">Detail Institution</h3>

        <a href="{{ route('admin.institution.index') }}" class="btn btn-sm btn-secondary mb-2">Kembali</a>
        <table class="table table-striped table-bordered">
            <tr>
                <th>ID</th>
                <td><strong>{{ $institution->id }}</strong></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>{{ $institution->name }}</td>
            </tr>
            <tr>
                <th>Created_At</th>
                <td>{{ \Carbon\Carbon::parse($institution->created_at)->isoFormat('DD MMM Y HH:mm') }}</td>
            </tr>
            <tr>
                <th>Updated_At</th>
                <td>{{ \Carbon\Carbon::parse($institution->updated_at)->isoFormat('DD MMM Y HH:mm') }}</td>
            </tr>

        </table>
    </div>
@endsection