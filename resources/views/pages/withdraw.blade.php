@extends('layouts.dashboard')

@section('content')
    <!-- Page content -->
    <div class="page-content">
        <!-- Page title -->
        <div class="page-title">
            <div class="row justify-content-between align-items-center">
                <div class="mb-3 col-md-6 mb-md-0">
                    <h5 class="mb-0 text-white h3 font-weight-400">Place a withdrawal request</h5>
                </div>
            </div>
        </div>
        <div>
        </div>
        <div>
        </div>
        <div class="row">
            <div class="my-5 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="my-5 row d-flex nowrap">
                            @if (count($_currencies) < 1)
                            <div class="alert alert-info">
                                Withdrawal channel not available now. Try later
                            </div>
                            @else

                            @foreach($_currencies as $currency)
                                <div class="mb-4 col-lg-4">
                                    <div class="card-deck">
                                        <div
                                            class="text-center border-0 rounded-lg shadow-lg card card-pricing hover-scale-110 bg-primary popular">
                                            <div class="py-0 border-0 card-header">
                                                <span
                                                    class="px-4 py-1 mx-auto bg-white shadow-sm h6 d-inline-block rounded-bottom">{{strtoupper($currency->symbol)}}</span>
                                                <div class="py-5">
                                                    <img src="{{$currency->image}}"
                                                        alt="withdrawal method image" srcset=""
                                                        class="img-fluid img-center" style="height:90px;">

                                                </div>
                                            </div>
                                            <hr class="my-0 divider divider-fade divider-dark" />
                                            <div class="card-body">
                                                <ul class="mb-4 text-white list-unstyled">
                                                    <li>
                                                        <small>Minimum withdrawable amount</small>
                                                        <p class="text-white h5">$100</p>
                                                    </li>
                                                    <li>
                                                        <small>Maximum withdrawable amount</small>
                                                        <p class="text-white h5">$10,000+</p>
                                                    </li>
                                                    <li>Charge Type: <strong>percentage</strong></li>
                                                    <li>
                                                        Charges Amount:
                                                        <strong>
                                                            0%
                                                        </strong>
                                                    </li>
                                                    <li>
                                                        Duration: <strong>Instant Payment</strong>
                                                    </li>
                                                </ul>
                                               
                                                   
                                                    <div class="form-group">
                                                        <input type="hidden" value="" name="">
                                                        <button
                                                        data-bs-toggle="modal" data-bs-target="#save_withdraw{{$loop->index}}"
                                                            class="mb-3 btn btn-sm bg-gradient-primary text-light btn-neutral"
                                                            type='submit'><img
                                                                src="https://th.bing.com/th/id/OIP.RShHpIW-AFZkW0xBH2xZWAHaHa?w=180&h=180&c=7&r=0&o=5&pid=1.7"
                                                                width="10%" alt=""> Request withdrawal</button>
                                                    </div>

                                                   
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                @include("pages.include.save_withdraw")
                                @endforeach
                            @endif
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
