@extends('admin.layouts.main')
@section('container')
@section('css')
    <style>
        .border-dashed {
            border-style: dashed !important;
            border-color: #adb5bd !important;
        }

        /* Default: 1 kolom (mobile) */
        .filepond--item {
            width: 100% !important;
        }

        /* Tablet: 2 kolom */
        @media (min-width: 600px) {
            .filepond--item {
                width: calc(50% - 0.5em) !important;
            }
        }

        /* Desktop: 3 kolom */
        @media (min-width: 992px) {
            .filepond--item {
                width: calc(33.33% - 0.5em) !important;
            }
        }

        /* Extra large screen: 4 kolom */
        @media (min-width: 1400px) {
            .filepond--item {
                width: calc(25% - 0.5em) !important;
            }
        }
    </style>
@endsection
<div class="row">
    <div class="col-md-12">
        <div class="card shadow-sm">
            <form method="post" action="{{ route('projects.update', $project->slug) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card-header d-flex align-items-center">
                    <h2 class="card-title mb-0 fw-bold">
                        <i class="fas fa-pencil-alt me-2 text-primary"></i> Edit Project
                    </h2>
                    <div class="ms-auto">
                        <a href="{{ route('projects.index') }}" class="btn btn-sm btn-primary" id="btnCancel"><i
                                class="fas fa-arrow-left"></i> Back</a>
                        <button type="submit" class="btn btn-sm btn-success ml-2" id="submitBtn"><i
                                class="fas fa-save"></i> Save Changes</button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row p-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h3 class="font-weight-bold">Project Data :</h3>
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title" required autofocus
                                    value="{{ old('title', $project->title) }}">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="visibility" class="form-label">Visibility</label>
                                <select class="form-select" id="visibility" name="visibility" required>
                                    <option value="private" @selected(old('visibility', $project->visibility) == 'private') selected>
                                        Private
                                    </option>
                                    <option value="public" @selected(old('visibility', $project->visibility) == 'public')>
                                        Public
                                    </option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="type_id" class="form-label">Type</label>
                                <select class="form-select" id="type_id" name="type_id" required>
                                    <option value="" disabled @selected(old('type_id') == '') hidden>-- Select Type
                                        --
                                    </option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}" @selected(old('type_id', $project->type_id) == $type->id)>
                                            {{ $type->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="style_id" class="form-label">Style</label>
                                <select class="form-select" id="style_id" name="style_id" required>
                                    <option value="" disabled @selected(old('style_id') == '') hidden>-- Select Style
                                        --
                                    </option>
                                    @foreach ($styles as $style)
                                        <option value="{{ $style->id }}" @selected(old('style_id', $project->style_id) == $style->id)>
                                            {{ $style->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="city_id" class="form-label">City</label>
                                <select class="form-select" id="city_id" name="city_id" required>
                                    <option value="" disabled @selected(old('city_id') == '') hidden>-- Select City
                                        --
                                    </option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}" @selected(old('city_id', $project->city_id) == $city->id)>
                                            {{ $city->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="unit_size" class="form-label">Unit Size</label>
                                <input type="text" class="form-control @error('unit_size') is-invalid @enderror"
                                    id="unit_size" name="unit_size" autofocus
                                    value="{{ old('unit_size', $project->unit_size) }}">
                                @error('unit_size')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="cover_image" class="form-label">Cover Image</label>
                                @if ($project->cover_image)
                                    <img src="{{ asset('storage/public/' . $project->cover_image) }}"
                                        class="img-preview img-fluid mb-3 col-sm-5 d-block" style="object-fit: cover;">
                                @else
                                    <img class="img-preview img-fluid mb-3 col-sm-5">
                                @endif
                                <input class="form-control @error('cover_image') is-invalid @enderror" type="file"
                                    id="cover_image" name="cover_image" onchange="previewImage()">
                                <input type="hidden" name="oldCoverImage" value="{{ $project->cover_image }}">
                                @error('cover_image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <h3 class="font-weight-bold">Client Data :</h3>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="client_name" class="form-label">Client Name</label>
                                        <input type="text"
                                            class="form-control @error('client_name') is-invalid @enderror"
                                            id="client_name" name="client_name" required autofocus
                                            value="{{ old('client_name', $project->client_name) }}">
                                        @error('client_name')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="client_contact" class="form-label">Client Contact</label>
                                        <input type="text"
                                            class="form-control @error('client_contact') is-invalid @enderror"
                                            id="client_contact" name="client_contact" required autofocus
                                            value="{{ old('client_contact', $project->client_contact) }}">
                                        @error('client_contact')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="client_address" class="form-label">Client Address</label>
                                <input type="text"
                                    class="form-control @error('client_address') is-invalid @enderror"
                                    id="client_address" name="client_address" required autofocus
                                    value="{{ old('client_address', $project->client_address) }}">
                                @error('client_address')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="my-4 border-top border-2 border-dashed"></div>
                            <div class="mb-3">
                                <h3 class="font-weight-bold">Job Data :</h3>
                            </div>
                            <div class="mb-3">
                                <label for="material" class="form-label">Material Used</label>
                                <input type="text" class="form-control @error('material') is-invalid @enderror"
                                    id="material" name="material" required autofocus
                                    value="{{ old('material', $project->material) }}">
                                @error('material')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="progress" class="form-label">Job Progress</label>
                                    <div class="input-group mb-3">
                                        <input type="number"
                                            class="form-control @error('progress') is-invalid @enderror"
                                            id="progress" name="progress" required autofocus
                                            value="{{ old('progress', $project->progress) }}" min="0"
                                            max="100" placeholder="0 - 100">
                                        <span class="input-group-text" id="basic-addon2">%</span>
                                        @error('progress')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="job_status" class="form-label">Job Status</label>
                                        <select class="form-select" id="job_status" name="job_status" required>
                                            <option value="" disabled @selected(old('job_status', $project->job_status) == '') hidden>--
                                                Select Job Status
                                                --
                                            </option>
                                            <option value="waiting" @selected(old('job_status', $project->job_status) == 'waiting')>
                                                Waiting
                                            </option>
                                            <option value="in_progress" @selected(old('job_status', $project->job_status) == 'in_progress')>
                                                In Progress
                                            </option>
                                            <option value="in_review" @selected(old('job_status', $project->job_status) == 'in_review')>
                                                In Review
                                            </option>
                                            <option value="done" @selected(old('job_status', $project->job_status) == 'done')>
                                                Done
                                            </option>
                                            <option value="cancelled" @selected(old('job_status', $project->job_status) == 'cancelled')>
                                                Cancelled
                                            </option>
                                            <option value="rejected" @selected(old('job_status', $project->job_status) == 'rejected')>
                                                Rejected
                                            </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="worker" class="form-label">List Worker</label>
                                <input id="worker" type="hidden" name="worker"
                                    value="{{ old('worker', $project->worker) }}">
                                <trix-editor input="worker"></trix-editor>
                                @error('worker')
                                    <p class="text-danger">
                                        <small>{{ $message }}</small>
                                    </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="job_list" class="form-label">Job List</label>
                                <input id="job_list" type="hidden" name="job_list"
                                    value="{{ old('job_list', $project->job_list) }}">
                                <trix-editor input="job_list"></trix-editor>
                                @error('job_list')
                                    <p class="text-danger">
                                        <small>{{ $message }}</small>
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label for="description" class="form-label">Description (English)</label>
                                <input id="description" type="hidden" name="description"
                                    value="{{ old('description', $project->description) }}">
                                <trix-editor input="description"></trix-editor>
                                @error('description')
                                    <p class="text-danger">
                                        <small>{{ $message }}</small>
                                    </p>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description_id" class="form-label">Description (Indonesia)</label>
                                <input id="description_id" type="hidden" name="description_id"
                                    value="{{ old('description_id', $description_id) }}">
                                <trix-editor input="description_id"></trix-editor>
                                @error('description_id')
                                    <p class="text-danger">
                                        <small>{{ $message }}</small>
                                    </p>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-md-12">
                            <div class="my-4 border-top border-2 border-dashed"></div>
                            <div class="mb-3">
                                <h3 class="font-weight-bold">Documentation :</h3>
                            </div>
                            <div class="mb-3">
                                <label for="images" class="form-label">Images</label>
                                <input type="file" class="filepond" id="fileUpload" name="images" multiple
                                    data-allow-reorder="true" value="{{ json_encode($project->images) }}"
                                    allowRemove='false'>
                                @error('images')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    document.getElementById("btnCancel").addEventListener("click", function() {
        fetch("{{ route('clear.temp') }}", {
            method: "POST",
            headers: {
                "X-CSRF-TOKEN": "{{ csrf_token() }}",
                "Accept": "application/json",
            },
        }).then(() => {
            console.log("Temporary files cleared.");
        });
    });

    function previewImage() {
        const image = document.querySelector('#cover_image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }

    }

    // Get a reference to the file input element
    FilePond.registerPlugin(FilePondPluginImagePreview);
    // FilePond.registerPlugin(FilePondPluginFileMetadata);
    FilePond.registerPlugin(FilePondPluginFilePoster);
    const inputElement = document.querySelector('#fileUpload');

    // Create a FilePond instance
    const pond = FilePond.create(inputElement);

    FilePond.setOptions({
        server: {
            process: {
                url: "{{ route('upload.store') }}",
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
            },
            revert: {
                url: "{{ route('upload.revert') }}",
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
            },
            remove: (source, load, error) => {
                console.log("Remove file sebelum upload:", source);

                fetch("{{ route('upload.remove') }}", {
                        method: "POST", // pakai POST
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": "{{ csrf_token() }}"
                        },
                        body: JSON.stringify({
                            _method: "DELETE", // spoof DELETE
                            image: source.replace("projects-images/{{ $project->slug }}",
                                "temp_files")
                        })
                    })
                    // .then(res => res.json())
                    .then(data => {
                        console.log("Server response:", data);
                        load();
                    })
                    .catch(err => {
                        console.error("Error:", err);
                        error("Error saat menghapus file");
                    });
            }

        }
    });

    // pond.files = @json($pondFiles);
    pond.addFiles(@json($pondFiles));
</script>
@endsection
