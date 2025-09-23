@extends('admin.layouts.main')
@section('container')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h2 class="card-title mb-0 fw-bold">
                        <i class="fas fa-users me-2 text-primary"></i> All Teams
                    </h2>
                    <div class="ms-auto">
                        <a href="{{ route('teams.create') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus-circle me-1"></i> Add Team
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="dataTable" class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center align-middle">
                                <th style="width: 50px;">No</th>
                                <th style="width: 200px;">Name</th>
                                <th style="width: 200px;">Role</th>
                                <th style="width: 100px;">Photo</th>
                                <th style="width: 150px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($teams->count() > 0)
                                @foreach ($teams as $team)
                                    <tr>
                                        <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                        <td class="text-center align-middle">{{ $team->name }}</td>
                                        <td class="text-center align-middle">{{ $team->role }}</td>
                                        <td class="text-center align-middle">
                                            <img src="{{ asset('storage/' . $team->photo) }}" alt="{{ $team->name }}"
                                                class="img-thumbnail"
                                                style="width: 100px; height: 120px; object-fit: cover;">
                                        </td>
                                        <td class="text-center align-middle">
                                            <a href="{{ route('teams.show', $team->id) }}">
                                                <button class="btn btn-success">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </a>
                                            <a href="{{ route('teams.edit', $team->id) }}">
                                                <button class="btn btn-primary">
                                                    <i class="fas fa-pencil-alt "></i>
                                                </button>
                                            </a>
                                            <form action="{{ route('teams.destroy', $team->id) }}" method="post"
                                                class="d-inline ">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger border-0 btn-hapus">
                                                    <i class="fas fa-trash-alt"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="bg-light">
                                    <td colspan="5" class="text-muted py-4 text-center">
                                        <i class="fas fa-info-circle me-1"></i>
                                        You haven't added any teams. Start by adding one!
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
        $(function() {
            const exportButtons = ["copy", "csv", "excel", "pdf", "print"];

            $("#dataTable").DataTable({
                responsive: true,
                lengthChange: false,
                autoWidth: false,
                buttons: $.map(exportButtons, function(btn) {
                    return {
                        extend: btn,
                        exportOptions: {
                            columns: [0, 1, 2] // hanya export No, Name, Role
                        }
                    };
                })
            }).buttons().container().appendTo('#dataTable_wrapper .col-md-6:eq(0)');
        });

        $('.btn-hapus').on('click', function(e) {
            e.preventDefault();

            const form = $(this).closest('form');

            Swal.fire({
                title: 'Are you sure?',
                text: "This data will be permanently deleted.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
        });
    </script>
@endsection
