@extends('seller.template')



@section('content')


    <div class="container">
        <div class="support-wrapper py-3">
            <h4 class="faq-heading text-center">
                Withdraw Point to {{ $type }}
            </h4>

            <div class="accordian-area-wrapper mt-3">
                <!-- Accordian Card-->
                <div class="card accordian-card clearfix">
                    <div class="card-body">
                        <div class="card-body">

                            <form action="{{ url('point/withdraw') }}" method="post">
                                @csrf
                                @if($point[0]->point < 10000)
                                    <div class="alert alert-info">
                                        Min point for withdraw is 10.000 Points
                                    </div>
                                @endif
                                <div class="form-group mb-4">
                                    <label for="">Phone</label>
                                    <input type="text" class="form-control" name="phone">
                                    <input type="hidden" value="{{ $type }}" name="type">
                                    <input type="hidden" value="{{ session('seller')['id'] }}" name="user_id">
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">Your Point</label>
                                    <input type="text" class="form-control" name="total" value="{{ $point[0]->point }}"
                                           readonly>
                                </div>
                                <a href="{{ url('/') }}" class="btn btn-danger">Back</a>
                                @if($point[0]->point >= 10000)
                                    <button class="btn btn-primary">Submit</button>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



@endsection
