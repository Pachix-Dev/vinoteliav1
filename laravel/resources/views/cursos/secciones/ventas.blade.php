<section class="pt-5 pb-5" id="formasDePago">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="contenido-kit">
                    <h1 class="s50 ln8 overlay-left narrowBook">QUE INCLUYE <span class="s50 ls5 boldNarrow main-rose"> <br>EL CURSO</span></h1>
                    <div class="kit-info">
                        {!! $curso->ventas->kit !!}
                    </div>
                </div>
            </div>
        </div>
        <div class="row pt-5 pb-5">
            <div class="col-sm-12 col-md-6 d-flex justify-content-center flex-column align-items-center">
                <h1 class="s18 ln8 overlay-left narrowBook">FORMAS DE <span class="s40 ls5 boldNarrow"> <br> PAGO</span></h1>
                <div class="pago-info">
                    {!! $curso->ventas->formas_pago !!}
                </div>
            </div>
            <div class="col-sm-12 col-md-6">
                <input id="cursoId" type="hidden" name="idCurso" value="{{$curso->id}}">
                <h1 style="background: {{$curso->color}}" class="ls5 text-light s20 p-2">Inscríbete</h1>
                <div id="form" @:curso='1'></div>
                  <p>
                    *Una vez realizado el pago, te pedimos enviarnos el comprobante escaneado o en foto
                    digital al correo <a href="mailto:vinosgto@gmail.com">vinosgto@gmail.com</a>, o si prefieres vía Whatsapp al número: <a href="https://wa.me/524791362304">479 136 23 04</a>
                  </p>
            </div>
        </div>
    </div>
</section>
