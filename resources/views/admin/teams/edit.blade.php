@extends('admin.layouts.main')

@section('container')
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow-sm">
                <form method="post" action="{{ route('teams.update', $team->id) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card-header d-flex align-items-center">
                        <h2 class="card-title mb-0 fw-bold">
                            <i class="fas fa-pencil-alt me-2 text-primary"></i> Edit Team
                        </h2>
                        <div class="ms-auto">
                            <a href="{{ route('teams.index') }}" class="btn btn-sm btn-primary"><i
                                    class="fas fa-arrow-left"></i> Back</a>
                            <button type="submit" class="btn btn-sm btn-success ml-2" id="submitBtn"><i
                                    class="fas fa-save"></i> Save Changes</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row p-3">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name" required autofocus
                                        value="{{ old('name', $team->name) }}">
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="role" class="form-label">Role</label>
                                    <input type="text" class="form-control @error('role') is-invalid @enderror"
                                        id="role" name="role" required value="{{ old('role', $team->role) }}">
                                    @error('role')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="photo" class="form-label">Photo</label><br>
                                    @if ($team->photo)
                                        <img src="{{ asset('storage/' . $team->photo) }}"
                                            class="img-preview img-fluid mb-3 col-sm-5 d-block" style="object-fit: cover;">
                                    @else
                                        <img class="img-preview img-fluid mb-3 col-sm-5">
                                    @endif
                                    <input type="hidden" name="oldPhoto" value="{{ $team->photo }}">
                                    <input class="form-control @error('photo') is-invalid @enderror" type="file"
                                        id="photo" name="photo" onchange="previewImage()">
                                    @error('photo')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <input id="description" type="hidden" name="description"
                                        value="{{ old('description', $team->description) }}">
                                    <trix-editor input="description"></trix-editor>
                                    @error('description')
                                        <p class="text-danger"><small>{{ $message }}</small></p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror"
                                        id="email" name="email" value="{{ old('email', $team->email) }}">
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <input type="text" class="form-control @error('facebook') is-invalid @enderror"
                                        id="facebook" name="facebook" value="{{ old('facebook', $team->facebook) }}"
                                        placeholder="https://facebook.com/username">
                                    @error('facebook')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="twitter" class="form-label">Twitter</label>
                                    <input type="text" class="form-control @error('twitter') is-invalid @enderror"
                                        id="twitter" name="twitter" value="{{ old('twitter', $team->twitter) }}"
                                        placeholder="https://x.com/username">
                                    @error('twitter')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="linkedin" class="form-label">LinkedIn</label>
                                    <input type="text" class="form-control @error('linkedin') is-invalid @enderror"
                                        id="linkedin" name="linkedin" value="{{ old('linkedin', $team->linkedin) }}"
                                        placeholder="https://linkedin.com/in/username">
                                    @error('linkedin')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="instagram" class="form-label">Instagram</label>
                                    <input type="text" class="form-control @error('instagram') is-invalid @enderror"
                                        id="instagram" name="instagram" value="{{ old('instagram', $team->instagram) }}"
                                        placeholder="https://instagram.com/username">
                                    @error('instagram')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="mb-3 d-flex justify-content-end">
                                <a href="{{ route('teams.index') }}" class="btn btn-xs btn-primary">Back</a>
                                <button type="submit" class="btn btn-success ms-2">Update</button>
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
        function previewImage() {
            const image = document.querySelector('#photo');
            const imgPreview = document.querySelector('.img-preview');

            imgPreview.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(image.files[0]);
            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
