@section('meta')
    <title>{{ $news->{'seotitle'.$lg} }}</title>
    <meta name="description" content="{{ $news->seodescription }}">
    <meta name="keywords" content="{{ $news->seokeywords }}">
@endsection