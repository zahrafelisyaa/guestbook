@extends('layouts.app')

@section('content')
    <div class="page-heading">
        <div class="page-title mb-3">
            <h3>
                <span class="bi bi-building"></span>
                Institution
            </h3>
        </div>

        <a href="{{ route('admin.institution.create') }}" class="btn btn-primary mb-3">
            <span class="bi bi-plus-circle"></span>
            Create New
        </a>

        <section class="section">
            <div class="card">
                <div class="card-body">
                    <table id="datatable" class="table table-striped">
                        <thead>
                            <tr>
                                <th>Institution Name</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($institutions as $item)
                                <tr>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <a href="{{ route('admin.institution.show', $item->id) }}" class="btn btn-outline-secondary btn-sm me-1">
                                            <span class="bi bi-eye"></span>
                                            Show
                                        </a>
                                        <a href="{{ route('admin.institution.edit', $item->id) }}" class="btn btn-secondary btn-sm me-1">
                                            <span class="bi bi-pencil"></span>
                                            Edit
                                        </a>
                                        <a href="#" class="btn btn-danger btn-sm me-1" onclick="handleDestroy('{{ route('admin.institution.destroy', $item->id) }}')">
                                            <span class="bi bi-trash"></span>
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <form action="" id="form-delete" method="post" class="d-inline">
        @csrf
        @method('delete')
    </form>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ asset('/vendors/simple-datatables/style.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('/vendors/simple-datatables/simple-datatables.js') }}"></script>
    <script>
        // Simple Datatable
        let datatable = document.querySelector('#datatable');
        new simpleDatatables.DataTable(datatable);
    </script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
        function handleDestroy(url) {
            swal({
                title: "Apakah anda yakin?",
                text: "Data yang di hapus tidak dapat dikembalikan!",
                icon: "warning",
                buttons: ['Batal','Ya, Hapus'],
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $('#form-delete').attr('action', url);
                    $('#form-delete').submit();
                }
            });
        }
    </script>
@endpush
