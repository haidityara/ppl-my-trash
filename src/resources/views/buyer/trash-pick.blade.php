@extends('buyer.template')

@section('addon-css')
    <style>
        .pagination a {
            color: #0C153B !important;
        }
    </style>
@endsection

@section('content')

    <!-- Top Products-->
    <div class="container">


        <!-- Profile Wrapper-->
        <div class="profile-wrapper-area py-3">
            <!-- User Information-->

            <div class="card user-info-card">
                <div class="card-body p-4 d-flex align-items-center">
                    <div class="user-info">
                        <h5 class="mb-0">Trash Pick</h5>
                    </div>
                </div>
            </div>


            <!-- User Meta Data-->
            <div class="card user-data-card">

                @if(count($orders) < 1)
                    <div class="card-body">
                        <div class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                            <div class="col text-center">
                                <p class="m-0">Empty trash pick</p>
                            </div>
                        </div>
                    </div>
                @endif

                @foreach($orders as $order)
                    <a href="{{ url('buyer/trash-pick/'.$order->id) }}">
                        <div class="card-body">
                            <div
                                class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                <div class="col">
                                    <p class="mb-1 font-weight-bold">{{ date('d F Y', strtotime($order->created_at)) }}</p>
                                    <p class="m-0">{{ $order->area }}</p>
                                    <p class="m-0">
                                        {{--  // 0 Open 1 ready to pick 2 success 3 cancel--}}
                                        Status :
                                        @if($order->status == 0) Open
                                        @elseif($order->satus == 1) Ready to pcik
                                        @elseif($order->status == 2) Success
                                        @else($order->satus == 3) Failed
                                        @endif
                                    </p>
                                </div>
                                <div class="col text-right">
                                    <p class="mb-1">{{ $order->getCategory->name }}</p>
                                    <p class="m-0">Rp {{ number_format($order->getCategory->price,2) }} /Kg</p>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
                <div class="card-footer">
                    {!! $orders->render() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
