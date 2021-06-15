@extends('buyer.template')

@section('content')

    <div class="container">
        <!-- Profile Wrapper-->
        <div class="profile-wrapper-area py-3">
            <!-- User Information-->
            <div class="card user-info-card">
                <div class="card-body p-4 d-flex align-items-center">
                    <div class="user-profile mr-3"><img src="{{ asset('img/user.jpeg') }}" alt=""></div>
                    <div class="user-info">
                        <p class="mb-0 text-white">{{ $user->email }}</p>
                        <h5 class="mb-0">{{ $user->name }}</h5>
                    </div>
                </div>
            </div>
            <!-- User Meta Data-->
            <div class="card user-data-card">
                <div class="card-body">
                    <div class="single-profile-data d-flex align-items-center justify-content-between">
                        <div class="title d-flex align-items-center"><i class="lni lni-user"></i><span>Full Name</span>
                        </div>
                        <div class="data-content">{{ $user->name }}</div>
                    </div>
                    <div class="single-profile-data d-flex align-items-center justify-content-between">
                        <div class="title d-flex align-items-center"><i class="lni lni-phone"></i><span>Phone</span>
                        </div>
                        <div class="data-content">{{ $user->phone }}</div>
                    </div>
                    <div class="single-profile-data d-flex align-items-center justify-content-between">
                        <div class="title d-flex align-items-center"><i
                                class="lni lni-envelope"></i><span>Email Address</span></div>
                        <div class="data-content">{{ $user->email }}</div>
                    </div>
                    <div class="single-profile-data d-flex align-items-center justify-content-between">
                        <div class="title d-flex align-items-center">
                            <a href="{{ url('logout') }}">
                                <i style="background-color: #8a2138;" class="lni lni-arrow-left"></i><span>Logout</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Edit Profile-->
            {{--            <div class="edit-profile-btn mt-3"><a class="btn btn-info w-100" href="edit-profile.html"><i--}}
            {{--                        class="lni lni-pencil mr-2"></i>Edit Profile</a></div>--}}
        </div>
    </div>
    <!-- Night Mode View Card-->
    <div class="night-mode-view-card my-3">
        <div class="container">
            <div class="card settings-card">
                <div class="card-body">
                    <div class="single-settings d-flex align-items-center justify-content-between">
                        <div class="title"><i class="lni lni-night"></i><span>Night Mode</span></div>
                        <div class="data-content">
                            <div class="toggle-button-cover">
                                <div class="button r">
                                    <input class="checkbox" id="darkSwitch" type="checkbox">
                                    <div class="knobs"></div>
                                    <div class="layer"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
