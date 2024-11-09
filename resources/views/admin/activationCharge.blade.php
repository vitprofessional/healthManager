@extends('admin.include')
@section('adminTitle')
Charge Setup
@endsection
@section('adminContent')

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card mt-4">
            <div class="card-body p-4">
                <div class="text-center mt-2">
                    <h5 class="text-primary">Membership Charge Setup!</h5>
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
                    <form method="POST" action="{{ route('saveCharge') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="category" class="form-label">Card Category(*)</label>
                            <select id="category" class="form-select" required name="category">
                                <option value="" selected>Choose...</option>
                                <option>Silver</option>
                                <option>Gold</option>
                                <option>Premium</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="charge" class="form-label">Membership Charge</label>
                            <input type="number" class="form-control" id="charge" placeholder="Enter charge amount" name="charge" required>
                        </div>

                        <div class="mb-3">
                            <label for="expiredTime" class="form-label">Membership Period(Days)</label>
                            <input type="number" class="form-control" id="expiredTime" placeholder="Enter the period of days" name="expiredTime" required>
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-success w-100" type="submit">Save</button>
                        </div>
                    </form>
                    <a href="{{ route('cardList') }}" class="btn btn-primary fw-bold btn-sm mt-4"><i class="fa-duotone fa-solid fa-list"></i> All Card</a>
                    <a href="{{ route('newCard') }}" class="btn btn-danger fw-bold btn-sm mt-4"><i class="fa-sharp fa-solid fa-plus-square"></i> Add New</a>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->

    </div>
</div>
<!-- end row -->

@endsection