@section('meta')
    <title>{{ $influence->{'seotitle'.$lg} }}</title>
    <meta name="description" content="{{ $influence->seodescription }}">
    <meta name="keywords" content="{{ $influence->seokeywords }}">
@endsection