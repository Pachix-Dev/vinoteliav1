<section id="blog-content">
        <div class="container">
            <div class="row">
                @foreach ($entradas as $entrada)
                <div class="col-md-4">
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
                            <img src="{{url('/')}}/storage/{{$entrada->miniatura}}" alt="{{$entrada->titulo}}" title="{{$entrada->titulo}}">
                        </div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">{{$entrada->titulo}}</h3>
                            <span class="badge badge-dark">{{$entrada->created_at->format('d M Y')}}</span>
                            <p>{{$entrada->preview}}</p>
                        <a href="{{route('blog.interior' , ['slug' => $entrada->slug])}}" type="button" class="btn btn-secondary">Leer más</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
</section>
