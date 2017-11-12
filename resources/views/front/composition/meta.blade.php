@section('meta')
    <title>{{ $composition->{'seotitle'.$lg} }}</title>
    <meta name="description" content="{{ $composition->seodescription }}">
    <meta name="keywords" content="{{ $composition->seokeywords }}">
@endsection