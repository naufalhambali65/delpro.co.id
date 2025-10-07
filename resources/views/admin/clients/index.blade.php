@extends('admin.layouts.main')
@section('container')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h2 class="card-title mb-0 fw-bold">
                        <i class="fas fa-briefcase me-2 text-primary"></i> All Clients
                    </h2>
                    <div class="ms-auto">
                        <button type="button" class="btn btn-sm btn-primary btn-add" data-bs-toggle="modal"
                            data-bs-target="#clientModal">
                            <i class="fas fa-plus-circle me-1"></i> Add Client
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="dataTable" class="table table-bordered table-striped">
                        <thead>
                            <tr class="text-center align-middle">
                                <th style="width: 50px;">No</th>
                                <th style="width: 200px;">Name</th>
                                <th style="width: 200px;">Category</th>
                                <th style="width: 100px;">Logo</th>
                                <th style="width: 150px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($clients->count() > 0)
                                @foreach ($clients as $client)
                                    <tr>
                                        <td class="text-center align-middle">{{ $loop->iteration }}</td>
                                        <td class="text-center align-middle">{{ $client->name }}</td>
                                        <td class="text-center align-middle">{{ $client->category->name }}</td>
                                        <td class="text-center align-middle">
                                            <img src="{{ asset('storage/public/' . $client->logo) }}"
                                                alt="{{ $client->name }}" class="img-thumbnail"
                                                style="width: 220px; height: auto; object-fit: cover;">
                                        </td>
                                        <td class="text-center align-middle">
                                            <a href="#" class="btn btn-primary btn-edit" data-id="{{ $client->id }}"
                                                data-name="{{ $client->name }}" data-category="{{ $client->category_id }}"
                                                data-logo="{{ asset('storage/public/' . $client->logo) }}"
                                                data-oldlogo="{{ $client->logo }}">
                                                <i class="fas fa-pencil-alt"></i>
                                            </a>
                                            <form action="{{ route('clients.destroy', $client->id) }}" method="post"
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
                                        You haven't added any client. Start by adding one!
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

    <!-- Modal -->
    <div class="modal fade" id="clientModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="clientModalLabel">Add Client</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <form id="clientForm" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="_method" id="formMethod" value="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="category_id" class="form-label">Category</label>
                            <select class="form-select" id="category_id" name="category_id" required>
                                <option value="" disabled selected hidden>-- Select Category --</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="logo" class="form-label">Logo</label>
                            <img class="img-preview img-fluid mb-3 col-sm-5">
                            <input type="hidden" name="old_logo" id="old_logo">
                            <input class="form-control" type="file" id="logo" name="logo"
                                onchange="previewImage()">
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
    <script>
        function previewImage() {
            const image = document.querySelector('#logo');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }

        }

        $(function() {
            // Tambah client
            $(document).on('click', '.btn-add', function() {
                $('#clientModalLabel').text('Add Client');
                $('#clientForm').attr('action', "{{ route('clients.store') }}");
                $('#formMethod').val('POST');
                $('#clientForm')[0].reset();
                $('.img-preview').attr('src', '');
                $('#clientModal').modal('show');
            });

            // Edit client
            $(document).on('click', '.btn-edit', function() {
                const id = $(this).data('id');
                const name = $(this).data('name');
                const category = $(this).data('category');
                const logo = $(this).data('logo');
                const oldLogo = $(this).data('oldlogo');

                $('#clientModalLabel').text('Edit Client');
                $('#clientForm').attr('action', "{{ route('clients.update', ':id') }}".replace(':id', id));
                $('#formMethod').val('PUT');
                $('#name').val(name);
                $('#category_id').val(category);

                $('#old_logo').val(oldLogo);
                $('.img-preview').attr('src', logo).css('display', 'block').show();

                $('#clientModal').modal('show');
            });
        });
    </script>
@endsection
