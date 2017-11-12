@section('meta')
    <title>{{ $factory->{'seotitle'.$lg} }}</title>
    <meta name="description" content="{{ $factory->seodescription }}">
    <meta name="keywords" content="{{ $factory->seokeywords }}">
@endsection