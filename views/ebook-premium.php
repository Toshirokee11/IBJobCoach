<?php

// echo "<script>
//     document.addEventListener('DOMContentLoaded',()=>{
//         Swal.fire({
//             icon: 'warning',
//             title: 'Opps!!',
//             text: 'Por ahora esta pagina esta en Mantenimiento.',
//             confirmButtonText: `Ok`
//         }).then((result) => {
//             if (result.isConfirmed) {
//                 window.location.href = 'http://ibjobcoach.com/';
//             }else{
//                 window.location.href = 'http://ibjobcoach.com/';
//             }
//         })
//     })
// </script>";

$token = 'apis-token-1.aTSI1U7KEuT-6bbbCguH-4Y8TI6KS73N';
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://api.apis.net.pe/v1/tipo-cambio-sunat',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 2,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'GET',
    CURLOPT_HTTPHEADER => array(
        'Referer: https://apis.net.pe/tipo-de-cambio-sunat-api',
        'Authorization: Bearer ' . $token
    ),
));

$response = curl_exec($curl);

curl_close($curl);

$dolar = json_decode($response, true);

$costoSol = 29.99 / $dolar["venta"];

$costo = round($costoSol, 2);
?>
<div class="ebook-a ebook-display">
        <div class="justify-content-center" style="position: relative;top: 0;left: 0;">
            <div class="form-block text-center">
                <div class="row" id="descargar">
                    <div class="col-md-12 justify-content-center" id="contenedor">
                        <p class="text-form">Descargar eBook</p>
                        <p class="text-white mb-0 text-center h5">Pagar para obtener tu Ibook <a id="abrir" class="text-warning">Click Aquí</a></p>
                        <br>
                        <form method="post" id="ebookform-paypal" enctype="multipart/form-data">
                            <div class="form-group row" style="max-width: 500px;">
                                <input type="text" name="nombre" class="form-control col-6" id="nombre" placeholder="  NOMBRE">
                                <input type="text" name="apellido" class="form-control col-6" id="apellido" placeholder="  APELLIDO">
                                <select name="tipo" id="tipo" class="form-control mb-3 col-6">
                                    <option value="">--Seleccione--</option>
                                    <option value="Dni">Dni</option>
                                    <option value="Carnet Extranjeria">Carnet Extranjeria</option>
                                    <option value="Ruc">Ruc</option>
                                </select>
                                <input type="text" name="carnet" class="form-control mb-3 col-6" id="carnet" placeholder="  Dni o Carnet">
                                <select name="pais" id="pais" class="form-control mb-3 col-6" id="">
                                    <option value="">Perú</option>
                                </select>
                                <input type="text" name="departamento" class="form-control col-6" id="departamento" placeholder="Departamento">
                                <input type="text" name="provincia" class="form-control col-6" id="provincia" placeholder="Provincia">
                                <input type="text" name="distrito" class="form-control col-6" id="distrito" placeholder="Distrito">
                                <input type="text" name="direccion" class="form-control col-6" id="direccion" placeholder="Dirección">
                                <input type="email" name="email" class="form-control mb-3 col-6" id="email" placeholder="  E-MAIL">
                                <select name="ebook" id="ebook" class="form-control">
                                    <option value="">--Seleccione Ebook--</option>
                                    <option value="'La empleabilidad en tiempos de crisis, outplacement la solución">'La empleabilidad en tiempos de crisis, outplacement la solución</option>
                                </select>
                            </div>

                            <!-- <div class="d-flex flex-row">
                                <div class="col-lg-12 pl-0 pr-3 justtify-contend-center">

                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <select name="country" class="form-control custom-select cargos_programa" required="required" id="try-pais">
                                                <option value="">Seleccione su País</option>
                                                <option value="Argentina">Argentina y Uruguay</option>
                                                <option value="Brazil">Brasil</option>
                                                <option value="Chile">Chile</option>
                                                <option value="Peru" selected="">Perú</option>
                                                <option value="Colombia">Colombia</option>
                                                <option value="Mexico">México</option>
                                                <option value="Otro">Otro</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="intl-tel-input allow-dropdown">
                                                <div class="flag-container">
                                                    <div class="selected-flag" tabindex="0" title="Perú: +51">
                                                        <div class="iti-flag pe"></div>
                                                        <div class="iti-arrow"></div>
                                                    </div>
                                                    <ul class="country-list dropup hide">
                                                        <li class="country preferred active" data-dial-code="51" data-country-code="pe">
                                                            <div class="flag-box">
                                                                <div class="iti-flag pe"></div>
                                                            </div>
                                                            <span class="country-name">Perú</span>
                                                            <span class="dial-code">+51</span>
                                                        </li>
                                                        <li class="divider"></li>
                                                        <li class="country" data-dial-code="54" data-country-code="ar">
                                                            <div class="flag-box">
                                                                <div class="iti-flag ar"></div>
                                                            </div>
                                                            <span class="country-name">Argentina</span>
                                                            <span class="dial-code">+54</span>
                                                        </li>
                                                        <li class="country" data-dial-code="55" data-country-code="br">
                                                            <div class="flag-box">
                                                                <div class="iti-flag br"></div>
                                                            </div>
                                                            <span class="country-name">Brazil (Brasil)</span>
                                                            <span class="dial-code">+55</span>
                                                        </li>
                                                        <li class="country" data-dial-code="56" data-country-code="cl">
                                                            <div class="flag-box">
                                                                <div class="iti-flag cl"></div>
                                                            </div>
                                                            <span class="country-name">Chile</span>
                                                            <span class="dial-code">+56</span>
                                                        </li>
                                                        <li class="country" data-dial-code="57" data-country-code="co">
                                                            <div class="flag-box">
                                                                <div class="iti-flag co"></div>
                                                            </div>
                                                            <span class="country-name">Colombia</span>
                                                            <span class="dial-code">+57</span>
                                                        </li>
                                                        <li class="country highlight" data-dial-code="52" data-country-code="mx">
                                                            <div class="flag-box">
                                                                <div class="iti-flag mx"></div>
                                                            </div>
                                                            <span class="country-name">Mexico (México)</span>
                                                            <span class="dial-code">+52</span>
                                                        </li>
                                                        <li class="country" data-dial-code="51" data-country-code="pe">
                                                            <div class="flag-box">
                                                                <div class="iti-flag pe"></div>
                                                            </div>
                                                            <span class="country-name">Peru (Perú)</span>
                                                            <span class="dial-code">+51</span>
                                                        </li>
                                                        <li class="country" data-dial-code="1" data-country-code="us">
                                                            <div class="flag-box">
                                                                <div class="iti-flag us"></div>
                                                            </div>
                                                            <span class="country-name">United States</span>
                                                            <span class="dial-code">+1</span>
                                                        </li>
                                                        <li class="country" data-dial-code="1" data-country-code="bo">
                                                            <div class="flag-box">
                                                                <div class="iti-flag bo"></div>
                                                            </div>
                                                            <span class="country-name">Otro</span>
                                                            <span class="dial-code">+1</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <input type="tel" name="phone" id="phone" class="form-control" placeholder="Teléfono" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->

                            <div class="form-group">
                                <label class="text-white h6">Ingrese Vaucher de pago</label>
                                <input type="file" name="file" class="form-control" id="file">
                            </div> 

                            <div class="form-check form-check-inline col-12">
                                <input id="politicas" class="form-check-input" type="checkbox" name="politicas" value="true">
                                <label for="politicas" class="form-check-label h6"><a href="ebbok/Políticas De Privacidad.pdf" class="text-white">Politicas de Privacidad</a></label>
                            </div>

                            <div class="d-flex justify-content-center mt-3">
                                <button type="submit" class="btn-warning" style="border-radius: 10px; height: 40px; font-size:18px;">QUIERO MI EBOOK</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        $valorDolar = $dolar["venta"] * $costoSol;
      ?>
      <div id="miModal" class="modal z-10000" style="display: block;">
        <div class="flex modal-dialog-centered" id="flex">
            <div class="contenido-modal">
                <div class="modal-header flex">
                    <h3>Obten tu Ibook - <?php echo $costo; ?>$ (S/. <?php echo round($valorDolar, 2); ?>)<b></b></h3>
                    <span class="close" id="close">&times;</span>
                </div>

                <div class="modal-body" style="display: block;">
                    <div id="paypal-button-container" style="max-width: 700px;margin: auto;"></div>
                </div>
                <div class="footer">

                </div>
            </div>
        </div>
    </div>