@extends('seller.template')

@section('content')
    <!-- Catagory Single Image-->
    <div class=""
         style="background: #69b21b; height: auto !important;color: white">
        <div class="container pt-3 pb-3">
            <div class="row">
                <div class="col-md-8 col-xs-8">
                    <h3 style="color: white">Trash Point</h3>
                    <p style="color: white">
                        Tukarkan tiap point yang anda dapatkan <br>
                        dapatkan dari bonus penukaran sampah dengan berupa, <br>
                        voucher pulsa, gopay, ovo dan masih banyak lagi.
                    </p>
                </div>
            </div>
        </div>
    </div>



    <!-- Top Products-->
    <div class="top-products-area py-3">
        <div class="container">

            <div class="row g-3">
                <!-- Single Top Product Card-->


                <!-- Single Top Product Card-->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card top-product-card">
                        <div class="card-body">
                            <a class="product-thumbnail d-block" href="{{ url('point/withdraw/pulsa') }}">
                                <img class="mb-2" src="{{ asset('img/product/pulsa.png') }}" alt="">
                            </a>
                            <a class="product-title d-block text-center m-0" href="{{ url('point/withdraw/pulsa') }}">Pulsa</a>
                        </div>
                    </div>
                </div>



                <!-- Single Top Product Card-->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card top-product-card">
                        <div class="card-body">
                            <a class="product-thumbnail d-block" href="{{ url('point/withdraw/ovo') }}">
                                <img class="mb-2" src="{{ asset('img/product/ovo2.png') }}" alt="">
                            </a>
                            <a class="product-title d-block text-center m-0" href="{{ url('point/withdraw/ovo') }}">OVO</a>
                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
@endsection
