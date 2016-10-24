@extends('layouts.master')

@section('content')


<div class="container">
    <div class="row marketing">
        <div class="col-lg-12">
            <h4>Agenda</h4>
        </div>
        
        <!-- Vrijdag -->
        <div class="col-lg-12">
            <h2><center>Vrijdag</center></h2>
            <?php $vrijdagQuery = DB::table('slots')->where('dag', "Vrijdag")->get(); ?>
            <?php $vrijdagZaal1 = DB::table('slots')->where([['dag', 'Vrijdag'],['idZaal',  '1'],])->get(); ?>
            <?php $aantalZaals = DB::table('zaals')->get(); ?>
            <?php $x = 0; ?>
            <?php $countPerZaal = count($vrijdagZaal1); ?>
            
            <table border='1px' width=100%>
                <tr>
                    <td></td>
                    @foreach($aantalZaals as $zaal)
                        <td>{{ $zaal->zaalnaam }}</td>
                    @endforeach
                </tr>
                @foreach($vrijdagZaal1 as $vrijdagSlot)
                    <tr>
                        <td>{{ $vrijdagSlot->beginTijd }} - {{ $vrijdagSlot->eindTijd }}</td>
                        <td>ID: {{ $vrijdagQuery[$x]->id }} Status: {{ $vrijdagQuery[$x]->idStatus }}</td>
                        <td>ID: {{ $vrijdagQuery[$x+($countPerZaal*1)]->id }} 
                                    Status: {{ $vrijdagQuery[$x+($countPerZaal*1)]->idStatus }}</td>
                        <td>ID: {{ $vrijdagQuery[$x+($countPerZaal*2)]->id }} 
                                    Status: {{ $vrijdagQuery[$x+($countPerZaal*2)]->idStatus }}</td>
                        <td>ID: {{ $vrijdagQuery[$x+($countPerZaal*3)]->id }} 
                                    Status: {{ $vrijdagQuery[$x+($countPerZaal*3)]->idStatus }}</td>
                    </tr>
                    <?php $x = $x + 1; ?>
                @endforeach
            </table>    
        </div>
        
        <!-- Vrijdag -->
        <div class="col-lg-12">
            <h2><center>Vrijdag</center></h2>
            <table border='1px' width=100%>
                <tr>
                    <th></th><th>Zaal 1</th><th>Zaal 2</th><th>Zaal 3</th><th>Zaal 4</th>
                </tr>
                <tr>
                    <td>15:30 - 16:30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>16:45 - 17:45</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>18:45 - 19:45</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>20:00 - 21:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>21:30 - 22:30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        
        <!-- Zaterdag -->
        <div class="col-lg-12">
            <h2><center>Zaterdag</center></h2>
            <table border='1px' width=100%>
                <tr>
                    <th></th><th>Zaal 1</th><th>Zaal 2</th><th>Zaal 3</th><th>Zaal 4</th>
                </tr>
                <tr>
                    <td>10:15 - 11:15</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>11:30 - 12:30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>13:00 - 14:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>14:15 - 15:30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>15:30 - 16:30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>16:45 - 17:45</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>18:45 - 19:45</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>20:00 - 21:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>21:30 - 22:30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </table>
        </div>
        
        <!-- Zondag -->
        <div class="col-lg-12">
            <h2><center>Zondag</center></h2>
            <table border='1px' width=100%>
                <tr>
                    <th></th><th>Zaal 1</th><th>Zaal 2</th><th>Zaal 3</th><th>Zaal 4</th>
                </tr>
                <tr>
                    <td>12:15 - 13:15</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td>13:30 - 14:30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>15:00 - 16:00</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                <tr>
                    <td>16:15 - 17:15</td>
                    <td></td>
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