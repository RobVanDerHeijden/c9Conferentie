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
        <div class="col-lg-12">
            <h4>Agenda</h4>
                Agendapunten
        </div>
        <div class="col-lg-12">
            <h4>tabel</h4>
            <table border='1px'>
                <tr border='1px'>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
            <table>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>

    </div>
    
    <footer class="footer">
        <p>&copy;Bunky, 2016</p>
    </footer>

</div> <!-- /container -->
@endsection