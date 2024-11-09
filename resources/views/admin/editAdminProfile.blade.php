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
                    @if(!empty($admin))
                    <form method="POST" action="{{ route('updateAdmin') }}">
                        @csrf
                        <input type="hidden" name="adminId" value="{{ $admin->id }}">
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Enter admin fullname" name="fullName" value="{{ $admin->fullName }}">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Admin Category(*)</label>
                            <select id="category" class="form-select" required name="category">
                            <option selected value="{{ $admin->adminType }}">{{ $admin->adminType }}</option>
                                <option>Division Admin</option>
                                <option>District Admin</option>
                                <option>Thana Admin</option>
                                <option>Union Producure</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="adminRule" class="form-label">Type of Admin(*)</label>
                            <select id="adminRule" class="form-select" required name="adminRule">
                            <option selected value="{{ $admin->adminRule }}">{{ $admin->adminRule }}</option>
                                <option>Admin</option>
                                <option>Producer</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="userId" class="form-label">User ID/Email</label>
                            <input type="text" class="form-control" id="userId" placeholder="Enter admin userId" value="{{ $admin->userId }}" required name="userId">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" id="" class="form-select">
                                <option value="{{ $admin->status }}">{{ $admin->status }}</option>
                                <option>Active</option>
                                <option>Inactive</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-success w-100" type="submit">Update Profile</button>
                        </div>
                    </form>
                    @else
                    <div class="alert alert-info">Sorry! No data found with your query</div>
                    @endif
                    <a href="{{ route('changeAdminPass',['id'=>$admin->id]) }}" class="btn btn-danger fw-bold btn-sm mt-4"><i class="fa-duotone fa-solid fa-key"></i> Change Password</a>
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