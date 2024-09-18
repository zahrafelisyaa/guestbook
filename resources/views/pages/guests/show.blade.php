@extends('layouts.app')

@section('content')
    <div class="py-4">
        <h3 class="fw-bold mb-2 border-bottom">Show Guest Name</h3>

        <a href="{{ url()->previous() }}" class="btn btn-secondary mb-3">Kembali</a>

        <table class="table table-striped table-bordered">
            <th>ID</th>
            <td><strong>#{{ $guest->id }}</strong></td>
            <tr>
                <td>Guest Nama</td>
                <td>{{ $guest->fullname }}</td>
            </tr>
            <tr>
                <td>From</td>
                <td>{{ $guest->from }}</td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td>{{ $guest->phonenumber }}</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>{{ $guest->email }}</td>
            </tr>
            <tr>
                <td>Note</td>
                <td>{{ $guest->note }}</td>
            </tr>

        </table>
    </div>
@endsection
