<template>
      <form id="frm-contacto" @submit.prevent="submit">

        <div class="form-group">
            <input type="text" class="form-control custom-email" :class="{ 'is-invalid': $v.form.name.$invalid }"  v-on:click="clickE($v.form.name)" placeholder="Nombre del alumno*" v-model="form.name">
            <small class="text-danger" v-if="!$v.form.name.required">*Campo requerido</small>
            <small class="text-danger" v-if="!$v.form.name.min">*Campo debe tener al menos {{$v.form.name.$params.min.min}} caracteres</small>
        </div>
        <div class="form-group">
            <input type="text" class="form-control custom-email" :class="{ 'is-invalid': $v.form.email.$invalid }"  v-on:click="clickE($v.form.email)" placeholder="Email*" v-model="form.email">
            <small class="text-danger" v-if="!$v.form.email.required">*Campo requerido</small>
            <small class="text-danger" v-if="$v.form.email.$invalid">*Email inválido</small>
        </div>
        <div class="form-group">
            <input type="text" class="form-control custom-email" :class="{ 'is-invalid': $v.form.phone.$invalid }"  v-on:click="clickE($v.form.phone)" placeholder="Teléfono*" v-model="form.phone">
            <small class="text-danger" v-if="!$v.form.phone.required">*Campo requerido</small>
            <small class="text-danger" v-if="$v.form.phone.$invalid">*Teléfono inválido</small>
        </div>
        <div class="form-group">
            <input type="text" class="form-control custom-email" :class="{ 'is-invalid': $v.form.edad.$invalid }" v-on:click="clickE($v.form.edad)" placeholder="Edad del alumno"  v-model="form.edad">
            <small class="text-danger" v-if="!$v.form.edad.required">*Campo requerido</small>
            <small class="text-danger" v-if="!$v.form.edad.numeric">*Sólo se permiten números</small>
        </div>
        <div class="form-group">
          <input type="text" class="form-control custom-email" :class="{ 'is-invalid': $v.form.direccion.$invalid }" v-on:click="clickE($v.form.direccion)" placeholder="Dirección" v-model="form.direccion">
          <small class="text-danger" v-if="!$v.form.direccion.required">*Campo requerido</small>
          <small class="text-danger" v-if="!$v.form.direccion.min">*Campo debe tener al menos {{$v.form.direccion.$params.min.min}} caracteres</small>
        </div>
        <div class="form-group">
            <textarea name="txtComo" class="form-control custom-email" id="txtComo" placeholder="¿Cómo te enteraste de nosotros?" v-model="form.como"></textarea>
        </div>
        <div class="form-group">
            <button class="btn btn-dark text-light form-custom" type="submit">ENVIAR<i class="far fa-paper-plane"></i></button>
        </div>
    </form>

</template>
<script>
import { required, email, minLength, numeric } from "vuelidate/lib/validators";

export default {
  name: "FormComponent",
  props: ["curso"],
  data() {
    return {
      form: {
        name: "",
        edad: null,
        direccion: "",
        como: "",
        email: "",
        phone: ""
      },
    };
  },

  validations: {
    form: {
      name: { required, min: minLength(10) },
      edad: { required, numeric },
      direccion: { required, min:minLength(5)},
      email: { required, email},
      phone: { required, numeric},
    }
  },

  methods: {
    submit() {
      this.$v.form.$touch();
      if(this.$v.form.$error){
        return;
      }
      // to form submit after this
      const somehowGlobalVariable = 'https://vinotelia.com.mx/';


      let data = new FormData();
      let info = null;
      let url  = somehowGlobalVariable + 'inscripcion';

      axios
      .post(url,{
          txtNombre: this.form.name ,
          txtEdad:this.form.edad ,
          txtComo: this.form.como,
          txtEmail: this.form.email,
          txtPhone: this.form.phone,
          idCurso:this.curso,
          txtDireccion:this.form.direccion})
      .then((response) => {
          swal("Mensaje enviado", "Gracias por ponerte en contacto con nosotros", "success");
          window.location.href = somehowGlobalVariable + 'thank-you';

      }).catch(error => {
          console.log(error.response.data);
      });

    },
    clickE(data){
      if(data.$error){
        return false;
      }
      return;
    }
  }
};
</script>
