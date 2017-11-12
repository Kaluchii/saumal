@section('meta')
    <title>{{ $process->{'seotitle'.$lg} }}</title>
    <meta name="description" content="{{ $process->seodescription }}">
    <meta name="keywords" content="{{ $process->seokeywords }}">
@endsection