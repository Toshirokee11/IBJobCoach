// NAVEGACION PRINCIPAL
// Sticky navbar
// =========================
$(document).ready(function () {
  // Custom function which toggles between sticky class (is-sticky)
  var stickyToggle = function (sticky, stickyWrapper, scrollElement) {
      var stickyHeight = sticky.outerHeight();
      var stickyTop = stickyWrapper.offset().top;
      if (scrollElement.scrollTop() >= stickyTop) {
          stickyWrapper.height(stickyHeight);
          sticky.addClass("is-sticky");
      }
      else {
          sticky.removeClass("is-sticky");
          stickyWrapper.height('auto');
      }
  };

  // Find all data-toggle="sticky-onscroll" elements
  $('[data-toggle="sticky-onscroll"]').each(function () {
      var sticky = $(this);
      var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
      sticky.before(stickyWrapper);
      sticky.addClass('sticky');

      // Scroll & resize events
      $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function () {
          stickyToggle(sticky, stickyWrapper, $(this));
      });

      // On page load
      stickyToggle(sticky, stickyWrapper, $(window));
  });
});
// FIN NAVEGACION PRINCIPAL



$(document).ready(function () {
  /*EFECTO PARA EL MENU */

  $("#menu").click(function (e) {
    e.preventDefault();
    $("#dropdown").toggleClass("active");
  });

  //ARREGLO DE BUGS DE MODALS
  $(".modal").on("shown.bs.modal", function (e) {
    $("body").addClass("modal-open");
  });

  $(document).on("click", "#btn_form_registro", function () {
    $(".login__register").addClass("show_register");
    $(".login__login").addClass("show_login");
  });
  $(document).on("click", "#btn_form_loguear", function () {
    $(".login__register").removeClass("show_register");
    $(".login__login").removeClass("show_login");
  });
});
//SELECTS DE LA VISTA PRECIOS
$(document).ready(function () {
  $(document).on("change", "#cargos", function () {
    var cargos = $(this).val();

    var p =
      "Según estudios, lo que te demoras en conseguir la recolocación laboral está directamente relacionado con" +
      " la pirámide laboral. Entre más arriba de la pirámide te encuentres, habrán menos cargos disponibles en el mercado, por lo que la oferta laboral será más baja. " +
      "Así mismo, entre más abajo de la pirámide estés, mayor es la oferta laboral.Por lo tanto, el tiempo de recomendación de la herramienta IBvirtual, dependerá únicamente" +
      " del cargo que tienes.";

    var de =
      'A un <span class="nomcargo">' +
      cargos +
      '</span> le toma en promedio <span class="nmes">';

    var ple =
      "</span> encontrar trabajo con un programa de Outplacement. Es por esto que, te recomendamos dos meses de licencia IBvirtual para que perfecciones tus herramientas y" +
      " estés mejor preparado a la hora de buscar empleo.";

    if (cargos == "Operarios") {
      $("#prueba_mes").html(
        '<input type="hidden" id="mes_combobox_posicion" value="60000"><input id="mes" name ="mes" type="text" class="form-control form__precios mes_cargo" placeholder="1 Mes" disabled="disabled" >'
      );

      $("#contenedor_combobox_posicion").html(
        '  <select id="posicion" class="form-control form__precios custom-select select-meses"><option selected="selected" value="">Seleccione un pais</option><option value="usa">estados unidos </option><option value="españa">españa </option><option value="colombia">Colombia </option><option value="mexico">mexico </option><option value="bolivia">Bolivia </option><option value="argentina">Argentina </option><option value="uruguay">Uruguary </option><option value="panama">Panamá </option><option value="chile">Chile</option><option value="peru">Perú </option></select>'
      );

      $("#precios").html(
        '<input id="precio_cargo" name="precio_argo" type="text" class="form-control form__precios valor_cargo" placeholder="$ 60.000 / mes" disabled="disabled">'
      );
      $("#descripcion-cargo").html(de + "1 mes" + ple);
      $("#suscrip").html(
        '<input class="boton-siguiente" type="button" id="suscripcion" value="Siguiente"><br/><br/>'
      );
    } else if (cargos == "Analista") {
      $("#prueba_mes").html(
        '<input type="hidden" id="mes_combobox_posicion" value="60000"><input id="mes" name="mes" type="text" class="form-control form__precios mes_cargo" placeholder="2 Mes" disabled="disabled">'
      );
      $("#precios").html =
        '<input id="precio_cargo" name="precio_argo" type="text" class="form-control form__precios valor_cargo" placeholder="$ 54.000 / mes" disabled="disabled">';
      $("#descripcion-cargo").html(de + "2 meses" + ple);
      $("#suscrip").html(
        '<input class="boton-siguiente" type="button" id="suscripcion" value="Siguiente"><br/><br/>'
      );
      $("#contenedor_combobox_posicion").html(
        '  <select id="posicion" class="form-control form__precios custom-select select-meses"><option selected="selected" value="">Seleccione un pais</option><option value="usa">estados unidos </option><option value="españa">españa </option><option value="colombia">Colombia </option><option value="mexico">mexico </option><option value="bolivia">Bolivia </option><option value="argentina">Argentina </option><option value="uruguay">Uruguary </option><option value="panama">Panamá </option><option value="chile">Chile</option><option value="peru">Perú </option></select>'
      );
    } else if (cargos == "Jefe") {
      $("#prueba_mes").html(
        '<input type="hidden" id="mes_combobox_posicion" value="48000"><input id="mes" name="mes" type="text" class="form-control form__precios mes_cargo" placeholder="3 Mes" disabled="disabled">'
      );
      $("#precios").html(
        '<input id="precio_cargo" name="precio_argo" type="text" class="form-control form__precios valor_cargo" placeholder="$ 48.000 / mes" disabled="disabled">'
      );
      $("#descripcion-cargo").html(de + "3 meses" + ple);
      $("#suscrip").html(
        '<input class="boton-siguiente" type="button" id="suscripcion" value="Siguiente"><br/><br/>'
      );
      $("#contenedor_combobox_posicion").html(
        '  <select id="posicion" class="form-control form__precios custom-select select-meses"><option selected="selected" value="">Seleccione un pais</option><option value="usa">estados unidos </option><option value="españa">españa </option><option value="colombia">Colombia </option><option value="mexico">mexico </option><option value="bolivia">Bolivia </option><option value="argentina">Argentina </option><option value="uruguay">Uruguary </option><option value="panama">Panamá </option><option value="chile">Chile</option><option value="peru">Perú </option></select>'
      );
    } else if (cargos == "Subgerente") {
      $("#prueba_mes").html(
        '<input type="hidden" id="mes_combobox_posicion" value="43000"><input id="mes" name="mes" type="text" class="form-control form__precios mes_cargo" placeholder="4 Mes" disabled="disabled">'
      );
      $("#precios").html(
        '<input id="precio_cargo" name="precio_argo" type="text" class="form-control form__precios valor_cargo" placeholder="$ 43.000 / mes" disabled="disabled">'
      );
      $("#descripcion-cargo").html(de + "4 meses" + ple);
      $("#suscrip").html(
        '<input class="boton-siguiente" type="button" id="suscripcion" value="Siguiente"><br/><br/>'
      );
      $("#contenedor_combobox_posicion").html(
        '  <select id="posicion" class="form-control form__precios custom-select select-meses"><option selected="selected" value="">Seleccione un pais</option><option value="usa">estados unidos </option><option value="españa">españa </option><option value="colombia">Colombia </option><option value="mexico">mexico </option><option value="bolivia">Bolivia </option><option value="argentina">Argentina </option><option value="uruguay">Uruguary </option><option value="panama">Panamá </option><option value="chile">Chile</option><option value="peru">Perú </option></select>'
      );
    } else if (cargos == "Gerente") {
      $("#prueba_mes").html(
        '<input type="hidden" id="mes_combobox_posicion" value="39000"><input id="mes" name="mes" type="text" class="form-control form__precios mes_cargo" placeholder="5 Mes" disabled="disabled">'
      );
      $("#precios").html(
        '<input id="precio_cargo" name="precio_argo" type="text" class="form-control form__precios valor_cargo" placeholder="$ 39.000 / mes" disabled="disabled">'
      );
      $("#descripcion-cargo").html(de + "5 meses" + ple);
      $("#suscrip").html(
        '<input class="boton-siguiente" type="button" id="suscripcion" value="Siguiente"><br/>'
      );
      $("#contenedor_combobox_posicion").html(
        '  <select id="posicion" class="form-control form__precios custom-select select-meses"><option selected="selected" value="">Seleccione un pais</option><option value="usa">estados unidos </option><option value="españa">españa </option><option value="colombia">Colombia </option><option value="mexico">mexico </option><option value="bolivia">Bolivia </option><option value="argentina">Argentina </option><option value="uruguay">Uruguary </option><option value="panama">Panamá </option><option value="chile">Chile</option><option value="peru">Perú </option></select>'
      );
    } else {
      $("#prueba_mes").html(
        '<input id="mes" name="mes" type="text" class="form-control form__precios mes_cargo" placeholder="Numeró de Meses" disabled="disabled">'
      );
      $("#precios").html(
        '<input id="precio_cargo" name="precio_argo" type="text" class="form-control form__precios valor_cargo" placeholder="Valor / Mes" disabled="disabled">'
      );
      $("#descripcion-cargo").html(p);
      $("#suscrip").html(
        '<input class="boton-siguiente" type="button" id="suscripcion" value="Siguiente" style="display: none;"><br/>'
      );
      $("#contenedor_combobox_posicion").html(
        '  <select id="posicion" class="form-control form__precios custom-select select-meses"><option selected="selected" value="">Seleccione un pais</option><option value="usa">estados unidos </option><option value="españa">españa </option><option value="colombia">Colombia </option><option value="mexico">mexico </option><option value="bolivia">Bolivia </option><option value="argentina">Argentina </option><option value="uruguay">Uruguary </option><option value="panama">Panamá </option><option value="chile">Chile</option><option value="peru">Perú </option></select>'
      );
    }
  });

  $(document).on("change", "#posicion", function () {
    var paises = $(this).val();
    var precio = $("#mes_combobox_posicion").val();

    if (paises == "usa") {
      var calculo = precio * 1;
      $("#precio_cargo").val("$" + Math.round(calculo));
    }

    if (paises == "españa") {
      var calculo = precio * 0.24;
      $("#precio_cargo").val("£" + Math.round(calculo));
    }

    if (paises == "colombia") {
      var calculo = precio * 19.85;
      $("#precio_cargo").val("COL$/" + Math.round(calculo));
    }

    if (paises == "mexico") {
      var calculo = precio * 19.85;
      $("#precio_cargo").val("¢/" + Math.round(calculo));
    }

    if (paises == "bolivia") {
      var calculo = precio * 6.83;
      $("#precio_cargo").val("Bs/" + Math.round(calculo));
    }

    if (paises == "argentina") {
      var calculo = precio * 98.25;
      $("#precio_cargo").val("$" + Math.round(calculo));
    }

    if (paises == "uruguay") {
      var calculo = precio * 42.75;
      $("#precio_cargo").val("$" + Math.round(calculo));
    }

    if (paises == "panama") {
      var calculo = precio * 1.0;
      $("#precio_cargo").val(" PAB/" + Math.round(calculo));
    }

    if (paises == "chile") {
      var calculo = precio * 778.05;
      $("#precio_cargo").val("£" + Math.round(calculo));
    }

    if (paises == "peru") {
      var calculo = precio * 4.11;
      $("#precio_cargo").val("S/." + Math.round(calculo));
    }
  });
  $(document).on("click", "#suscripcion", function () {
    $("#collapseFormulario").removeClass("collapse");
  });
  $(document).on("click", "#suscripciones", function () {
    $("#collapseFormulario1").removeClass("collapse");
  });

  $(document).on("change", "#meses", function () {
    var meses = $(this).val();

    if (meses == "uno") {
      $("#cargosm").html(
        '<input type="hidden" id="mes_combobox_precio" value="60000"><input value= "$/.60000" id="precio_cargos" name="precio_cargos" type="text" class="form-control form__precios valor_cargos" placeholder="$ 60.000 / mes" disabled="disabled">'
      );
      $("#suscription").html(
        '   <input class="boton-siguiente" type="button" id="suscripciones" value="Siguiente"><br />'
      );
      $("#contenedor_combobox_paises").html(
        '  <select id="paises" class="form-control form__precios custom-select select-meses"><option selected="selected" value="">Seleccione un pais</option><option value="usa">estados unidos </option><option value="españa">españa </option><option value="colombia">Colombia </option><option value="mexico">mexico </option><option value="bolivia">Bolivia </option><option value="argentina">Argentina </option><option value="uruguay">Uruguary </option><option value="panama">Panamá </option><option value="chile">Chile</option><option value="peru">Perú </option></select>'
      );
    } else if (meses == "dos") {
      $("#cargosm").html(
        '<input type="hidden" id="mes_combobox_precio" value="54000"><input value= "$/.54000" id="precio_cargos" name="precio_cargos" type="text" class="form-control form__precios valor_cargos" placeholder="$ 54.000 / mes" disabled="disabled">'
      );
      $("#suscription").html(
        '   <input class="boton-siguiente" type="button" id="suscripciones" value="Siguiente"><br />'
      );
      $("#contenedor_combobox_paises").html(
        '  <select id="paises" class="form-control form__precios custom-select select-meses"><option selected="selected" value="">Seleccione un pais</option><option value="usa">estados unidos </option><option value="españa">españa </option><option value="colombia">Colombia </option><option value="mexico">mexico </option><option value="bolivia">Bolivia </option><option value="argentina">Argentina </option><option value="uruguay">Uruguary </option><option value="panama">Panamá </option><option value="chile">Chile</option><option value="peru">Perú </option></select>'
      );
    } else if (meses == "tres") {
      $("#cargosm").html(
        '<input type="hidden" id="mes_combobox_precio" value="48000"><input value= "$/.48000" id="precio_cargos" name="precio_cargos" type="text" class="form-control form__precios valor_cargos" placeholder="$ 48.000 / mes" disabled="disabled">'
      );
      $("#suscription").html(
        '   <input class="boton-siguiente" type="button" id="suscripciones" value="Siguiente"><br />'
      );
      $("#contenedor_combobox_paises").html(
        '  <select id="paises" class="form-control form__precios custom-select select-meses"><option selected="selected" value="">Seleccione un pais</option><option value="usa">estados unidos </option><option value="españa">españa </option><option value="colombia">Colombia </option><option value="mexico">mexico </option><option value="bolivia">Bolivia </option><option value="argentina">Argentina </option><option value="uruguay">Uruguary </option><option value="panama">Panamá </option><option value="chile">Chile</option><option value="peru">Perú </option></select>'
      );
    } else if (meses == "cuatro") {
      $("#cargosm").html(
        '<input type="hidden" id="mes_combobox_precio" value="43000"><input value= "$/.43000" id="precio_cargos" name="precio_cargos" type="text" class="form-control form__precios valor_cargos" placeholder="$ 43.000 / mes" disabled="disabled">'
      );
      $("#suscription").html(
        '   <input class="boton-siguiente" type="button" id="suscripciones" value="Siguiente"><br />'
      );
      $("#contenedor_combobox_paises").html(
        '  <select id="paises" class="form-control form__precios custom-select select-meses"><option selected="selected" value="">Seleccione un pais</option><option value="usa">estados unidos </option><option value="españa">españa </option><option value="colombia">Colombia </option><option value="mexico">mexico </option><option value="bolivia">Bolivia </option><option value="argentina">Argentina </option><option value="uruguay">Uruguary </option><option value="panama">Panamá </option><option value="chile">Chile</option><option value="peru">Perú </option></select>'
      );
    } else if (meses == "cinco") {
      $("#cargosm").html(
        '<input type="hidden" id="mes_combobox_precio" value="39000"><input value="$/.39000" id="precio_cargos" name="precio_cargos" type="text" class="form-control form__precios valor_cargos" placeholder="$ 39.000 / mes" disabled="disabled">'
      );
      $("#suscription").html(
        '   <input class="boton-siguiente" type="button" id="suscripciones" value="Siguiente"><br />'
      );
      $("#contenedor_combobox_paises").html(
        '  <select id="paises" class="form-control form__precios custom-select select-meses"><option selected="selected" value="">Seleccione un pais</option><option value="usa">estados unidos </option><option value="españa">españa </option><option value="colombia">Colombia </option><option value="mexico">mexico </option><option value="bolivia">Bolivia </option><option value="argentina">Argentina </option><option value="uruguay">Uruguary </option><option value="panama">Panamá </option><option value="chile">Chile</option><option value="peru">Perú </option></select>'
      );
    } else if (meses == "seis") {
      $("#cargosm").html(
        '<input type="hidden" id="mes_combobox_precio" value="35000"><input  value="$/.35000" id="precio_cargos" name="precio_cargos" type="text" class="form-control form__precios valor_cargos" placeholder="$ 35.000 / mes" disabled="disabled">'
      );
      $("#suscription").html(
        '   <input class="boton-siguiente" type="button" id="suscripciones" value="Siguiente"><br />'
      );
      $("#contenedor_combobox_paises").html(
        '  <select id="paises" class="form-control form__precios custom-select select-meses"><option selected="selected" value="">Seleccione un pais</option><option value="usa">estados unidos </option><option value="españa">españa </option><option value="colombia">Colombia </option><option value="mexico">mexico </option><option value="bolivia">Bolivia </option><option value="argentina">Argentina </option><option value="uruguay">Uruguary </option><option value="panama">Panamá </option><option value="chile">Chile</option><option value="peru">Perú </option></select>'
      );
    } else if (meses == "siete") {
      $("#cargosm").html(
        '<input type="hidden" id="mes_combobox_precio" value="30000"><input  value="$/.30000" id="precio_cargos" name="precio_cargos" type="text" class="form-control form__precios valor_cargos" placeholder="$ 30.000 / mes" disabled="disabled">'
      );
      $("#suscription").html(
        '   <input class="boton-siguiente" type="button" id="suscripciones" value="Siguiente"><br />'
      );
      $("#contenedor_combobox_paises").html(
        '  <select id="paises" class="form-control form__precios custom-select select-meses"><option selected="selected" value="">Seleccione un pais</option><option value="usa">estados unidos </option><option value="españa">españa </option><option value="colombia">Colombia </option><option value="mexico">mexico </option><option value="bolivia">Bolivia </option><option value="argentina">Argentina </option><option value="uruguay">Uruguary </option><option value="panama">Panamá </option><option value="chile">Chile</option><option value="peru">Perú </option></select>'
      );
    } else if (meses == "ocho") {
      $("#cargosm").html(
        '<input type="hidden" id="mes_combobox_precio" value="28000"><input value="$/.28000"  id="precio_cargos" name="precio_cargos" type="text" class="form-control form__precios valor_cargos" placeholder="$ 28.000 / mes" disabled="disabled">'
      );
      $("#suscription").html(
        '   <input class="boton-siguiente" type="button" id="suscripciones" value="Siguiente"><br />'
      );
      $("#contenedor_combobox_paises").html(
        '  <select id="paises" class="form-control form__precios custom-select select-meses"><option selected="selected" value="">Seleccione un pais</option><option value="usa">estados unidos </option><option value="españa">españa </option><option value="colombia">Colombia </option><option value="mexico">mexico </option><option value="bolivia">Bolivia </option><option value="argentina">Argentina </option><option value="uruguay">Uruguary </option><option value="panama">Panamá </option><option value="chile">Chile</option><option value="peru">Perú </option></select>'
      );
    } else {
      $("#cargosm").html(
        '<input id="precio_cargos" name="precio_cargos" type="text" class="form-control form__precios valor_cargos" placeholder="Valor / Mes" disabled="disabled">'
      );
      $("#suscription").html(
        '<input class="boton-siguiente" type="button" id="suscripciones" value="Siguiente"><br />'
      );
      $("#contenedor_combobox_paises").html(
        '  <select id="paises" class="form-control form__precios custom-select select-meses"><option selected="selected" value="">Seleccione un pais</option><option value="usa">estados unidos </option><option value="españa">españa </option><option value="colombia">Colombia </option><option value="mexico">mexico </option><option value="bolivia">Bolivia </option><option value="argentina">Argentina </option><option value="uruguay">Uruguary </option><option value="panama">Panamá </option><option value="chile">Chile</option><option value="peru">Perú </option></select>'
      );
    }
  });

  /* MES 1 */
  $(document).on("change", "#paises", function () {
    var paises = $(this).val();
    var precio = $("#mes_combobox_precio").val();
    if (paises == "usa") {
      var calculo = precio * 1;
      $("#precio_cargos").val("$/" + Math.round(calculo));
    }

    if (paises == "españa") {
      var calculo = precio * 0.24;
      $("#precio_cargos").val("£/" + Math.round(calculo));
    }

    if (paises == "colombia") {
      var calculo = precio * 19.85;
      $("#precio_cargos").val("COL$/" + Math.round(calculo));
    }

    if (paises == "mexico") {
      var calculo = precio * 19.85;
      $("#precio_cargos").val("¢/" + Math.round(calculo));
    }

    if (paises == "bolivia") {
      var calculo = precio * 6.83;
      $("#precio_cargos").val("Bs/" + Math.round(calculo));
    }

    if (paises == "argentina") {
      var calculo = precio * 98.25;
      $("#precio_cargos").val("$/" + Math.round(calculo));
    }

    if (paises == "uruguay") {
      var calculo = precio * 42.75;
      $("#precio_cargos").val("$/" + Math.round(calculo));
    }

    if (paises == "panama") {
      var calculo = precio * 1.0;
      $("#precio_cargos").val(" PAB/" + Math.round(calculo));
    }

    if (paises == "chile") {
      var calculo = precio * 778.05;
      $("#precio_cargos").val("£/" + Math.round(calculo));
    }

    if (paises == "peru") {
      var calculo = precio * 4.11;
      $("#precio_cargos").val("S/" + Math.round(calculo));
    }
  });
  $(document).on("click", "#suscripcion", function () {
    $("#collapseFormulario").removeClass("collapse");
  });
  $(document).on("click", "#suscripciones", function () {
    $("#collapseFormulario1").removeClass("collapse");
  });
});



$('#PruebaGratuita').on('submit','#PruebaGratuita1', function(event){
  event.preventDefault();
  var $form = $(this);
  $.ajax({
    url    :$form.attr('action'),
    type   :$form.attr('method'),
    data   :$form.serialize(),
    beforesend: function() {
    },
    success: function(response){
      swal(response);
      document.getElementById('PruebaGratuita1').reset();
    }
  })
});

$('#contacto').on('submit', '#contactoempresa',function(event){
  event.preventDefault();
  var $form = $(this);
  $.ajax({
    url    :$form.attr('action'),
    type   :$form.attr('method'),
    data   :$form.serialize(),
    beforesend: function(){
    },
    success: function(response){
      swal(response);
      $('#contacto').modal('hide');
      document.getElementById('contactoempresa').reset();

    }
  })
})


