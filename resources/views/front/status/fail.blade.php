@extends('front.layout')
@section('meta')
    <title>SAUMAL</title>
@endsection
@section('content')
    <!-- page -->
    <div class="page">
        <div class="page-content">
            <div class="container">
                <div class="pay-notice">
                    <p class="pay-notice__title">@lang('order.fail')</p>
                    <p class="pay-notice__sub-title">@lang('order.fail_recomendation')</p>
                </div>
            </div>
        </div>
    </div>
    <!-- /page -->
@endsection
