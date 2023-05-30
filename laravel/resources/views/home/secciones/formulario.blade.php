<section id="contacto" class="pt-5 pb-5">

  <div class="container">
    <div class="text-center"><h2>FORMULARIO</h2></div>
    <div class="text-center">
      <strong>FORMULARIO SANITIZADO</strong>
    </div>
    <form id="frm-contacto" method="post" action="{{url('/')}}/contacto">
      @csrf
      <div class="form-group">
        <label for="txtNombre">Nombre</label>
        <input type="text" class="form-control validate[required, custom[onlyLetterNumber]]" id="txtNombre" name="txtNombre" placeholder="Nombre">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="txtEmail">Email</label>
          <input type="email" class="form-control" id="txtEmail" name="txtEmail">
        </div>
        <div class="form-group col-md-6">
          <label for="txtPassword">Password</label>
          <input type="password" class="form-control" id="txtPassword">
        </div>
      </div>
      <div class="form-group">
        <label for="txtTelefono">Teléfono</label>
        <input type="text" class="form-control validate[required, custom[phone]]" id="txtTelefono" name="txtTelefono" placeholder="(477) 11 22 333">
      </div>
      <div class="form-row">

        <div class="form-group col-md-6">
          <label for="txtEstado">Estado</label>
          <select id="txtEstado" class="validate[required] form-control estado" name="txtEstado">
            @foreach($estados as $estado)
            <option data-id="{{$estado->id}}" value="{{$estado->nombre}}">{{$estado->nombre}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group col-md-6">
          <label for="txtCiudad">Ciudad</label>
          <select id="txtCiudad" class="form-control ciudad">

          </select>
        </div>
        <div class="form-group col-md-12">
          <label for="txtNosotros">¿Cómo te enteraste de nosotros?</label>
          <select class="form-control contactoNosotros validate[required]" id="txtNosotros" name="txtNosotros">
            <option value="Los encontré en Internet">Los encontré en Internet</option>
            <option value="Por recomendación">Por recomendación</option>
            <option value="Los vi en un anuncio de Internet">Los vi en un anuncio de Internet</option>
            <option value="Otro">Otro</option>
          </select>

        </div>
      </div>
      <div class="form-group">
        <input type="text" class="dn form-control" id="txtOtro" name="txtOtro" placeholder="Por favor, escribe donde nos conociste.">
      </div>
      <div class="form-group">
        <textarea name="txtComentario" class="form-control" rows="8" cols="80" placeholder="Comentario"></textarea>
      </div>
      <!-- <div class="form-group">
      <div class="form-check">
      <input class="form-check-input validate[minCheckbox[1]]" type="checkbox" id="gridCheck" value="accept">
      <label class="form-check-label" for="gridCheck">
      Acepto políticas de uso de datos.
    </label>
  </div>
</div> -->
<button id="btnSubmit" type="submit" class="btn btn-primary">Enviar</button>
<span class="co loading dn"><i class="fas fa-spinner fa-spin"></i> &nbsp;ENVIANDO...</span>
<div class="msg"></div>
</form>
</div>
<script type="text/javascript">


function optionSelected (option) {
  if (option.selected) {
    if(option.id === 'Otro'){
      $("#txtOtro").show(500);
      $("#txtOtro").addClass('validate[required]');
    }else{
      $("#txtOtro").hide(500);
      $("#txtOtro").removeClass('validate[required]');

    }
    return option.text;
  }
};

function buscarCiudades(id){
  $.ajax({
    type: "POST",
    url: url + "/ciudades",
    data: {'id' : id},
    headers: {
      'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content'),
      'X-Requested-With':'XMLHttpRequest'
    },
    success: function (data) {
      $("#txtCiudad").html(data);
    },
    error: function(e){
      console.log("Error en ajax request: ",e);
    }
  });
}

$('.ciudad').select2();
$('.contactoNosotros').select2({
  templateSelection: optionSelected
});

$('.estado').select2({
  templateSelection:function(data,container){
    // $(data.element).attr('data-id', data.customValue);
    buscarCiudades($(data.element).attr('data-id'));
    return data.text;
  }
});

function optionSelected (option) {
  if (option.selected) {
    if(option.id === 'Otro'){
      $("#txtOtro").show(500);
      $("#txtOtro").addClass('validate[required]');
    }else{
      $("#txtOtro").hide(500);
      $("#txtOtro").removeClass('validate[required]');

    }
    return option.text;
  }
};

ajaxValidationCallback = function(status, form, json, options) {
  if (window.console) {
    console.log(status);
  }
  if (status === true) {

    $('#btnSubmit').hide(500);
    $(".loading").addClass('dn');
    $(".msg").removeClass('dn');
    $(".msg").html(json.msg);
    $(".msg").css({"color" : "black"});

  }else{
    $('#btnSubmit').show(500);
    $(".loading").addClass('dn');
    $(".msg").removeClass('dn');
    $(".msg").html(json.error);
    $(".msg").css({"color" : "red"});

  }
  return false;
};

var validateForm = function() {
  jQuery("#frm-contacto").validationEngine('attach',{
    ajaxFormValidation: true,
    ajaxFormValidationMethod: 'post',
    onAjaxFormComplete: ajaxValidationCallback,
    onFailure: function(status, form, json, options){
      console.log("status:" , status);
      console.log("form:" , form);
      console.log("json:" , json);
      console.log("option:" , options);
    }
  });
  return false;
};
validateForm();
</script>
</section>
