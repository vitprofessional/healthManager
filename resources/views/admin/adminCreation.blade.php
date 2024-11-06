@extends('admin.include')
@section('adminTitle')
Verified Student
@endsection
@section('adminContent')

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card mt-4">
            <div class="card-body p-4">
                <div class="text-center mt-2">
                    <h5 class="text-primary">Create Admin Profile!</h5>
                </div>
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
                @if(Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
                @endif
                <div class="p-2 mt-4">
                    <form method="POST" action="{{ route('confirmAdminSignup') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Enter admin fullname" name="fullName">
                        </div>
                        <div class="mb-3">
                            <label for="dept" class="form-label">Admin Category(*)</label>
                            <select id="dept" class="form-select" required name="dept">
                                <option selected>Choose...</option>
                                <option>Division Admin</option>
                                <option>District Admin</option>
                                <option>Thana Admin</option>
                                <option>Union Producure</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="shift" class="form-label">Type of Admin(*)</label>
                            <select id="shift" class="form-select" required name="shift">
                                <option selected>Choose...</option>
                                <option>Admin</option>
                                <option>2nd</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="adminRule" class="form-label">Rules(*)</label>
                            <select id="adminRule" class="form-select" required name="adminRule">
                                <option value="" selected>Choose...</option>
                                <option>Admin</option>
                                <option>Modarator</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="session" class="form-label">Batch/Session</label>
                            <input type="text" class="form-control" id="session" name="batch" placeholder="Enter admin batch/session">
                        </div>

                        <div class="mb-3">
                            <label for="username" class="form-label">User ID/Email</label>
                            <input type="email" class="form-control" id="username" placeholder="Enter admin email" required name="emailAddress">
                        </div>

                        <div class="mb-3">
                            <div class="position-relative auth-pass-inputgroup mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password" name="password">
                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="position-relative auth-pass-inputgroup mb-3">
                                <label for="confirmPass" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control pe-5 password-input" placeholder="Confirm password" id="confirmPass" name="confirmPass">
                                <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                            </div>
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-success w-100" type="submit">Sign Up</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->

    </div>
</div>
<!-- end row -->

@endsection