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
                    <h5 class="text-primary">Update Profile!</h5>
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
                    @if(!empty($my))
                    <form method="POST" action="{{ route('updateMyProfile') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="fullName" class="form-label">Name</label>
                            <input type="text" class="form-control" id="fullName" placeholder="Enter your fullname" name="fullName">
                        </div>
                        <div class="mb-3">
                            <label for="userId" class="form-label">User ID/Email</label>
                            <input type="text" class="form-control" id="userId" placeholder="Enter your userId" required name="userId">
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-success w-100" type="submit">Update Profile</button>
                        </div>
                    </form>
                    <a href="{{ route('changeMyPass',['id'=>$my->id]) }}" class="btn btn-danger fw-bold btn-sm mt-4"><i class="fa-duotone fa-solid fa-key"></i> Change Password</a>
                    @else
                    <div class="alert alert-info">
                        Sorry! No profile found for update
                    </div>
                    @endif
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->

    </div>
</div>
<!-- end row -->

@endsection