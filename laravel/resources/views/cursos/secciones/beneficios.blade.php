<section class="pt-5 pb-5" id="beneficios">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <h2 class="boldNarrow ln8 s50">RAZONES /  <br><span class="main-rose">BENEFICIOS</span></h2>

                        @if($curso->textos->texto1)
                            {!! $curso->textos->texto1 !!}
                        @endif
                    </div>
                    <div class="col-sm-12 col-md-6 d-flex align-items-center">
                        @if($curso->textos->texto2)
                            {!! $curso->textos->texto2 !!}
                        @endif
                    </div>
                </div>
                <div class="row">
                    @if($curso->miniaturas)
                        @foreach($curso->miniaturas as $miniatura)
                        <div class="col-sm-12 col-md-4">
                            <img src="{{asset('storage/') . '/' . $miniatura->img}}" alt="{{$curso->nombre}}">
                        </div>
                        @endforeach
                    @endif
                </div>
            </div>
            <div  class="col-md-6">
                @if($curso->razones)
                    <div class="text-center paroller">
                        <img class="w80" src="{{asset('storage/') .'/'. $curso->razones->img}}" alt="{{$curso->nombre}}">
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="container">
                <div class="col-sm-12">
                    <div class="pt-3 pb-3">
                        @if($curso->textos->texto3)
                            {!! $curso->textos->texto3 !!}
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
