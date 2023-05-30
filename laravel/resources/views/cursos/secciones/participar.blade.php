<section id="participantes" class="pt-5 pb-5">
    <div style="background: url({{asset('storage/') .'/'. $curso->banner4}});background-position:center center;background-repeat:no-repeat;background-size:cover;min-height: 650px;" class="container">
        <div class="row">
            <div class="col">
                <div data-aos="fade-down-right" class="float-participar">
                <img src="{{asset('images/floatparticipar.png')}}" alt="Quienes pueden participar">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <div class="texto-participar-1 p-5 text-light lightNarrow">
                    {!! $curso->textos->texto4 !!}
                </div>
            </div>
            <div class="col-sm-6">
                <div class="position-absolute">
                    <div class="texto-participar-2 p-3 position-relative bg-white">
                        <h2 class="narrowThin m-0 s50 ln6 pt-5"> Nuestra <br><span class="boldNarrow main-rose">Dinámica</span></h2>
                        {!! $curso->textos->texto5 !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
