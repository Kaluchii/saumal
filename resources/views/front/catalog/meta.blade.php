@section('meta')
    <title>{{ $goods->{'seotitle'.$lg} }}</title>
    <meta name="description" content="{{ $goods->seodescription }}">
    <meta name="keywords" content="{{ $goods->seokeywords }}">
@endsection