<section class="pt-5 pb-5" id="directora-curso">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div data-aos="flip-left" class="text-right temario-img">
                            <img src="{{asset('images/temariobanner.png')}}" alt="Temario">
                        </div>
                        <div class="temario">
                            {!! $curso->temario !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div>
                            <img src="{{asset('storage/') . '/' . $curso->temarioimg}}" alt="{{$curso->nombre}}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 pt-4">
                <h2 class="narrowThin m-0 s50 ln6"> Nuestra <br><span class="boldNarrow">Directora</span></h2>
                {!! $curso->directoratexto !!}
            </div>
        </div>

    </div>
</section>
