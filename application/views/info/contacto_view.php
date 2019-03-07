<section>

    <div class="container py-5">
        <h2>Asistencia Técnica</h2>
        <div class="row pt-3">
        <div class="col-12 col-md-6">
                <div>
                    <p>
                        ¿Tienes dudas? Ponte en contacto con nosotros en:
                    </p>
                </div>

                <div>
                    <p>
                        <span class="pr-2"><i class="fas fa-envelope"></i></span> Mail: <a
                            href="mailto:"><strong>info@info,es</strong></a>
                    </p>
                    <p>
                        <span class="pr-2"><i class="fas fa-phone-volume"></i></span> Tel: <a
                            href="tel:"><strong>+34 </strong></a>
                    </p>
                </div>

                <div class="py-3">
                    <p>
                        <span class="pr-2"><i class="fas fa-map-marker-alt"></i></span> <span>Bigben Interactive
                            España</span>
                    </p>
                    <p>
                        <span class="pr-4"></span> <span>C/Musgo 5, 2ª planta/span>
                    </p>
                    <p>
                        <span class="pr-4"></span> <span>28023 Madrid</span>
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-6 pt-3 pt-md-0">
                <div>
                    <p>
                        También puedes enviarnos un mensaje a través del formulario.
                    </p>
                </div>

                <div>
                    <form  id="form-contacto">

                        <div class="form-group">
                            <input type="text" id="user_asunto" name="user_asunto" class="form-control input-style"
                                placeholder="Introducir asunto *" title="Su asunto por favor" required
                                autocomplete="off">
                        </div>

                        <div class="form-group">
                            <input type="text" id="user_nombre" name="user_nombre" class="form-control input-style"
                                placeholder="Introducir nombre *" title="Su nombre por favor" required
                                autocomplete="off">
                        </div>
                        <div class="form-group">
                            <input type="email" id="user_email" name="user_email" class="form-control input-style"
                                placeholder="Introducir email *" title="Su correo electronico por favor" required
                                autocomplete="off">
                        </div>
                        <div class="form-group">

                            <textarea id="user_mensaje" name="user_mensaje" class="form-control input-style"
                                placeholder="Introducir mensaje *" title="Su mensaje por favor" required
                                autocomplete="off" rows="6"></textarea>
                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="cbox_politica" name="cbox_politica"
                                required>
                            <label class="form-check-label text-muted cm-fs" for="cbox-politica"> Acepto la <a
                                    href="<?=site_url('info/politica_privacidad')?>" target="_blank">Política de
                                    privacidad</a></label>
                        </div>

                        <div class="row mt-3 mt-sm-5">
                            <button type="submit" class="btn btn-info  mx-auto px-5"
                                id="btn-contacto">ENVIAR</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<!-- GIF AVISO CARGA -->
<div class="loader-gif">
    <div class="fa-3x">
        <i class="fas fa-spinner fa-spin"></i>
    </div>
</div>
<!-- END GIF AVISO CARGA -->

<script>

    //Loader gif
    var $loaderGif = $('.loader-gif');
    // $loaderGif.hide();

   let $formContacto = $('#form-contacto');
   let $btnContacto = $('#btn-contacto');



    $formContacto.on('submit', function (e) {

        //Evitamos envió formulario
        e.preventDefault();

        //Desactivamos boton envio
        $btnContacto.attr("disabled", true);

        //Datos que pasamos a la petición
        let url = "<?php echo site_url('/usuarios/ajax_contacto') ?>";
        let type = "POST";
        let $data = $formContacto.serialize();

        $.ajax({
            beforeSend: function () {
                $loaderGif.show();
            },
            url: url,
            type: type,
            data: $data,
            dataType: "json",
            timeout: 15000

        }).done(function (result) {//Petición completa con éxito

            console.log(result);

            if (result.code == 1) {

                swal({
                    title: 'Perfecto',
                    text: result.msg,
                    type: 'success',
                    confirmButtonText: 'BIGBENCONNECTED',
                }).then(function () {
                        window.location.replace("<?php echo site_url('/home') ?>");
                })

                $btnContacto.attr("disabled", false);
                $loaderGif.hide();

            } else {

                Swal({
                    title: 'Error!',
                    text: result.msg,
                    type: 'error',
                    confirmButtonText: ':('
                })
                $btnContacto.attr("disabled", false);
                $loaderGif.hide();
            }

        }).fail(function (xhr, status, error) {  //Error en la petición
            console.log(xhr + '\n' + status + '\n' + '\n' + error);
        }).always(function (xhr, status) {   //Función que se ejecuta al finalizar petición sea correcta o de error
            console.log("Estado Peticion: " + status);
        });



    });





</script>