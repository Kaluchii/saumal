@section('meta')
    <title>{{ $meta->{'seotitle'.$lg} }}</title>
    <meta name="description" content="{{ $meta->seodescription }}">
    <meta name="keywords" content="{{ $meta->seokeywords }}">
@endsection