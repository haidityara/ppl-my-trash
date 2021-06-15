@extends('buyer.template')

@section('content')

    <div class="container">
        <div class="support-wrapper py-3">
            <h4 class="faq-heading text-center">Become a Partner?</h4>

            <!-- Accordian Area Wrapper-->
            <div class="accordian-area-wrapper mt-3">
                <!-- Accordian Card-->
                <div class="card accordian-card clearfix">
                    <div class="card-body">
                        <h5 class="accordian-title">Diamond</h5>
                        <div class="accordion" id="accordionExample">
                            <!-- Single Accordian-->
                            <div class="accordian-header" id="headingOne">
                                <button class="d-flex align-items-center justify-content-between w-100 collapsed btn"
                                        type="button" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="false" aria-controls="collapseOne"><span><i
                                            class="lni lni-diamond"></i>Rp. 50,000/Month</span><i
                                        class="lni lni-chevron-right"></i></button>
                            </div>
                            <div class="collapse" id="collapseOne" aria-labelledby="headingOne"
                                 data-parent="#accordionExample">
                                <p>Bergabung dengan member DIAMOND akan mendapatkan keuntungan ambil sampah sampai 50
                                    kali pengambilan dalam sehari</p>
                                <a href="{{ url('buyer/plan/1') }}" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Accordian Area Wrapper-->
            <div class="accordian-area-wrapper mt-3">
                <!-- Accordian Card-->
                <div class="card accordian-card seller-card clearfix">
                    <div class="card-body">
                        <h5 class="accordian-title">Gold</h5>
                        <div class="accordion" id="accordionExample2">
                            <!-- Single Accordian-->
                            <div class="accordian-header" id="headingThree">
                                <button class="d-flex align-items-center justify-content-between w-100 collapsed btn"
                                        type="button" data-toggle="collapse" data-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree"><span><i
                                            class="lni lni-diamond"></i>Rp. 30,000/Month</span><i
                                        class="lni lni-chevron-right"></i></button>
                            </div>
                            <div class="collapse" id="collapseThree" aria-labelledby="headingThree"
                                 data-parent="#accordionExample2">
                                <p>Bergabung dengan member GOLD akan mendapatkan keuntungan ambil sampah sampai 50 kali
                                    pengambilan dalam sehari</p>
                                <a href="{{ url('buyer/plan/2') }}" class="btn btn-primary">Order</a>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Accordian Area Wrapper-->
            <div class="accordian-area-wrapper mt-3">
                <!-- Accordian Card-->
                <div class="card accordian-card others-card clearfix">
                    <div class="card-body">
                        <h5 class="accordian-title">Silver</h5>
                        <div class="accordion" id="accordionExample3">
                            <!-- Single Accordian-->
                            <div class="accordian-header" id="headingFive">
                                <button class="d-flex align-items-center justify-content-between w-100 collapsed btn"
                                        type="button" data-toggle="collapse" data-target="#collapseFive"
                                        aria-expanded="false" aria-controls="collapseFive"><span><i
                                            class="lni lni-diamond"></i>Rp. 20,000/Month</span><i
                                        class="lni lni-chevron-right"></i></button>
                            </div>
                            <input type="radio" value="" name="subscribePlan" class="card-input-element d-none"
                                   id="demo1">
                            <div class="collapse" id="collapseFive" aria-labelledby="headingFive"
                                 data-parent="#accordionExample3">
                                <p>Bergabung dengan member SILVER akan mendapatkan keuntungan ambil sampah sampai 10
                                    kali pengambilan dalam sehari</p>
                                <a href="{{ url('buyer/plan/3') }}" class="btn btn-primary">Order</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>

@endsection
