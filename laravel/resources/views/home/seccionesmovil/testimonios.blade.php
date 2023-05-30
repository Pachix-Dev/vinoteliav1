<section class="pt-4 pb-4">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                    <img src="{{asset('images/quote.png')}}" alt="Quote">
                </div>
                <h1 class="text-center boldNarrow m-0">
                    TESTIMONIO
                </h1>
                @php
                    $count = 0;
                @endphp
                @foreach($testimonios as $testimonio)
                <div data-testimonio="{{$testimonio->id}}" class="testimonio-div testimonio-content{{$testimonio->id}} {{($count == 0 ? '' : 'dn')}}">

                    <p class="nombre-testimonio text-center lightNarrow">
                        [{{$testimonio->nombre}}]
                    </p>
                    <p>
                        <blockquote class="text-center lightNarrow">
                            "{{$testimonio->comentario}}"
                        </blockquote>
                    </p>
                </div>
                @php
                    $count++;
                @endphp
                @endforeach
                <div class="controls d-flex justify-content-center align-items-center">
                    @foreach($testimonios as $testimonio)
                        <div data-testimonio="{{$testimonio->id}}" class="item item-testimonio  p-2"><img src="{{asset('images/male.png')}}" alt="Testimonio"></div>
                    @endforeach
                </div>
            </div>
            </div>
            <div class="col-sm-12">
            <h2 class="text-center m-0 narrowBook s25"><span class="main-rose boldNarrow">Suscríbete</span> a nuestro boletin de noticias</h2>

                <div class="input-group mb-3 mt-3">
                    <form id="boletinForm" method="POST" action="{{url('boletines')}}">
                        @csrf
                        <div class="input-group">
                            <input name="email" type="email" class="form-control lightNarrow custom-email" placeholder="Escribe tu email aqui" aria-label="Email" aria-describedby="basic-addon2">
                            <div style="cursor: pointer;" class="input-group-append send-boletin">
                                <span class="input-group-text" id="basic-addon2"><i class="far fa-paper-plane"></i></span>
                            </div>

                        </div>
                        <div class="text-center">
                            <span class="pt-2 dn loading"><i class="fas fa-circle-notch fa-spin"></i> &nbsp;ENVIANDO...</span>
                        </div>
                    </form>
                </div>
                <div class="info-contacto d-flex flex-column">
                    <div class="item-contacto d-flex align-items-center pt-3 lightNarrow">
                        <div class="text-center">
                        <img src="{{asset('images/phone.png')}}" alt="Telefono">

                        </div>
                        52 477 123 45 67
                    </div>
                    <div class="item-contacto d-flex align-items-center pt-3 lightNarrow">
                        <div class="text-center">
                            <img src="{{asset('images/mail.png')}}" alt="Email">
                        </div>
                        contacto@vinotelia.com

                    </div>
                    <div class="item-contacto d-flex align-items-center pt-3 lightNarrow">
                        <img src="{{asset('images/marker.png')}}" alt="Geolocalizacion">
                        Direccion
                    </div>
                    <nav class="d-flex align-items-center navigation pt-3">
                        <a target="_blank" href="{{setting('site.facebook')}}"><img src="{{asset('images/fb.png')}}" alt="Facebook"></a>
                        <a target="_blank" href="{{setting('site.instagram')}}"><img src="{{asset('images/ins.png')}}" alt="Instagram"></a>
                        <a target="_blank" href="{{setting('site.twitter')}}"><img src="{{asset('images/tw.png')}}" alt="Twitter"></a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
