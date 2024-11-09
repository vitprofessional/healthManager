@extends('admin.include')
@section('adminTitle')
Update Card
@endsection
@section('adminContent')

<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 col-xl-5">
        <div class="card mt-4">
            <div class="card-body p-4">
                <div class="text-center mt-2">
                    <h5 class="text-primary">Update Card Details!</h5>
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
                    @if(!empty($card))
                    <form method="POST" action="{{ route('updateCard') }}">
                        @csrf
                        <input type="hidden" name="cardId" value="{{ $card->id }}">
                        <div class="mb-3">
                            <label for="cardNo" class="form-label">Card Number</label>
                            <input type="text" class="form-control" id="cardNo" placeholder="Enter card number" value="{{ $card->cardNo }}" name="cardNo" maxlength="11">
                        </div>
                        <div class="mb-3">
                            <label for="pinNumber" class="form-label">Card Number</label>
                            <input type="text" class="form-control" id="pinNumber" placeholder="Enter card pin number" value="{{ $card->pinNumber }}" name="pinNumber" maxlength="6">
                        </div>
                        <div class="mb-3">
                            <label for="category" class="form-label">Card Category(*)</label>
                            <select id="category" class="form-select" required name="category">
                                <option value="{{ $card->category }}" selected>{{ $card->category }}</option>
                                <option>Silver</option>
                                <option>Gold</option>
                                <option>Premium</option>
                            </select>
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-success w-100" type="submit">Update</button>
                        </div>
                    </form>
                    @else
                    <div class="alert alert-info">Sorry! No details found with your query</div>
                    @endif
                    <a href="{{ route('cardList') }}" class="btn btn-primary fw-bold btn-sm mt-4"><i class="fa-duotone fa-solid fa-list"></i> All Card</a>
                    <a href="{{ route('activationCharge') }}" class="btn btn-danger fw-bold btn-sm mt-4"><i class="fa-sharp fa-solid fa-hand-holding-heart"></i> Charge Setup</a>
                </div>
            </div>
            <!-- end card body -->
        </div>
        <!-- end card -->

    </div>
</div>
<!-- end row -->

@endsection