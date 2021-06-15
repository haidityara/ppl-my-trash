@extends('seller.template')

@section('content')

    <div class="container mt-5">
        <!-- User Information-->
        <div class="card user-info-card">
            <div class="card-body p-4 d-flex align-items-center">

                <div class="user-info">
                    <h5 class="mb-0">Fill in the Biodata's</h5>
                </div>
            </div>
        </div>


        <!-- User Meta Data-->
        <div class="card user-data-card">
            <div class="progress " style="height: 7px;">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 33%;" aria-valuenow="33"
                     aria-valuemin="0" aria-valuemax="100"></div>
            </div>


            <div class="card-body">
                <form action="{{ url('trash-step-1') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <div class="title mb-2"><i class="lni lni-user"></i><span>Name</span></div>
                        <input class="form-control" type="text" value="{{ session('seller')['name'] }}"
                               placeholder="Name" name="name" required disabled>
                    </div>
                    <div class="mb-3">
                        <div class="title mb-2"><i class="lni lni-envelope"></i><span>Email</span></div>
                        <input class="form-control" type="text" value="{{ session('seller')['email'] }}"
                               placeholder="info@mytrash.com" name="email"
                               required>
                    </div>
                    <div class="mb-3">
                        <div class="title mb-2"><i class="lni lni-phone"></i><span>Phone</span></div>
                        <input class="form-control" type="text" value="" name="phone" placeholder="08122233344"
                               required>
                    </div>
                    <div class="mb-3">
                        <div class="title mb-2"><i class="lni lni-map"></i><span>Choose Area</span></div>
                        <select class="form-control" aria-label="Default select example" name="area">
                            <option selected disabled>--Choose Area--</option>
                            <option value="Semarang Tengah">Semarang Tengah</option>
                            <option value="Semarang Timur">Semarang Timur</option>
                            <option value="Semarang Barat">Semarang Barat</option>
                            <option value="Ungaran">Ungaran</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <div class="title mb-2"><i class="lni lni-map-marker"></i><span>Address</span></div>
                        <input class="form-control" type="text" placeholder="Ds Dermolo RT 02/06 Kembang Semarang"
                               name="address">
                    </div>

                    <button class="btn btn-success w-100" type="submit">Next</button>
                </form>
            </div>
        </div>
    </div>


@endsection
