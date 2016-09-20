@extends('layouts.master')

@section('content')
<div class="container">
    <div class="jumbotron">
        <h1>Conferentiesite</h1>
        <p class="lead">Rob is een coole boy</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Dat klopt!</a></p>
    </div>
</div>

<div class="container">
    @include('includes.navbar')
    

    <div class="row marketing">
        <div class="col-lg-6">
            <h4>Contact</h4>
                Contact punten
        </div>
    

    </div>
    
    <footer class="footer">
        <p>&copy;Bunky, 2016</p>
    </footer>

</div> <!-- /container -->
@endsection