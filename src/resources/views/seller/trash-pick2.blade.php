@extends('seller.template')

@section('addon-css')
    <style media="screen">
        label {
            width: 100%;
            font-size: 1rem;
        }

        .card-input-element + .card {
            height: calc(36px + 2 * 1rem);
            color: var(--primary);
            -webkit-box-shadow: none;
            box-shadow: none;
            border: 2px solid transparent;
            /* border: #68B21D solid 2px; */
            border-radius: 4px;
        }

        .card-input-element + .card:hover {
            cursor: pointer;
        }

        .card-input-element:checked + .card {
            border: 2px solid var(--primary);
            /* border: #68B21D solid 2px; */
            -webkit-transition: border .3s;
            -o-transition: border .3s;
            transition: border .3s;
        }

        .card-input-element:checked + .card::after {
            content: '\e5ca';
            color: #68B21D;
            font-family: 'Material Icons';
            font-size: 24px;
            -webkit-animation-name: fadeInCheckbox;
            animation-name: fadeInCheckbox;
            -webkit-animation-duration: .5s;
            animation-duration: .5s;
            -webkit-animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
            animation-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
        }

        @-webkit-keyframes fadeInCheckbox {
            from {
                opacity: 0;
                -webkit-transform: rotateZ(-20deg);
            }
            to {
                opacity: 1;
                -webkit-transform: rotateZ(0deg);
            }
        }

        @keyframes fadeInCheckbox {
            from {
                opacity: 0;
                transform: rotateZ(-20deg);
            }
            to {
                opacity: 1;
                transform: rotateZ(0deg);
            }
        }
    </style>
@endsection

@section('content')

    <div class="container">

        <!-- Profile Wrapper-->
        <div class="profile-wrapper-area py-3">
            <!-- User Information-->
            <div class="card user-info-card">
                <div class="card-body p-4 d-flex align-items-center">
                    <div class="user-info">
                        <h5 class="mb-0">Trash List and Price</h5>
                    </div>
                </div>
            </div>


            <!-- User Meta Data-->
            <div class="card user-data-card">
                <div class="progress " style="height: 7px;">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 66%;" aria-valuenow="66"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>


                <div class="card-body">
                    <form action="{{ url('trash-step-2') }}" method="post">
                        @csrf
                        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
                        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

                        @foreach($trashCategories as $trashCategory)
                            <label class="mb-2">
                                <input type="checkbox" value="{{ $trashCategory->id }}" name="category[]" class="card-input-element d-none"
                                       id="demo1">
                                <div
                                    class="card card-body bg-light d-flex flex-row justify-content-between align-items-center">
                                    <div class="col">
                                        <p class="p-0 m-0">{{ $trashCategory->name }}</p>
                                    </div>
                                    <div class="col">
                                        Rp {{ number_format($trashCategory->price,2) }} /Kg
                                    </div>
                                </div>
                            </label>
                        @endforeach


                        <div class="d-flex justify-content-center">
                            <a href="{{ url('cancel-order') }}" class="btn btn-danger w-50 m-3">Cancel</a>
                            <button class="btn btn-success w-50 m-3" type="submit">Next</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection
