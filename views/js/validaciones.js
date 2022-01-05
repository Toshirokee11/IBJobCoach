const Carnet = document.querySelector("#CboID");
const TextCarnet = document.querySelector("#carnet");
const btnRuc = document.querySelector(".boton-ruc");
const valor = document.querySelector("#valor");
const rucEmpresa = document.querySelector('#rucEmpresa');

document.addEventListener("DOMContentLoaded", () => {
    Carnet.addEventListener("change", valorSelect);
    rucEmpresa.addEventListener('keyup', obtenerRucEmpresa)
});

function valorSelect(e) {
    if (e.target.value == 1) {
        TextCarnet.disabled = !1;
        TextCarnet.setAttribute("minlength", 8);
        TextCarnet.setAttribute("maxlength", 8);
        TextCarnet.setAttribute("title", "El Dni debe llevar solo 8 digitos y que sean Numeros");

        valor.value = 1; if (TextCarnet.classList.contains('rucExito')) {
            TextCarnet.classList.remove('rucExito')
        }
        if (TextCarnet.classList.contains('rucError')) {
            TextCarnet.classList.remove('rucError')
        }
    } else if (e.target.value == 2) {
        TextCarnet.disabled = !1; TextCarnet.setAttribute("minlength", 11); TextCarnet.setAttribute("maxlength", 11); TextCarnet.setAttribute("title", "El Ruc debe llevar solo 11 digitos y que sean Numeros"); TextCarnet.addEventListener("keyup", (i) => {
            $.ajax({
                type: "POST", url: "ajax/consultaRuc.ajax.php", data: "ruc=" + i.target.value, success: function (response) {
                    if (response == "error") {
                        if (i.target.classList.contains("rucExito")) { i.target.classList.remove("rucExito") }
                        i.target.classList.add("rucError")
                    }
                    if (response == "existe") {
                        if (i.target.classList.contains("rucError")) { i.target.classList.remove("rucError") }
                        i.target.classList.add("rucExito")
                    }
                },
            })
        }); valor.value = 2
    } else if (e.target.value == 3) {
        TextCarnet.disabled = !1; TextCarnet.setAttribute("minlength", 9); TextCarnet.setAttribute("maxlength", 9); TextCarnet.setAttribute("title", "El Carnet Extranjeria debe llevar solo 9 digitos y que sean Numeros"); if (TextCarnet.classList.contains('rucExito')) { TextCarnet.classList.remove('rucExito') }
        if (TextCarnet.classList.contains('rucError')) { TextCarnet.classList.remove('rucError') }
        valor.value = 3
    } else { TextCarnet.disabled = !0; valor.value = 0 }
}
function obtenerRucEmpresa(i) {
    $.ajax({
        type: "POST", 
        url: "ajax/consultaRuc.ajax.php", 
        data: "ruc=" + i.target.value, 
        success: function (response) {
            if (response == "error") {
                if (i.target.classList.contains("rucExito")) { 
                    i.target.classList.remove("rucExito") 
                }
                i.target.classList.add("rucError")
            }
            if (response == "existe") {
                if (i.target.classList.contains("rucError")) { 
                    i.target.classList.remove("rucError") 
                }
                i.target.classList.add("rucExito")
            }
        },
    })
}