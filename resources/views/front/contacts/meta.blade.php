@section('meta')
    <title>{{ $contacts->{'seotitle'.$lg} }}</title>
    <meta name="description" content="{{ $contacts->seodescription }}">
    <meta name="keywords" content="{{ $contacts->seokeywords }}">
@endsection