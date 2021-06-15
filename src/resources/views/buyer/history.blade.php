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
                        <h5 class="mb-0">History</h5>
                    </div>
                </div>
            </div>


            <!-- User Meta Data-->
            <div class="card user-data-card">

                @if(count($orders) < 1)
                    <div class="card-body">
                        <div class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                            <div class="col text-center">
                                <p class="m-0">No History</p>
                                <p>Try to take trash <br> <a href="{{ url('buyer/trash-pick') }}"
                                                             class="btn btn-primary">Here</a></p>
                            </div>
                        </div>
                    </div>
                @endif

                @foreach($orders as $order)
                    <div class="card-body">
                        <div class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                            <div class="col">
                                <p class="mb-1 font-weight-bold">{{ date('d F Y', strtotime($order->created_at)) }}</p>
                                <p class="m-0">{{ $order->getOrder->area }}</p>
                                <p class="m-0">
                                    {{--  // 0 Open 1 ready to pick 2 success 3 cancel--}}
                                    Status :

                                    @switch($order->getOrder->status)
                                        @case(0)
                                        Open
                                        @break
                                        @case(1)
                                        Need to pick
                                        @break
                                        @case(2)
                                        Success
                                        @break
                                        @case(3)
                                        Failed
                                        @break
                                    @endswitch

                                </p>
                            </div>
                            <div class="col text-right">
                                <p class="mb-1">{{ $order->getOrder->getCategory->name }}</p>
                                <p class="m-0">Rp {{ number_format($order->getOrder->getCategory->price,2) }} /Kg</p>
                                <a class="btn btn-info" href="{{ url('buyer/history',$order->id) }}"
                                   style="text-decoration: #00b894">Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="card-footer">
                    {!! $orders->render() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
