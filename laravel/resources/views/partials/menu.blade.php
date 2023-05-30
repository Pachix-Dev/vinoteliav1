<div class="mainMenu">
    <div class="d-flex justify-content-between align-items-center">
    <a href="{{url('/')}}">
            <img src="{{asset('storage') . '/' . setting('site.logo')}}" alt="Vinotelia">
        </a>
        <nav class="d-flex justify-content-around align-items-center navigation">
        <a class="text-uppercase" href="{{url('cursos')}}">Capacitación</a>
        <div uk-dropdown="boundary: .boundary">
            <ul class="uk-nav uk-dropdown-nav">
                @isset($cursos)
                @foreach ($cursos as $c)
                    <li><a href="{{url('cursos/' . $c->slug)}}">{{$c->nombre}}</a></li>
                @endforeach
                @endisset
            </ul>
        </div>
            {{-- <a class="text-uppercase" href="">Eventos</a>
            <a class="text-uppercase" href="">Tours</a>--}}
            <a href="{{route('blog')}}" class="text-uppercase">Blog</a>
            <div uk-dropdown="boundary: .boundary">
                <ul class="uk-nav uk-dropdown-nav">
                        <li><a href="{{url('blog/claves-para-comprar-vino-por-internet')}}">Comprar vinos por internet</a></li>
                </ul>
            </div>
            <a class="text-uppercase" href="{{url('contacto')}}">Inscríbete</a>
            <a target="_blank" href="{{setting('site.facebook')}}"><img src="{{asset('images/fb.png')}}" alt="Facebook"></a>
            <a target="_blank" href="{{setting('site.instagram')}}"><img src="{{asset('images/ins.png')}}" alt="Instagram"></a>
            <a target="_blank" href="{{setting('site.twitter')}}"><img src="{{asset('images/tw.png')}}" alt="Twitter"></a>
        </nav>

    </div>
</div>
