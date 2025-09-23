@extends('admin.layouts.main')
@section('container')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <form method="post" action="{{ route('projects.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row p-3">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror"
                                    id="title" name="title" required autofocus value="{{ old('title') }}">
                                @error('title')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="type_id" class="form-label">Type</label>
                                <select class="form-select" id="type_id" name="type_id" required>
                                    <option value="" disabled @selected(old('type_id') == '') hidden>-- Select Type --
                                    </option>
                                    @foreach ($types as $type)
                                        <option value="{{ $type->id }}" @selected(old('type_id') == $type->id)>{{ $type->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="style_id" class="form-label">Style</label>
                                <select class="form-select" id="style_id" name="style_id" required>
                                    <option value="" disabled @selected(old('style_id') == '') hidden>-- Select Style --
                                    </option>
                                    @foreach ($styles as $style)
                                        <option value="{{ $style->id }}" @selected(old('style_id') == $style->id)>{{ $style->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="city_id" class="form-label">City</label>
                                <select class="form-select" id="city_id" name="city_id" required>
                                    <option value="" disabled @selected(old('city_id') == '') hidden>-- Select City --
                                    </option>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->id }}" @selected(old('city_id') == $city->id)>{{ $city->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="unit_size" class="form-label">Unit Size</label>
                                <input type="text" class="form-control @error('unit_size') is-invalid @enderror"
                                    id="unit_size" name="unit_size" autofocus value="{{ old('unit_size') }}">
                                @error('unit_size')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <input id="description" type="hidden" name="description" value="{{ old('description') }}">
                                <trix-editor input="description"></trix-editor>
                                @error('description')
                                    <p class="text-danger">
                                        <small>{{ $message }}</small>
                                    </p>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="cover_image" class="form-label">Cover Image</label>
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                <input class="form-control @error('cover_image') is-invalid @enderror" type="file"
                                    id="cover_image" name="cover_image" onchange="previewImage()">
                                @error('cover_image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="images" class="form-label">Images</label>
                                <img class="img-preview img-fluid mb-3 col-sm-5">
                                <input type="file" id="fileUpload" name="images" multiple>
                                @error('images')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 d-flex justify-content-end">
                            <a href="{{ route('projects.index') }}" class="btn btn-xs btn-primary" id="btnCancel">Back</a>
                            <button type="submit" class="btn btn-success ml-2" id="submitBtn">Save Changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script>
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
                }
            }
        });

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
    </script>
@endsection
