@extends('admin.include')
@section('adminTitle')
Card List
@endsection
@section('adminContent')
<div class="row project-wrapper">
    <div class="col-12 col-md-10 mx-auto">
        <div class="card">
            <div class="card-header">
                <h3>All Card Details Here</h3>
            </div>
            <div class="card-body">
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
                <table class="table table-bordered text-center">
                    <thead>
                        <th>SL</th>
                        <th>Card No</th>
                        <th>Card Type</th>
                        <th>Pin Number</th>
                        <th>Status</th>
                        <th>Action</th>
                    </thead>
                    <thead>
                        @if(!empty($cardList) && count($cardList)>0)
                            @php
                                $x = 1;
                            @endphp
                            @foreach($cardList as $card)
                                <tr>
                                    <td class="align-middle">{{ $x }}</td>
                                    <td class="align-middle">{{ $card->cardNo }}</td>
                                    <td class="align-middle">{{ $card->category  }}</td>
                                    <td class="align-middle">{{ $card->pinNumber  }}</td>
                                    <td class="align-middle">{{ $card->status  }}</td>
                                    <td class="align-middle">
                                        <a href="{{ route('editCard',['id'=>$card->id]) }}" class="btn btn-success btn-sm my-1">
                                            <i class="fa-solid fa-pencil-square"></i>
                                        </a> 
                                    </td>
                                </tr>
                            @php
                                $x++;
                            @endphp
                            @endforeach
                        @else
                            <tr>
                                <td colspan="9" class="text-center py-2">Sorry! No data found</td>
                            </tr>
                        @endif
                    </thead>
                </table>
                <a href="{{ route('newCard') }}" class="btn btn-danger fw-bold btn-sm"><i class="fa-duotone fa-solid fa-plus-square"></i> Add New</a>
            </div>
        </div>
    </div>
</div><!-- end row -->

@endsection