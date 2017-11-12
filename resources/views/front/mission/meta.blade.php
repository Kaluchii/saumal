@section('meta')
    <title>{{ $mission->{'seotitle'.$lg} }}</title>
    <meta name="description" content="{{ $mission->seodescription }}">
    <meta name="keywords" content="{{ $mission->seokeywords }}">
@endsection