@extends('front.layout')
@section('content')
    @include('front.contacts.meta')
    <!-- page -->
    <div class="page">
        <div class="container">
            <div class="page-title text--center">
                <h1 class="title-1">@lang('all_page.contacts')</h1>
            </div>
            <div class="nav-content text--center">
                <ul class="list--inline" role="tablist">
                    <li role="presentation" class="active"> <a href="#locations" aria-controls="locations" role="tab" data-toggle="tab">@lang('contacts.menu1')</a> </li>
                    <li role="presentation"> <a href="#address" aria-controls="address" role="tab" data-toggle="tab">@lang('contacts.menu2')</a> </li>
                    <li role="presentation"> <a href="#distributors" aria-controls="distributors" role="tab" data-toggle="tab">@lang('contacts.menu3')</a> </li>
                </ul>
            </div>
        </div>
        <div class="page-content">
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="locations">
                    <!-- section-locations -->
                    <section class="section section--white section--locations">
                        <div class="container">
                            <div class="section-content">
                                <div class="section-in">
                                    <h3 class="title-3">@lang('contacts.distr_addr')</h3>
                                    <div class="nav-subcontent">
                                        <ul class="list--inline" role="tablist">
                                            <?php $i = 0 ?>
                                            @foreach($contacts->cities_group as $item)
                                                <?php $i++ ?>
                                                <li role="presentation" @if($i == 1) class="active" @endif> <a href="#tab-city-{{$i}}" aria-controls="tab-city-{{$i}}" role="tab" data-toggle="tab">{!! $item->{'item_title'.$lg} !!}</a> </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    <div class="tab-content">
                                    <?php $i = 0 ?>
                                    @foreach($contacts->cities_group as $city)
                                        <?php $middle = ceil($city->sellers_group->count() / 2);
                                              $i++ ?>
                                        <div role="tabpanel" class="tab-pane fade @if($i == 1) in active @endif" id="tab-city-{{$i}}">
                                            <div class="row">
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                <?php $j = 0 ?>
                                                @foreach($city->sellers_group as $item)
                                                    <?php $j++ ?>
                                                    @break($j > $middle)
                                                    <h6>{!! $item->{'item_title'.$lg} !!}</h6>
                                                    <p>{!! $item->{'item_text'.$lg} !!}</p>
                                                @endforeach
                                                </div>
                                                <div class="col-lg-6 col-md-6 col-sm-6">
                                                <?php $j = 0 ?>
                                                @foreach($city->sellers_group as $item)
                                                    <?php $j++ ?>
                                                    @continue($j <= $middle)
                                                    <h6>{!! $item->{'item_title'.$lg} !!}</h6>
                                                    <p>{!! $item->{'item_text'.$lg} !!}</p>
                                                @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /section-locations -->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="address">
                    <!-- section-address -->
                    <section class="section section--white section--address">
                        <div class="container">
                            <div class="section-content">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="section-in">
                                            <h3 class="title-3">@lang('contacts.comp_addr')</h3>
                                            <p>{!! $contacts->{'prod_text'.$lg} !!}</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="section-map">
                                            <div class="map" data-latitude="50.565762" data-longitude="72.565293" data-zoom="13" data-color="#ed4543"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /section-address -->
                </div>
                <div role="tabpanel" class="tab-pane fade" id="distributors">
                    <!-- section-distributors -->
                    <section class="section section--white section--distributors">
                        <div class="container">
                            <div class="section-content">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="section-in">
                                            <h3 class="title-3">@lang('contacts.distributors')</h3>
                                            <p>{!! $contacts->{'distr_text'.$lg} !!}</p>
                                            <div class="buttons">
                                            <?php $i = 0 ?>
                                            @foreach($contacts->distributors_group as $item)
                                                    <?php $i++ ?>
                                                    <a href="#" type="button" class="btn--unstyled btn--map @if($i == 1) active @endif" data-latitude="{{ $item->lat_field }}" data-longitude="{{ $item->lon_field }}" data-zoom="17" data-pin="/img/pin.png">
                                                        <strong>{!! $item->{'item_title'.$lg} !!}</strong>
                                                        {!! $item->{'item_text'.$lg} !!}
                                                    </a>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="section-map">
                                            <div class="map"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- /section-distributors -->
                </div>
            </div>
        </div>
    </div>
    <!-- /page -->
@endsection
