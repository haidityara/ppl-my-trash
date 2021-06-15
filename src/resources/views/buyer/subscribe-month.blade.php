@extends('buyer.template')



@section('content')


    <div class="container">
        <div class="support-wrapper py-3">
            <h4 class="faq-heading text-center">Subscription for {{ $data['name'] }} Plan</h4>

            <div class="accordian-area-wrapper mt-3">
                <!-- Accordian Card-->
                <div class="card accordian-card clearfix">
                    <div class="card-body">
                        <div class="card-body">

                            {{--                            <form action="{{ url('buyer/subscribe') }}" method="post">--}}
                            {{--                                @csrf--}}
                            <div class="form-group mb-4">
                                <label for="">Price</label>
                                <input type="text" value="Rp. {{ number_format($data['price']) }}/Month"
                                       class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="">
                                <span>
                                    Select a tier
                                </span>
                                </label>
                                <input type="hidden" id="planID" value="{{ $data['id'] }}">
                                <select name="tier" id="tierSelect" class="form-select mb-4">
                                    <option selected value="3">3 Months</option>
                                    <option value="6">6 Months</option>
                                    <option value="12">12 Months</option>
                                </select>
                                <button class="btn btn-success w-100" id="pay-button">Checkout</button>
                            </div>
                            {{--                            </form>--}}
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="SB-Mid-client-OYFbeY8Xxx1zjw5x"></script>
    <script type="text/javascript">

        var checkoutButton = document.getElementById('pay-button');
        checkoutButton.addEventListener('click', function () {
            var formData = new FormData();
            formData.append('tier', $('#tierSelect').val());
            formData.append('plan', $('#planID').val());
            formData.append('price', '{{ $data['price'] }}');
            fetch('<?= url('buyer/subscribe') ?>', {
                method: 'POST',
                body: formData,
            })
                .then(function (response) {
                    return response.json();
                })
                .then(function (session) {

                    snap.pay(session.session, {
                        onSuccess: function (result) {
                            console.log(result.status_message);
                            console.log(result);
                        },
                        onPending: function (result) {
                            console.log(result.status_message);
                        },
                        onError: function (result) {
                            console.log(result.status_message);
                        }
                    });
                })
                .then(function (result) {
                    if (result.error) {
                        alert(result.error.message);
                    }
                })
                .catch(function (error) {
                    // console.error('Error:', error);
                    console.log(error)
                });
        });
    </script>

    </script>

@endsection
