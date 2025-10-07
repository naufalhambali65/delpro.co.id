@extends('admin.layouts.main')

@section('container')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header d-flex align-items-center">
                    <h2 class="card-title mb-0 fw-bold">
                        <i class="fas fa-user me-2 text-primary"></i> Team Detail
                    </h2>
                    <div class="ms-auto">
                        <a href="{{ route('teams.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                    </div>
                </div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 text-center mb-4">
                            <img src="{{ asset('storage/public/' . $team->photo) }}" alt="{{ $team->name }}"
                                class=" img-thumbnail" style="width: 150px; height: 200px; object-fit: cover;">
                            <h5 class="mt-3 mb-0 fw-bold">{{ $team->name }}</h5>
                            <p class="text-muted">{{ $team->role }}</p>

                        </div>
                        <div class="col-md-8">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <th class="align-middle" style="width: 200px;">Name</th>
                                        <td class="align-middle">{{ $team->name }}</td>
                                    </tr>
                                    <tr>
                                        <th class="align-middle">Role</th>
                                        <td class="align-middle">{{ $team->role }}</td>
                                    </tr>
                                    <tr>
                                        <th class="align-middle">Email</th>
                                        <td class="align-middle">{{ $team->email ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <th class="align-middle">Facebook</th>
                                        <td class="align-middle">
                                            @if ($team->facebook)
                                                <a href="{{ $team->facebook }}" target="_blank">{{ $team->facebook }}</a>
                                            @else
                                                -
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="align-middle">Twitter</th>
                                        <td class="align-middle">
                                            @if ($team->twitter)
                                                <a href="{{ $team->twitter }}" target="_blank">{{ $team->twitter }}</a>
                                            @else
                                                -
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="align-middle">LinkedIn</th>
                                        <td class="align-middle">
                                            @if ($team->linkedin)
                                                <a href="{{ $team->linkedin }}" target="_blank">{{ $team->linkedin }}</a>
                                            @else
                                                -
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="align-middle">Instagram</th>
                                        <td class="align-middle">
                                            @if ($team->instagram)
                                                <a href="{{ $team->instagram }}"
                                                    target="_blank">{{ $team->instagram }}</a>
                                            @else
                                                -
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="align-middle">Description</th>
                                        <td class="align-middle">{!! $team->description !!}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
