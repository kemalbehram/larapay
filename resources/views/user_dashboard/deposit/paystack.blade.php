@extends('user_dashboard.layouts.app')
@section('content')
    <section class="section-06 history padding-30">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mb20 marginTopPlus">
                    @include('user_dashboard.layouts.common.alert')
                    <div class="card">
                        <div class="card-header"><h4 class="float-left">@lang('message.dashboard.deposit.deposit-stripe-form.title')</h4></div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                                @csrf
                                <div class="row" style="margin-bottom:40px;">
                                    <div class="col-md-8 col-md-offset-2">
                                     {{-- {{dd($data)}} --}}
                                        <input type="hidden" name="email" value="{{$data['email']}}"> {{-- required --}}
                                        <input type="hidden" name="orderID" value="345">
                                        <input type="hidden" name="amount" value="{{$data['amount']}}"> {{-- required in kobo --}}
                                        <input type="hidden" name="currency" value="{{$data['currency']}}">
                                        <input type="hidden" name="reference" value="{{ $data['reference'] }}"> {{-- required --}}
                                     {{-- works only when using laravel 5.1, 5.2 --}}
                            
                                       
                            
                                        <p>
                                            <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                                <i class="fa fa-plus-circle fa-lg"></i> Pay with Paystack!
                                            </button>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-3">
                                        <button class="btn btn-cust float-left" style="margin-top:10px;" type="submit" >
                                            @lang('message.form.submit')
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('user_dashboard.layouts.common.help')
@endsection
