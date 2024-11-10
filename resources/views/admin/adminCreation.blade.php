@extends('admin.include')
@section('adminTitle')
Admin Profile
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
                            <label for="category" class="form-label">Admin Category(*)</label>
                            <select id="category" class="form-select" required name="category">
                                <option selected>Choose...</option>
                                <option>Division Admin</option>
                                <option>District Admin</option>
                                <option>Thana Admin</option>
                                <option>Union Admin</option>
                                <option>Union Manager</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="adminRule" class="form-label">Type of Admin(*)</label>
                            <select id="adminRule" class="form-select" required name="adminRule">
                                <option selected>Choose...</option>
                                <option>Admin</option>
                                <option>Producer</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="userId" class="form-label">User ID/Email</label>
                            <input type="text" class="form-control" id="userId" placeholder="Enter admin userId" required name="userId">
                        </div>

                        <div class="mb-3">
                            <div class="position-relative auth-pass-inputgroup mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password" name="password">
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="position-relative auth-pass-inputgroup mb-3">
                                <label for="confirmPass" class="form-label">Confirm Password</label>
                                <input type="password" class="form-control pe-5 password-input" placeholder="Confirm password" id="confirmPass" name="confirmPass">
                            </div>
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-success w-100" type="submit">Create Profile</button>
                        </div>
                    </form>
                    <a href="{{ route('adminList') }}" class="btn btn-primary fw-bold btn-sm mt-4"><i class="fa-duotone fa-solid fa-list"></i> List of Admin</a>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->

    </div>
</div>
<!-- end row -->

@endsection