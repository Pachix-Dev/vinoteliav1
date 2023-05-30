
<li class="list-inline-item pr-4">
    <a class="text-uppercase" href="{{url('cursos')}}">Capacitación</a>
    <div uk-dropdown="mode: click">
        <ul class="uk-nav uk-dropdown-nav">
            @isset($cursos)
            @foreach ($cursos as $c)
                <li><a href="{{url('cursos/' . $c->slug)}}">{{$c->nombre}}</a></li>
            @endforeach
            @endisset
        </ul>
    </div>
</li>
{{-- <li class="list-inline-item pr-4">
    <a class="text-uppercase" href="">Eventos</a>
</li>
<li class="list-inline-item pr-4">
    <a class="text-uppercase" href="">Tours</a>
</li>
<li class="list-inline-item pr-4">
    <a class="text-uppercase" href="">Blog</a>
</li> --}}
<li class="list-inline-item pr-4">
<a href="{{route('blog')}}" class="text-uppercase">Blog</a>
    <div uk-dropdown="boundary: .boundary">
        <ul class="uk-nav uk-dropdown-nav">
                <li><a href="{{url('blog/claves-para-comprar-vino-por-internet')}}">Comprar vinos por internet</a></li>
        </ul>
    </div>
</li>
<li class="list-inline-item pr-4">
    <a class="text-uppercase" href="">Inscríbete</a>
</li>

