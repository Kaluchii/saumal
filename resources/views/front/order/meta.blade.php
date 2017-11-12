@section('meta')
    <title>{{ $orders->{'seotitle'.$lg} }}</title>
    <meta name="description" content="{{ $orders->seodescription }}">
    <meta name="keywords" content="{{ $orders->seokeywords }}">
@endsection