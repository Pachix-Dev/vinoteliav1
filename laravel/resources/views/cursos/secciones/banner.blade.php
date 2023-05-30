<section class="pt-5 pb-5" id="bannerCurso">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-12 col-md-5">
                <div class="descripcion-curso">

                </div>
            </div>
            <div style="background: url('{{asset('storage/') . "/" . $curso->banner}}');background-size: contain;background-position: center;
                background-repeat: no-repeat;
                min-height: 550px;position:relative;" class="col-sm-12 col-md-7">
                <div class="contenido-banner paroller">
                    <h1 class="s18 ln8 overlay-left narrowBook">¿EN QUÉ <span class="s40 ls5 boldNarrow"> <br> CONSISTE?</span></h1>
                    {!! $curso->descripcion !!}
                    <p>
                    <a style="background:{{$curso->color}} !important;" class="btn custom" href="#formasDePago">QUIERO INSCRIBIRME<img src="{{asset('images/arrow.png')}}" alt="Arrow"></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
