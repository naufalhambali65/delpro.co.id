@extends('admin.layouts.main')
@section('container')
    <div class="row g-4">
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center">
                    <h2 class="card-title mb-0 fw-bold">
                        <i class="fas fa-shapes me-2 text-primary"></i> All Types
                    </h2>
                    <div class="ms-auto">
                        <button class="btn btn-sm btn-primary btn-add-type"><i class="fas fa-plus-circle me-1"></i> Add
                            Types</button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr class="text-center align-middle">
                                <th>No</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($types->count() > 0)
                                @foreach ($types as $type)
                                    <tr>
                                        <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                        <td class="text-center align-middle">{{ $type->name }}</td>
                                        <td class="text-center align-middle">
                                            <a href="#" class="btn btn-primary btn-edit-type"
                                                data-id="{{ $type->id }}" data-name="{{ $type->name }}">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('types.destroy', $type->id) }}" method="post"
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
                                    <td colspan="3" class="text-muted py-4 text-center">
                                        <i class="fas fa-info-circle me-1"></i>
                                        You haven't added any data. Start by adding one!
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center">
                    <h2 class="card-title mb-0 fw-bold">
                        <i class="fas fa-palette me-2 text-primary"></i> All Styles
                    </h2>
                    <div class="ms-auto">
                        <button class="btn btn-sm btn-primary btn-add-style"><i class="fas fa-plus-circle me-1"></i> Add
                            Styles</button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr class="text-center align-middle">
                                <th>No</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($styles->count() > 0)
                                @foreach ($styles as $style)
                                    <tr>
                                        <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                        <td class="text-center align-middle">{{ $style->name }}</td>
                                        <td class="text-center align-middle">
                                            <a href="#" class="btn btn-primary btn-edit-style"
                                                data-id="{{ $style->id }}" data-name="{{ $style->name }}">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('styles.destroy', $style->id) }}" method="post"
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
                                    <td colspan="3" class="text-muted py-4 text-center">
                                        <i class="fas fa-info-circle me-1"></i>
                                        You haven't added any data. Start by adding one!
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center">
                    <h2 class="card-title mb-0 fw-bold">
                        <i class="fas fa-city me-2 text-primary"></i> All Cities
                    </h2>
                    <div class="ms-auto">
                        <button class="btn btn-sm btn-primary btn-add-city"><i class="fas fa-plus-circle me-1"></i> Add
                            Cities</button>

                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body table-responsive p-0" style="height: 300px;">
                    <table class="table table-head-fixed text-nowrap">
                        <thead>
                            <tr class="text-center align-middle">
                                <th>No</th>
                                <th>Name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($cities->count() > 0)
                                @foreach ($cities as $city)
                                    <tr>
                                        <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                        <td class="text-center align-middle">{{ $city->name }}</td>
                                        <td class="text-center align-middle">
                                            <a href="#" class="btn btn-primary btn-edit-city"
                                                data-id="{{ $city->id }}" data-name="{{ $city->name }}">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('cities.destroy', $city->id) }}" method="post"
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
                                    <td colspan="3" class="text-muted py-4 text-center">
                                        <i class="fas fa-info-circle me-1"></i>
                                        You haven't added any data. Start by adding one!
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
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h2 class="card-title mb-0 fw-bold">
                        <i class="fas fa-pencil-ruler me-2 text-primary"></i> All Projects
                    </h2>
                    <div class="ms-auto">
                        <a href="{{ route('projects.create') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-plus-circle me-1"></i> Add Project
                        </a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="dataTable" class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center align-middle">
                                <th>No</th>
                                <th>Title</th>
                                <th>Client Name</th>
                                <th>Visibility</th>
                                <th>Job Status</th>
                                <th>Progress</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($projects->count() > 0)
                                @foreach ($projects as $project)
                                    <tr>
                                        <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                        <td class="text-center align-middle">{{ $project->title }}</td>
                                        <td class="text-center align-middle">{{ $project->client_name }}</td>
                                        <td class="text-center align-middle">
                                            @if ($project->visibility === 'public')
                                                <span class="badge bg-success">Public</span>
                                            @else
                                                <span class="badge bg-secondary">Private</span>
                                            @endif
                                        </td>
                                        <td class="text-center align-middle">
                                            @switch($project->job_status)
                                                @case('waiting')
                                                    <span class="badge bg-secondary">Waiting</span>
                                                @break

                                                @case('in_progress')
                                                    <span class="badge bg-warning text-dark">In Progress</span>
                                                @break

                                                @case('in_review')
                                                    <span class="badge bg-info text-dark">In Review</span>
                                                @break

                                                @case('done')
                                                    <span class="badge bg-success">Done</span>
                                                @break

                                                @case('cancelled')
                                                    <span class="badge bg-dark">Cancelled</span>
                                                @break

                                                @case('rejected')
                                                    <span class="badge bg-danger">Rejected</span>
                                                @break

                                                @default
                                                    <span class="badge bg-light text-dark">Unknown</span>
                                            @endswitch
                                        </td>
                                        <td class="text-center align-middle">
                                            <div class="progress" style="height: 20px;">
                                                <div class="progress-bar
                                                    @if ($project->progress < 50) bg-danger
                                                    @elseif($project->progress < 80) bg-warning
                                                    @else bg-success @endif"
                                                    role="progressbar" style="width: {{ $project->progress }}%;"
                                                    aria-valuenow="{{ $project->progress }}" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                    {{ $project->progress }}%
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-center align-middle">
                                            <img src="{{ asset('storage/public/' . $project->cover_image) }}"
                                                alt="{{ $project->title }}" class="img-thumbnail"
                                                style="width: 200px; height: 150px; object-fit: cover;">
                                        </td>
                                        <td class="text-center align-middle">
                                            <a href="{{ route('projects.show', $project->slug) }}">
                                                <button class="btn btn-success">
                                                    <i class="fas fa-eye"></i>
                                                </button>
                                            </a>
                                            <a href="{{ route('projects.edit', $project->slug) }}">
                                                <button class="btn btn-primary">
                                                    <i class="fas fa-pencil-alt "></i>
                                                </button>
                                            </a>
                                            <form action="{{ route('projects.destroy', $project->slug) }}" method="post"
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
                                    <td colspan="8" class="text-muted py-4 text-center">
                                        <i class="fas fa-info-circle me-1"></i>
                                        You haven't added any data. Start by adding one!
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

    <!-- Type Modal -->
    <div class="modal fade" id="typeModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="typeModalLabel">Add Type</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form id="typeForm" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" id="typeFormMethod" value="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name-type" name="name" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Style Modal -->
    <div class="modal fade" id="styleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="styleModalLabel">Add Style</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form id="styleForm" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" id="styleFormMethod" value="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name-style" name="name" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- City Modal -->
    <div class="modal fade" id="cityModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="cityModalLabel">Add Style</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <form id="cityForm" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" id="cityFormMethod" value="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name-city" name="name" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-success">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    {{-- Bootstrap Js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
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
                            columns: [0, 1, 2, 3, 4]
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

        // Type Handle Modal
        $(function() {
            $('.btn-add-type').on('click', function() {
                $('#typeModalLabel').text('Add Type');
                $('#typeForm').attr('action', "{{ route('types.store') }}");
                $('#typeFormMethod').val('POST');
                $('#typeForm')[0].reset();
                $('#typeModal').modal('show');
            });

            $('.btn-edit-type').on('click', function() {
                const id = $(this).data('id');
                const name = $(this).data('name');

                $('#typeModalLabel').text('Edit Type');
                $('#typeForm').attr('action', "{{ route('types.update', ':id') }}".replace(':id', id));
                $('#typeFormMethod').val('PUT');
                $('#name-type').val(name);
                $('#typeModal').modal('show');
            });
        });

        // Style Handle Modal
        $(function() {
            $('.btn-add-style').on('click', function() {
                $('#styleModalLabel').text('Add Style');
                $('#styleForm').attr('action', "{{ route('styles.store') }}");
                $('#styleFormMethod').val('POST');
                $('#styleForm')[0].reset();
                $('#styleModal').modal('show');
            });

            $('.btn-edit-style').on('click', function() {
                const id = $(this).data('id');
                const name = $(this).data('name');

                $('#styleModalLabel').text('Edit Style');
                $('#styleForm').attr('action', "{{ route('styles.update', ':id') }}".replace(':id', id));
                $('#styleFormMethod').val('PUT');
                $('#name-style').val(name);

                $('#styleModal').modal('show');
            });
        });

        // City Handle Modal
        $(function() {
            $('.btn-add-city').on('click', function() {
                $('#cityModalLabel').text('Add City');
                $('#cityForm').attr('action', "{{ route('cities.store') }}");
                $('#cityFormMethod').val('POST');
                $('#cityForm')[0].reset();
                $('#cityModal').modal('show');
            });

            $('.btn-edit-city').on('click', function() {
                const id = $(this).data('id');
                const name = $(this).data('name');

                $('#cityModalLabel').text('Edit City');
                $('#cityForm').attr('action', "{{ route('cities.update', ':id') }}".replace(':id', id));
                $('#cityFormMethod').val('PUT');
                $('#name-city').val(name);

                $('#cityModal').modal('show');
            });
        });
    </script>
@endsection
