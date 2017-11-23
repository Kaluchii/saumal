@extends('front.layout')
@section('content')
    <!-- page -->
    <div class="page">
        <div class="page-content">
            <form action="https://testpay.kkb.kz/jsp/process/logon.jsp" method="post">
                @foreach($fields as $key=>$value)
                    <input type="text" hidden name="{{$key}}" value="{{$value}}">
                @endforeach
                <input type="submit" hidden>
            </form>
            <script>
                document.forms[0].submit();
            </script>
        </div>
    </div>
    <!-- /page -->
@endsection
