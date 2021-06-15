@extends('seller.template')

@section('content')

    <div class="container">
        <!-- Profile Wrapper-->
        <div class="profile-wrapper-area py-3">
            <!-- User Information-->
            <div class="card user-info-card">
                <div class="card-body p-4 d-flex align-items-center">
                    <div class="user-info">
                        <h5 class="mb-0">Trash Pick Summary</h5>
                    </div>
                </div>
            </div>


            <!-- User Meta Data-->
            <div class="card user-data-card">

                <!-- Progress Bar -->
                <div class="progress " style="height: 7px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 100%;" aria-valuenow="100"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>


                <div class="card-body">
                    <form action="{{ url('trash-step-3') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row">
                            <p class="h6 mb-1 font-weight-light">TUJUAN</p>
                        </div>
                        <div class="row ml-1">
                            <p class="my-0 ml">{{ session('trash-bio')['name'] }}</p>
                            <p class="my-0">{{ session('trash-bio')['area'] }}</p>
                            <p class="my-0">{{session('trash-bio')['phone']}}</p>
                        </div>
                        <hr>
                        <div class="row mt-2">
                            <p class="h6 mb-1 font-weight-light">TRASH DETAIL</p>
                        </div>
                        @foreach(session('trash-item') as $item)
                            <?php
                            $name = "";
                            foreach ($trashCategories as $category) {
                                if ($category->id == $item) {
                                    $name = $category->name;
                                    $price = $category->price;
                                }

                            }
                            ?>

                            <div class="row ml-1 mb-3">
                                <div class="col">
                                    <p class="my-0 ml">{{ $name }}</p>
                                </div>
                                <div class="col text-right">
                                    <p class="my-0 ml">Rp.{{ number_format($price,2) }} /Kg</p>
                                </div>
                            </div>
                        @endforeach
                        <hr>

                        <div class="row mb-3">
                            <label for="">Place your trash photo</label>
                            <input type="file" name="image" required class="form-control">
                        </div>
                        <!-- Neng Kene -->


                        <div class="d-flex justify-content-center">
                            <a href="{{ url('cancel-order') }}" class="btn btn-danger w-50 m-3">Cancel</a>
                            <button class="btn btn-success w-50 m-3" type="submit">Sell</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
