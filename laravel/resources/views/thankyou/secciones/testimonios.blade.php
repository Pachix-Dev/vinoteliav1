<section id="testimonios" class="pt-5 pb-5">
    <div class="container">
        <div class="row p-4">
            <div class="col-md-6">
                <img src="{{asset('images/banner-contacto.png')}}" alt="Contacto">
            </div>
            <div class="col-md-6">
                <h2 class="m-0 narrowBook s25"><span class="main-rose boldNarrow">GRACIAS</span> POR PONERTE EN CONTACTO CON NOSOTROS.</h2>


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
