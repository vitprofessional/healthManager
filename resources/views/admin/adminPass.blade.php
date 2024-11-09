@extends('admin.include')
@section('adminTitle')
Change Admin Password
@endsection
@section('adminContent')

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card mt-4">
            <div class="card-body p-4">
                <div class="text-center mt-2">
                    <h5 class="text-primary">Admin Password Update!</h5>
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
                    @if(!empty($admin))
                    <form method="POST" action="{{ route('updateAdminPass') }}">
                        @csrf
                        <input type="hidden" name="adminId" value="{{ $admin->id }}">
                        <div class="mb-3">
                            <label for="userId" class="form-label">User ID/Email</label>
                            <input type="text" class="form-control" id="userId" value="{{ $admin->userId }}" readonly>
                        </div>

                        <div class="mb-3">
                            <div class="position-relative auth-pass-inputgroup mb-3">
                                <label for="password" class="form-label">New Password</label>
                                <input type="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password" name="password">
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="position-relative auth-pass-inputgroup mb-3">
                                <label for="confirmPass" class="form-label">Confirm New Password</label>
                                <input type="password" class="form-control pe-5 password-input" placeholder="Confirm password" id="confirmPass" name="confirmPass">
                            </div>
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-success w-100" type="submit">Update Password</button>
                        </div>
                    </form>
                    @else
                    <div class="alert alert-info">Sorry! No data found with your query</div>
                    @endif
                    <a href="{{ route('editAdmin',['id'=>$admin->id]) }}" class="btn btn-danger fw-bold btn-sm mt-4"><i class="fa-duotone fa-solid fa-user-secret"></i> Back to Profile</a>
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