@extends('admin.layouts.main')
@section('container')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <div class="card-header d-flex align-items-center">
                    <h3 class="card-title mb-0 fw-bold">
                        <i class="fas fa-envelope me-2 text-primary"></i> {{ $message->subject }}
                    </h3>
                    <div class="ms-auto">
                        <a href="{{ route('messages.index') }}" class="btn btn-sm btn-primary">
                            <i class="fas fa-arrow-left"></i> Back
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="mb-3">
                            <strong>From:</strong> {{ $message->name }} {{ '<' . e($message->email) . '>' }}

                        </div>
                        <div class="mb-3">
                            <strong>Date:</strong> {{ $message->created_at->format('d M Y H:i') }}
                        </div>
                        <div class="mb-3">
                            <strong>Status:</strong>
                            @if ($message->status)
                                <span class="badge badge-success">Read</span>
                            @else
                                <span class="badge badge-warning">Unread</span>
                            @endif
                        </div>
                        <hr>
                        <div style="text-align: justify">
                            {!! $message->message !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
