@extends('admin.layouts.main')
@section('container')
    <div class="row">
        <div class="col-md-6">
            <div class="card shadow-sm">
                <form action="{{ route('changePass.update') }}" method="post">
                    @csrf
                    @method('put')
                    <div class="card-header d-flex align-items-center">
                        <h2 class="card-title mb-0 fw-bold">
                            <i class="fas fa-user-lock me-2 text-primary"></i> Change Password
                        </h2>
                        <div class="ms-auto">
                            <button type="submit" class="btn btn-sm btn-success ml-2" id="submitBtn"><i
                                    class="fas fa-save"></i> Save Changes</button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="mb-3">
                                <label for="old_password" class="form-label">Old Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control @error('old_password') is-invalid @enderror"
                                        placeholder="Old Password" aria-label="Old Password"
                                        aria-describedby="button-addon1" id="old_password" name="old_password" required
                                        autofocus>
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon1"><i
                                            class="fa fa-eye" id="togglePassword1"></i></button>
                                    @error('old_password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="new_password" class="form-label">New Password</label>
                                <div class="input-group">
                                    <input type="password" class="form-control @error('new_password') is-invalid @enderror"
                                        placeholder="New Password" aria-describedby="button-addon2" id="new_password"
                                        name="new_password" required autofocus>
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i
                                            class="fa fa-eye" id="togglePassword2"></i></button>
                                    @error('new_password')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="new_password_confirmation" class="form-label">Confirm New Password</label>
                                <div class="input-group">
                                    <input type="password"
                                        class="form-control @error('new_password_confirmation') is-invalid @enderror"
                                        placeholder="Repeat Password" aria-label="Repeat New Password"
                                        aria-describedby="button-addon3" id="new_password_confirmation"
                                        name="new_password_confirmation" required autofocus>
                                    <button class="btn btn-outline-secondary" type="button" id="button-addon3"><i
                                            class="fa fa-eye" id="togglePassword3"></i></button>
                                    @error('new_password_confirmation')
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
        document.getElementById('button-addon1').addEventListener('click', function() {
            const passwordField = document.getElementById('old_password');
            const toggleIcon = document.getElementById('togglePassword1');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        });

        document.getElementById('button-addon2').addEventListener('click', function() {
            const passwordField = document.getElementById('new_password');
            const toggleIcon = document.getElementById('togglePassword2');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        });

        document.getElementById('button-addon3').addEventListener('click', function() {
            const passwordField = document.getElementById('new_password_confirmation');
            const toggleIcon = document.getElementById('togglePassword3');

            if (passwordField.type === 'password') {
                passwordField.type = 'text';
                toggleIcon.classList.remove('fa-eye');
                toggleIcon.classList.add('fa-eye-slash');
            } else {
                passwordField.type = 'password';
                toggleIcon.classList.remove('fa-eye-slash');
                toggleIcon.classList.add('fa-eye');
            }
        });
    </script>
@endsection
