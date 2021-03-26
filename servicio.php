<?php
include 'plantilla/cabecera.php'
?>


<div class="row mt-3" id="fondo1">
    <div class="col-md-6 col-sm-12 col-xs-12">

        <div class="jumbotron mt-3" id="jum-1">
            <h1 class="display-4">Servicios Informáticos</h1>
            <p class="lead">Colocamos a su disposición los siguientes servicios informáticos
            </p>
            <hr class="my-4">
            <p>La tecnología sigue avanzando y actualizando cada dia, es por ello que debemos trabajar de la mano con
                ella.</p>
            <a class="btn btn-primary btn-lg" href="st.php" role="button">Servicio Técnico</a>
        </div>


    </div>
    <div class="col-md-6 col-sm-6 col-xs-12 mt-3 d-none d-md-block">
        <div class="row  ">
            <div class="col-md-2 col-sm-3 col-xs-3 ">
                <img class="img-fluid w-100" src="imagenes/hp.jpg" alt="" id="img_servicio">
            </div>
            <div class="col-md-2 col-sm-3 col-xs-3 ">
                <img class="img-fluid intel" src="imagenes/intel.jpg" alt="" id="img_servicio">
            </div>
            <div class=" col-md-2 col-sm-3 col-xs-6 ">
                <img class="img-fluid windows" src="imagenes/windows.jpg" alt="" id="img_servicio">
            </div>
            <div class=" col-md-2 col-sm-3 col-xs-6 ">
                <img class="img-fluid linux" src="imagenes/linux.jpg" alt="" id="img_servicio">
            </div>
            <div class=" col-md-2 col-sm-6 col-xs-6">
                <img class="img-fluid compaq" src="imagenes/compaq.jpg" alt="" id="img_servicio">
            </div>
            <div class=" col-md-2 col-sm-6 col-xs-6">
                <img class="img-fluid mac" src="imagenes/mac.jpg" alt="" id="img_servicio">
            </div>


        </div>

        <div class="row mt-3">
            <div class="col-md-6 col-sm-12 ">
                <img class="img-fluid w-100 " src="imagenes/servicio/servicio2.jpg" alt="" id="img_servicio2">
            </div>
            <div class="col-md-6 col-sm-12">
                <img class="img-fluid w-100" src="imagenes/servicio/servicio4.jpg" alt="" id="img_servicio2">
            </div>
        </div>

    </div>
</div>

<div class="row mt-3 servicio_modal">
    <div class="col-md-2 col-sm-6 col-xs-6 servicio1">
        <img class="img-fluid btn d-block w-100" data-toggle="modal" data-target="#consultoria"
            src="imagenes/consultoria_servicio.jpg" alt="" id="img_servicio3">
    </div>
    <!-- Modal -->
    <div class="modal fade" id="consultoria" tabindex="-1" role="dialog" aria-labelledby="consultoria"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="consultoria">Asesorías, Consultorías & Auditorias</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h1>Sistema Organizacional</h1>
                    <p>Realizamos un diagnóstico de su estructura organizacional para detectar qué cambios o mejoras
                        podemos aplicar a nivel de puestos y funciones para así, lograr potenciar a su empresa.

                        Así mismo, desarrollamos estructuras escalables y adaptadas a cada realidad, analizando su
                        principal relación entre procesos, puestos y áreas más criticas, eliminando desorden y
                        deficiencias.
                    </p>
                    <h1>Sistema de Gestión</h1>
                    <p>Nuestro servicio se basa en el diseño, implementación y certificación de un Sistema de Gestión
                        bajo el estándar internacional ISO, asimismo enseñamos a nuestros clientes a aplicar este
                        sistema de tal manera, que no les resulte ajeno a su trabajo cotidiano, por el contrario, que lo
                        haga más eficiente y le brinde información sobre su gestión, de tal manera que facilite la toma
                        de decisiones.
                        Normativas legales, políticas, ISO 9001, ISO 14001,
                        ISO 27001, ISO 37001, ISO 45001.
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-6 servicio1">
        <img class="img-fluid btn d-block w-100" data-toggle="modal" data-target="#infraestructura"
            src="imagenes/tia.jpg" alt="" id="img_servicio3">
    </div>
    <!-- Modal -->
    <div class="modal fade" id="infraestructura" tabindex="-1" role="dialog" aria-labelledby="infraestructura"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="infraestructura">TI INFRAESTRUCTURA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h1>Consultoría TI</h1>
                    <p>Nuestro servicio de Consultoría TI y Gestión de proyectos evalúa la situación de partida de tu
                        empresa para identificar problemas y cuestiones mejorables desde un punto de vista estratégico y
                        operativo, aconsejando las soluciones necesarias para que tu infraestructura tecnológica
                        funcione de la forma más eficiente y a pleno rendimiento.

                        Un servicio de Consultoría TI evalúa, diseña, implementa y valora los resultados, para que
                        consigas tus objetivos</p>

                    <h1>Motorización avanzada de tu infraestructura TI</h1>
                    <p>Se inicia con la elaboración de un inventario de los diferentes elementos de la infraestructura
                        de tu
                        empresa, así como de la criticidad de todos y cada uno de ellos.</p>

                    <h1>Racks y Gabinetes</h1>
                    <p>Evaluación de alimentación Critica</p>
                    <p>Control Térmico</p>
                    <p>Supervisión y Control</p>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>

    <div class="col-md-2 col-sm-6 col-xs-6 servicio1">
        <img class="img-fluid btn d-block w-100" data-toggle="modal" data-target="#seguridad"
            src="imagenes/seguridad1.jpg" alt="" id="img_servicio3">
    </div>

    <!-- Modal -->
    <div class="modal fade" id="seguridad" tabindex="-1" role="dialog" aria-labelledby="seguridad" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="seguridad">Seguridad Física y Perimetral</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h1>Seguridad Física</h1>
                    <li>Alarmas</li>
                    <li>Cerco Eléctrico</li>
                    <li>Cámaras de Seguridad</li>
                    <li>Controles de Acceso</li>
                    <h1>Seguridad Lógica</h1>
                    <li>Protección de Amenazas de Correo Electrónico</li>
                    <li>Protección Aplicaciones Web</li>
                    <li>Seguridad, Control y Visibilidad de Red</li>
                    <li>Protección de los Endpoints y Servidores</li>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-6 servicio1">
        <img class="img-fluid btn d-block w-100" data-toggle="modal" data-target="#desarrollo"
            src="imagenes/desarrollo_web1.jpg" alt="" id="img_servicio3">
    </div>
    <!-- Modal -->
    <div class="modal fade" id="desarrollo" tabindex="-1" role="dialog" aria-labelledby="desarrollo" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="desarrollo">Desarrollo Web</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                   <p>Trasportamos la personalidad de tu marca de un mundo  real a un mundo digital</p> 
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>


    <div class="col-md-2 col-sm-6 col-xs-6 servicio1">
        <img class="img-fluid btn d-block w-100" data-toggle="modal" data-target="#tecnico"
            src="imagenes/servicio_tecnico1.jpg" alt="" id="img_servicio3">
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tecnico" tabindex="-1" role="dialog" aria-labelledby="tecnico" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="tecnico">Soporte tecnico</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Servicio tecnico especializado con mas de 15 años de experiencia, contamos con un equipo
                        especializado para brindarle una atención personalizada, físicamente o via remota
                        <br>
                        trabajamos para brindarle una excelente atención
                    </p>
                    <li>Actualización sistema Operativo</li>
                    <li>Repotenciacion</li>
                    <li>Mantenimiento Físico y Lógico</li>
                    <li>Recuperación de Información</li>
                    <li>Respaldo</li>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <div class="col-md-2 col-sm-6 col-xs-6 servicio1">
        <img class="img-fluid btn d-block w-100" data-toggle="modal" data-target="#helpdesk"
            src="imagenes/servicio_remoto1.jpg" alt="" id="img_servicio3">
    </div>

    <!-- Modal -->
    <div class="modal fade" id="helpdesk" tabindex="-1" role="dialog" aria-labelledby="helpdesk" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="helpdesk">Asistencia Remota</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p> Nuestra atención brindada para los usuarios </p>
                    <h3>Remota</h3>
                    <p>Podemos realizar asistencia remota para una pronta y rápida solución para nuestros clientes</p>
                    <h3>asistencia física</h3>
                    <p>nuestro personal puede darle asistencia Directamente en su residenciá y/o Oficina </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
</div>




<?php
include 'plantilla/pie.php'
?>