@extends('buyer.template')

@section('content')

    <div class="container">
        <div class="support-wrapper py-3">
            <h4 class="faq-heading text-center">My Subscription</h4>

            <div class="accordian-area-wrapper mt-3">
                <!-- Accordian Card-->
                <div class="card accordian-card clearfix">
                    <div class="card-body">
                        <div class="card-body">

                            <div class="accordian-area-wrapper mt-3">
                                <!-- Accordian Card-->
                                <div class="card accordian-card clearfix">
                                    <div class="card-body">
                                        <h5 class="accordian-title">
                                            @switch($userSubs->subs_id)
                                                @case(1)
                                                Diamond
                                                @case(2)
                                                Gold
                                                @break
                                                @case(3)
                                                Silver
                                                @break
                                            @endswitch
                                        </h5>
                                        <div class="accordion" id="accordionExample">
                                            <!-- Single Accordian-->
                                            <div class="accordian-header" id="headingOne">
                                                End Date : {{ date('d F, Y', strtotime($userSubs->end_date)) }} <br>
                                                Status : @if($userSubs->status) Active @else Inactive @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
