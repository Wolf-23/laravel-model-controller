<header>
    <ul>
        <li><a class="{{Request::route()->getName() == 'homepage'?'active':''}}" href="{{route('homepage')}}">HOMEPAGE</a></li>
        <li><a class="{{Request::route()->getName() == 'best'?'active':''}}" href="{{route('best')}}">BEST</a></li>
        <li><a class="{{Request::route()->getName() == 'news'?'active':''}}" href="{{route('news')}}">NEWS</a></li>
    </ul>
</header>