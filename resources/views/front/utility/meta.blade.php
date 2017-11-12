@section('meta')
    <title>{{ $utility->{'seotitle'.$lg} }}</title>
    <meta name="description" content="{{ $utility->seodescription }}">
    <meta name="keywords" content="{{ $utility->seokeywords }}">
@endsection