<section id="testimonios" class="pt-5 pb-5">
    <div class="container">
        <div class="row p-4">
            <div class="col-md-6">
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
                <div data-testimonio="{{$testimonio->id}}" class="testimonio-div testimonio-content{{$testimonio->id}}" style="{{($count == 0 ? '' : 'display:none;')}}">

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
                    @php
                        $count = 0;
                    @endphp
                    @foreach($testimonios as $testimonio)
                        <div data-testimonio="{{$testimonio->id}}" class="item item-testimonio  p-2" style="{{($count == 0 ? '' : 'width:60px')}}"><img src="{{asset('images/male.png')}}" alt="Testimonio"></div>
                        @php
                            $count++;
                        @endphp
                    @endforeach
                </div>
            </div>
            <div class="col-md-6">
                <h2 class="m-0 narrowBook s25"><span class="main-rose boldNarrow">Suscríbete</span> a nuestro boletín de noticias</h2>

                <div class="input-group mb-3 pt-5">
                <form id="boletinForm" style="width: 80%;" method="POST" action="{{url('boletines')}}">
                    @csrf
                    <div class="input-group">
                        <input name="email" type="email" class="form-control lightNarrow custom-email" placeholder="Escribe tu email aqui" aria-label="Email" id="txtBoletinEmail" aria-describedby="basic-addon2">
                        <div style="cursor: pointer;" class="input-group-append send-boletin">
                            <span class="input-group-text" id="basic-addon2"><i class="far fa-paper-plane"></i></span>
                        </div>

                    </div>
                    <div class="pt-3">
                        <span class="pt-2 dn loading"><i class="fas fa-circle-notch fa-spin"></i> &nbsp;ENVIANDO...</span>
                    </div>

                </form>

                </div>
                <div class="info-contacto d-flex flex-column">
                    <div class="item-contacto d-flex align-items-center pt-3 lightNarrow">
                        <div class="text-center">
                            <img src="{{asset('images/phone.png')}}" alt="Teléfono">
                        </div>
                        <a href="tel:{{setting('site.telefono')}}">
                            {{setting('site.telefono')}}
                        </a>
                    </div>
                    <div class="item-contacto d-flex align-items-center pt-3 lightNarrow">
                        <div class="text-center">
                            <img src="{{asset('images/mail.png')}}" alt="Email">
                        </div>
                            <a target="_blank" href="mailto:{{setting('site.correo')}}">
                                {{setting('site.correo')}}
                            </a>
                    </div>
                    <div class="item-contacto d-flex align-items-center pt-3 lightNarrow">
                        <img src="{{asset('images/marker.png')}}" alt="Geolocalizacion">
                        Dirección {{setting('site.principal')}}
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
