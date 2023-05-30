<section class="pt-5 pb-5" id="bannerCurso">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-5">
                <div class="descripcion-curso">

                </div>
            </div>
            <div style="background: url('{{url('/')}}/storage/{{$entrada->miniatura}}');background-size: contain;background-position: center;
                background-repeat: no-repeat;
                min-height: 550px;position:relative;" class="col-sm-12 col-md-7">
                <div style="left: 3% !important;" class="contenido-banner paroller">
                    <h1 style="line-height: 0.6 !important;" class="s40 ls5 boldNarrow text-light">
                        {{$entrada->titulo}}

                    </h1>
                    <span class="main-rose s40 ls5 boldNarrow">{{$entrada->created_at->format('d M Y')}}</span>
                </div>
            </div>
        </div>
    </div>
</section>
