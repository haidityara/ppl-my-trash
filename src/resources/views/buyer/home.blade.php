@extends('buyer.template')

@section('content')
    <!-- Hero Slides-->
    <div class="hero-slides owl-carousel">
        <!-- Single Hero Slide-->
        <div class="single-hero-slide" style="background-image: url('{{ asset('img/bg-img/3.jpg') }}')">
            <div class="slide-content h-100 d-flex align-items-center">
                <div class="container">
                    <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms" data-wow-duration="1000ms">
                        TRASH PICK</h4>
                    <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-wow-duration="1000ms">Fitur
                        penjemputan sampah daur ulang. Mitra kami terdekat akan menjemput, menimbang, dan dapatkan
                        benefit lain dari sampah yang kamu pilah</p>
                    <a class="btn btn-danger btn-sm" href="trash-pick.html" data-animation="fadeInUp" data-delay="800ms"
                       data-wow-duration="1000ms">Pick Now</a>
                </div>
            </div>
        </div>
        <!-- Single Hero Slide-->
        <div class="single-hero-slide" style="background-image: url('{{ asset('img/bg-img/2.jpg') }}')">
            <div class="slide-content h-100 d-flex align-items-center">
                <div class="container">
                    <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms" data-wow-duration="1000ms">
                        TRASH POINT</h4>
                    <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-wow-duration="1000ms">
                        Tukarkan setiap poin yang kamu dapatkan dari penukaran sampah dengan voucher, pulsa, token
                        listrik dan setiap merchant yang terdaftar di my trash</p>
                    <!-- <a class="btn btn-success btn-sm" href="#" data-animation="fadeInUp" data-delay="500ms" data-wow-duration="1000ms">Buy Now</a> -->
                </div>
            </div>
        </div>
        <!-- Single Hero Slide-->
        <div class="single-hero-slide" style="background-image: url('{{ asset('img/bg-img/1.jpg') }}')">
            <div class="slide-content h-100 d-flex align-items-center">
                <div class="container">
                    <h4 class="text-white mb-0" data-animation="fadeInUp" data-delay="100ms" data-wow-duration="1000ms">
                        TRASH DROP</h4>
                    <p class="text-white" data-animation="fadeInUp" data-delay="400ms" data-wow-duration="1000ms">Kamu
                        dapat memberikan sampah daur ulang secara lansung ke mitra kami yang terdekat dan dapatkan
                        tambahan benefit dari samapah yang kamu pilah</p>
                    <!-- <a class="btn btn-primary btn-sm" href="#" data-animation="fadeInUp" data-delay="800ms" data-wow-duration="1000ms">Buy Now</a> -->
                </div>
            </div>
        </div>

    </div>

    <!-- Product Catagories-->
    <div class="product-catagories-wrapper py-3">
        <div class="container">
            <div class="section-heading">
                <h6 class="ml-1">Menu</h6>
            </div>
            <div class="product-catagory-wrap">
                <div class="row g-3">
                    <!-- Single Catagory Card-->
                    <div class="col-4">
                        <div class="card catagory-card">
                            <div class="card-body"><a href="{{ url('buyer/trash-pick') }}"><i class="lni lni-trash"></i><span>Trash Pick</span></a>
                            </div>
                        </div>
                    </div>
                    <!-- Single Catagory Card-->
                    <div class="col-4">
                        <div class="card catagory-card">
                            <div class="card-body"><a href="{{ url('buyer/subscription') }}"><i
                                        class="lni lni-coin"></i><span>Subscription</span></a></div>
                        </div>
                    </div>
                    <!-- Single Catagory Card-->
                    <div class="col-4">
                        <div class="card catagory-card">
                            <div class="card-body"><a href="{{ url('trash-drop') }}"><i class="lni lni-map"></i><span>Trash Drop</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cool Fact Area-->
    <div class="cta-area">
        <div class="container">
            <div class="cta-text p-4 p-lg-5">
                <h4>Hi, <b>{{ session('buyer')['name']  }}</b></h4>
                <p>Your Point : --0--</p>
            </div>
        </div>
    </div>



@endsection
