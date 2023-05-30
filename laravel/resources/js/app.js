require('./bootstrap');
require('./jquery.paroller.min.js');

import swal from 'sweetalert';
// swal("Hello world!");


import Vue from 'vue';
import Form from './Form';
import Vuelidate from 'vuelidate';

Vue.config.productionTip = false;

Vue.use(Vuelidate);

/* eslint-disable no-new */
var curso = $("#cursoId").val();

new Vue({
    el: "#form",
    components: { Form },
    template: '<Form :curso="curso"/>',
    data: () => {
       return {
           curso:''
       }
    },
    mounted() {
        this.curso = curso;
    }
});



// deprecated version
(function ($) {
  $.fn.extend({
    size: function () {
      return $(this).length;
    }
  });
})(jQuery);

$(".paroller, [data-paroller-factor]").paroller({
    factor: 0.3,            // multiplier for scrolling speed and offset
    factorXs: 0.1,           // multiplier for scrolling speed and offset
    type: 'foreground',     // background, foreground
    direction: 'vertical', // vertical, horizontal

});

$(".paroller-horizontal, [data-paroller-factor]").paroller({
    factor: 0.3,            // multiplier for scrolling speed and offset
    factorXs: 0.1,           // multiplier for scrolling speed and offset
    type: 'foreground',     // background, foreground
    direction: 'horizontal', // vertical, horizontal

});

AOS.init();

$(".item-testimonio").on('click' , function(){
    var idTestimonio  = $(this).attr('data-testimonio');
    $('.item-testimonio').each(function(){
        $(this).css('width', '60px');
    });
    $(this).css('width' , 'inherit');


    console.log('testimonio' , idTestimonio);
    $(".testimonio-div").each(function(){

        if(idTestimonio !== $(this).attr('data-testimonio')){
            $(this).hide(500);
        }
    });
    $(`.testimonio-content${idTestimonio}`).show();



});

$("#boletinForm").submit(function(e){
    e.preventDefault();
    $(".loading").removeClass('dn');
    $("#txtBoletinEmail").attr('disabled', true);
    var dataString = $("#boletinForm").serialize();
    $.ajax({
        type: "POST",
        url: url + "/boletines",
        data: dataString,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
        $(".loading").addClass('dn');
        $("#txtBoletinEmail").val('');
        $("#txtBoletinEmail").removeAttr('disabled');


            if(data.msg){
                swal("Email enviado", `${data.msg}`, "success");
            }else{
                swal("Error al enviar", `${data.error}`, "error");
            }

        },error:function(error){
            $(".loading").hide();
            console.log(error);
        }
    });
});


$(".send-boletin").on('click' , (e) =>{
    var dataString = $("#boletinForm").serialize();
    $.ajax({
        type: "POST",
        url: url + "/boletines",
        data: dataString,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {
            if(data.msg){
                swal("Email enviado", `${data.msg}`, "success");
                window.location.href = url + '/thank-you';
            }else{
                swal("Error al enviar tu email", `${data.error}`, "error");
            }

        },error:function(error){
            console.log(error);
        }
    });
});
