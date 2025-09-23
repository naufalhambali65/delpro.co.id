@extends('admin.layouts.main')
@section('container')
    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow-sm">
                <div class="card-header">
                    <h3 class="card-title">Details</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>Title</th>
                            <td>{{ $project->title }}</td>
                        </tr>
                        <tr>
                            <th>Type</th>
                            <td>{{ $project->type->name }}</td>
                        </tr>
                        <tr>
                            <th>Style</th>
                            <td>{{ $project->style->name }}</td>
                        </tr>
                        <tr>
                            <th>City</th>
                            <td>{{ $project->city->name }}</td>
                        </tr>
                        <tr>
                            <th>Unit Size</th>
                            <td>{{ $project->unit_size }}</td>
                        </tr>
                        <tr>
                            <th>Description</th>
                            <td>{!! $project->description !!}</td>
                        </tr>
                        <tr>
                            <th>Cover Image</th>
                            <td>
                                @if ($project->cover_image)
                                    <img src="{{ asset('storage/' . $project->cover_image) }}" class="img-fluid"
                                        style="max-width: 400px;">
                                @else
                                    <span>No cover image uploaded</span>
                                @endif
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{ route('projects.index') }}" class="btn btn-success">
                        <i class="bi bi-arrow-left"></i>
                    </a>
                    <a href="{{ route('projects.edit', $project->slug) }}" class="btn btn-primary">
                        <i class="bi bi-pencil-fill"></i>
                    </a>
                    <form action="{{ route('projects.destroy', $project->slug) }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger border-0 btn-hapus">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card card-primary">
                <div class="card-header">
                    <h4 class="card-title">All Images</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($images as $image)
                            <div class="col-sm-2">
                                <a href="{{ asset('storage/' . $image) }}" data-toggle="lightbox"
                                    data-title="Gambar ke {{ $loop->iteration }}" data-gallery="gallery">
                                    <img src="{{ asset('storage/' . $image) }}" class="img-fluid mb-2"
                                        alt="{{ $project->title }}" />
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
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

        $(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true,
                });
            });
        });
    </script>
@endsection
