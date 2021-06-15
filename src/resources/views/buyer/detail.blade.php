@extends('buyer.template')

@section('content')

    <div class="container">

        <!-- Profile Wrapper-->
        <div class="profile-wrapper-area py-3">
            <!-- User Information-->
            <div class="card user-info-card">
                <div class="card-body p-4 d-flex align-items-center">
                    <div class="user-info">
                        <h5 class="mb-0">Detail Trash Order</h5>
                    </div>
                </div>
            </div>


            <!-- User Meta Data-->
            <div class="card user-data-card">


                <div class="card-body">
                    <form action="{{ url('buyer/update-order/') }}" method="post">
                        @csrf
                        <input type="hidden" name="sell_id" value="{{ $order->getOrder->id }}">
                        <input type="hidden" name="take_order_id" value="{{ $order->id }}">
                        <div class="row mb-1 align-items-center">
                            <div class="col col-auto">
                                <p class="h6 m-0 font-weight-light">No Order :</p>
                            </div>
                            <div class="col">
                                <p class="m-0 font-weight-bold">{{ $order->getOrder->id }}</p>
                            </div>
                        </div>
                        <hr>

                        <div class="row mb">
                            <p class="h6 mb-1 font-weight-light">Pengambilan</p>
                        </div>
                        <div class="row ml-1">
                            <p class="my-0">{{ $order->getOrder->getUser->name }}</p>
                            <p class="mb-1">{{ $order->getOrder->note }}</p>
                        </div>

                        <div class="row">
                            <p class="h6 mb-1 font-weight-light">
                                {{ $order->getOrder->address }}
                            </p>
                        </div>
                        <div class="row ml-1">
                            <p class="my-0">{{ $order->getOrder->area }}</p>
                            {{--                            <p class="h6 mt-2 font-weight-bold text-center">--Jalan jalan Sana Sini Nomernya Nomer--}}
                            {{--                                23--</p>--}}
                        </div>
                        <hr>

                        <div class="row">
                            <p class="h6 mb-1 font-weight-light">TRASH DETAIL</p>
                        </div>
                        <div class="row ml-1 mb-3">
                            <div class="col">
                                <p class="my-0 ml">{{ $order->getOrder->getCategory->name }}</p>
                            </div>
                            <div class="col text-right">
                                <p class="my-0 ml">Rp. {{ number_format($order->getOrder->getCategory->price,2) }} /Kg</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row mb-3">
                            <img src="{{ asset('trash/'.$order->getOrder->image) }}" alt=""
                                 style="width: 100%; height: 200px; object-fit: cover">
                        </div>
                        <!-- Neng Kene -->
                        <div class="form-group mb-3">
                            <label for="">Update Weight</label>
                            <input type="number" name="weight" class="form-control" placeholder="3" min="1">
                            <input type="hidden" name="price" value="{{$order->getOrder->getCategory->price}}">
                            <input type="hidden" name="seller_id" value="{{ $order->getOrder->user_id }}">
                        </div>

                        <div class="row">
                            <div class="col">
                                <a class="btn btn-danger w-100" href="{{ url('buyer/history') }}">BACK</a>
                            </div>
                            <div class="col">
                                <button class="btn btn-success w-100" type="submit">Finish</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
