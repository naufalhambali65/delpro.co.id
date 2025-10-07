@extends('admin.layouts.main-preview')
@section('css')
    <style>
        .hover-card:hover {
            transform: translateY(-5px);
            transition: 0.3s ease-in-out;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15) !important;
        }

        .img-hover {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .img-hover:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.25);
        }
    </style>
@endsection
@section('container')
    {{-- Hero Section --}}
    <div class="hero-section position-relative text-white mb-4"
        style="background: url('{{ asset('storage/public/' . $project->cover_image) }}') center/cover no-repeat; height: 500px; border-radius: 12px; overflow: hidden;">
        <div class="overlay position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0, 0, 0, 0.55);"></div>
        <div
            class="hero-content position-relative z-1 d-flex flex-column justify-content-center align-items-center h-100 text-center px-3">
            <h1 class="fw-bold">{{ $project->title }}</h1>
            <div class="progress mt-3" style="height: 30px; width: 60%; border-radius: 20px; overflow: hidden;">
                <div class="progress-bar progress-bar-striped progress-bar-animated
                    @if ($project->progress < 33) bg-danger
                    @elseif($project->progress < 66) bg-warning
                    @else bg-success @endif"
                    role="progressbar" style="width: {{ $project->progress }}%;" aria-valuenow="{{ $project->progress }}"
                    aria-valuemin="0" aria-valuemax="100">
                    <span class="fw-bold">{{ $project->progress }}%</span>
                </div>
            </div>
        </div>
    </div>

    {{-- Detail Section --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm hover-card mb-4">
                <div class="card-header d-flex align-items-center">
                    <h2 class="card-title mb-0 fw-bold">
                        <i class="fas fa-info-circle me-2 text-primary"></i>Detail
                    </h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        {{-- Left --}}
                        <div class="col-md-6">
                            <h3>Project Detail</h3>
                            <table class="table table-bordered table-hover">
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
                            </table>

                            <h3>Client Detail</h3>
                            <table class="table table-bordered table-hover">
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

                        {{-- Right --}}
                        <div class="col-md-6">
                            <h3>Job Detail</h3>
                            <table class="table table-bordered table-hover">
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

    {{-- Description --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm hover-card mb-4">
                <div class="card-header">
                    <h2 class="card-title fw-bold">
                        <i class="fas fa-file-alt me-2 text-primary"></i>Description
                    </h2>
                </div>
                <div class="card-body">
                    <div style="text-align: justify">
                        {!! $project->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- All Images --}}
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm hover-card">
                <div class="card-header">
                    <h2 class="card-title fw-bold">
                        <i class="fas fa-images me-2 text-primary"></i>All Images
                    </h2>
                </div>
                <div class="card-body">
                    <div class="row g-3">
                        @foreach ($images as $image)
                            <div class="col-sm-2">
                                <a href="{{ asset('storage/public/' . $image) }}" data-toggle="lightbox"
                                    data-title="Gambar ke {{ $loop->iteration }}" data-gallery="gallery">
                                    <img src="{{ asset('storage/public/' . $image) }}"
                                        class="img-fluid mb-2 rounded shadow-sm img-hover" alt="{{ $project->title }}" />
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
        // SweetAlert delete confirm
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

        // Lightbox
        $(function() {
            $(document).on('click', '[data-toggle="lightbox"]', function(event) {
                event.preventDefault();
                $(this).ekkoLightbox({
                    alwaysShowClose: true
                });
            });
        });
    </script>
@endsection
