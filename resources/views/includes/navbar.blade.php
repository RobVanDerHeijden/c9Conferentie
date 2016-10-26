<div class="header clearfix">
    <nav>
        <ul class="nav nav-pills pull-right">
            <li role="presentation" class="active"><a href="/">Home</a></li>
            <li role="presentation"><a href="/contact">Contact</a></li>
            <li role="presentation"><a href="/agenda">Agenda</a></li>
            <li><a href="/reserveren">Reserveren</a></li>
            <li><a href="/aanmelden">Aanmelden</a></li>
            <!--<li><a href="/registrerenslot">Registreren slot</a></li>-->
            <!--<li><a href="/connect">connect</a></li>-->
            @if(!Auth::check())
            <li><a href="{{route('user.login')}}">login</a></li>
            @endif
            @if(Auth::check())
            <li><a href="{{route('user.logout')}}">logout</a></li>
            @endif
            @if(Auth::check())
            <li><a href="/organisator/dashboard">Dashboard</a></li>
            @endif
        </ul>
    </nav>
</div>