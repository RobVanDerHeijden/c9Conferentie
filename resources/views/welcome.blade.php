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
            <h4>Subheading</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
            
            <h4>Subheading</h4>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>
            
            <h4>Subheading</h4>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
    
        <div class="col-lg-6">
            <h4>Subheading</h4>
            <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>
            
            <h4>Subheading</h4>
            <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>
            
            <h4>Subheading</h4>
            <p>Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
        </div>
    </div>
    
    <footer class="footer">
        <p>&copy;Bunky, 2016</p>
    </footer>

</div> <!-- /container -->
@endsection
       