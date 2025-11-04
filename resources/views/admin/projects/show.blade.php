@extends('admin.layouts.main')
@section('container')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header d-flex align-items-center">
                    <h2 class="card-title mb-0 fw-bold">
                        <i class="fas fa-info-circle me-2 text-primary"></i>Detail
                    </h2>
                    <div class="ms-auto">
                        <a href="{{ route('projects.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                        <a href="{{ route('preview', $encryptedSlug) }}" target="_blank" class="btn btn-sm btn-success">
                            <i class="fas fa-eye"></i> Preview
                        </a>
                        <button class="btn btn-sm btn-secondary" id="copyLinkBtn"
                            data-link="{{ route('preview', $encryptedSlug) }}">
                            <i class="fas fa-copy"></i> Copy Link
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h3>Project Detail</h3>
                            <table class="table table-bordered table-striped">
                                <tr>
                                    <th>Title</th>
                                    <td>{{ $project->title }}</td>
                                </tr>
                                <tr>
                                    <th>Visibility</th>
                                    <td>
                                        @if ($project->visibility === 'public')
                                            <span class="badge bg-success">Public</span>
                                        @else
                                            <span class="badge bg-secondary">Private</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Cover Image</th>
                                    <td>
                                        @if ($project->cover_image)
                                            <div>
                                                <img src="{{ asset('storage/public/' . $project->cover_image) }}"
                                                    class="img-fluid img-thumbnail rounded shadow-sm"
                                                    style="max-width: 300px; height: auto; object-fit: cover;">
                                            </div>
                                        @else
                                            <span class="text-muted fst-italic">No cover image uploaded</span>
                                        @endif
                                    </td>
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
                            </table>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <h3>Client Detail</h3>
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>Client Name</th>
                                        <td>{{ $project->client_name }}</td>
                                    </tr>
                                    <tr>
                                        <th>Client Address</th>
                                        <td>{{ $project->client_address }}</td>
                                    </tr>
                                    <tr>
                                        <th>Client Contact</th>
                                        <td>{{ $project->client_contact }}</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="row">
                                <h3>Job Detail</h3>
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>Material Used</th>
                                        <td>{{ $project->material }}</td>
                                    </tr>
                                    <tr>
                                        <th>Job Status</th>
                                        <td>
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
                                    </tr>
                                    <tr>
                                        <th>Job Progress</th>
                                        <td>
                                            <div class="progress" style="height: 20px;">
                                                <div class="progress-bar
                                                    @if ($project->progress < 33) bg-secondary
                                                    @elseif($project->progress < 66) bg-warning
                                                    @else bg-success @endif"
                                                    role="progressbar" style="width: {{ $project->progress }}%;"
                                                    aria-valuenow="{{ $project->progress }}" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                    {{ $project->progress }}%
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Worker</th>
                                        <td>{!! $project->worker !!}</td>
                                    </tr>
                                    <tr>
                                        <th>Job List</th>
                                        <td>{!! $project->job_list !!}</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header d-flex align-items-center">
                    <h2 class="card-title mb-0 fw-bold">
                        <i class="fas fa-file-alt me-2 text-primary"></i>Description (English)
                    </h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div style="text-align: justify">
                            {!! $description_en !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header d-flex align-items-center">
                    <h2 class="card-title mb-0 fw-bold">
                        <i class="fas fa-file-alt me-2 text-primary"></i>Description (Indonesia)
                    </h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div style="text-align: justify">
                            {!! $description_id !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header d-flex align-items-center">
                    <h2 class="card-title mb-0 fw-bold">
                        <i class="fas fa-images me-2 text-primary"></i>All Images
                    </h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach ($images as $image)
                            <div class="col-sm-2">
                                <a href="{{ asset('storage/public/' . $image) }}" data-toggle="lightbox"
                                    data-title="Gambar ke {{ $loop->iteration }}" data-gallery="gallery">
                                    <img src="{{ asset('storage/public/' . $image) }}" class="img-fluid mb-2"
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
    <script>
        document.getElementById("copyLinkBtn").addEventListener("click", function() {
            let link = this.getAttribute("data-link");

            navigator.clipboard.writeText(link).then(() => {
                // Kirim request ke server biar bisa set session
                fetch("{{ route('copy.success') }}")
                    .then(() => location.reload()); // reload biar alert muncul
            });
        });
    </script>
@endsection
