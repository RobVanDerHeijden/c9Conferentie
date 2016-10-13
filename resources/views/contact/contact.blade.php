@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row marketing">
        <div class="col-lg-6">
            <h4>Contact</h4>
                Contact punten
                {!! QrCode::size(100)->generate(Request::url()); !!}
        </div>
    </div>
    <div class="visible-print text-center">
        {!! QrCode::size(100)->generate(Request::url()); !!}
        <p>Scan me to return to the original page.</p>
    </div>
    <footer class="footer">
        <p>&copy;Bunky, 2016</p>
    </footer>

</div> <!-- /container -->
@endsection