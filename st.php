<?php
include 'plantilla/cabecera.php'
?>

<div id="carouselst" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselst" data-slide-to="0" class="active"></li>
        <li data-target="#carouselst" data-slide-to="1"></li>
        <li data-target="#carouselst" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="imagenes/servicio/st2.jpg" class="d-block w-100 banner_servicio" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imagenes/servicio/st3.jpg" class="d-block w-100 banner_servicio" alt="...">
        </div>
        <div class="carousel-item">
            <img src="imagenes/servicio/st4.jpg" class="d-block w-100 banner_servicio" alt="...">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselst" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselst" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- ESTRUCTURA SERVICIO -->
<div class="row mt-3">
    <div class="col-8 stecnico ">
        <div class="card d-inline-block " style="width: 15rem;">

            <img src="imagenes/iconos/tecnologia.svg" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-text">Outsorsing</p>
            </div>
        </div>
        <div class="card d-inline-block" style="width: 15rem;">
            <img src="imagenes/iconos/mesa.svg" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-text">Mesa de ayuda</p>
            </div>
        </div>
        <div class="card d-inline-block" style="width: 15rem;">
            <img src="imagenes/iconos/proyectos.svg" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-text">Proyecto TI</p>
            </div>
        </div>
        <div class="card d-inline-block mt-3" style="width: 15rem;">
            <img src="imagenes/iconos/suministros.svg" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-text">Suministros.</p>
            </div>
        </div>
        <div class="card d-inline-block" style="width: 15rem;">
            <img src="imagenes/iconos/mantenimiento.svg" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-text">Mantenimiento</p>
            </div>
        </div>
        <div class="card d-inline-block" style="width: 15rem;">
            <img src="imagenes/iconos/documentacion.svg" class="card-img-top mt-2" alt="...">
            <div class="card-body">
                <p class="card-text">Normalización ISO</p>
            </div>
        </div>
    </div>
    <!-- FORMULARIO DE SERVICIO -->
    <!-- video -->
    <div class="col-4">
        <div class="embed-responsive embed-responsive-16by9">
            <iframe class="embed-responsive-item  " src="https://www.youtube.com/embed/buHW8o-9FGs" frameborder="0"
                allowfullscreen></iframe>
        </div>
    </div>
    <!-- fin video -->
</div>

<div class="row mt-3" id="stdescrip">
    <div class="col-md-4 col-sd-3" id="stdescriptodo">

        <img src="imagenes/iconos/soporte-tecnico.svg" class="card-img mt-2" alt="...">
        <h3 class="d-inline-block">SOPORTE TÉCNICO</h3>

        <P>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero porro iusto illum, nisi deleniti
            perspiciatis quae nam eligendi aut sit numquam ullam nostrum optio distinctio quas facere neque debitis hic?
        </P>
    </div>
    <div class="col-md-4 col-sd-3" id="stdescriptodo">
        <img src="imagenes/iconos/redes.svg" class="card-img-top mt-2" alt="...">
        <h3 class="d-inline-block">REDES Y WIFI</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque ea at, accusantium quasi perferendis debitis
            quas nam esse, eius quam facilis odio atque veritatis ad corrupti sequi animi maxime consequatur!</p>
    </div>
    <div class="col-md-4 col-sd-3" id="stdescriptodo">
        <img src="imagenes/iconos/servidor.svg" class="card-img-top mt-2" alt="...">
        <h3 class="d-inline-block">INFRAESTRUCTURA TI</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat alias, inventore, eum rerum sit veniam
            provident praesentium cum qui amet veritatis unde. Ducimus placeat atque impedit? Quod excepturi nulla
            tempore?</p>
    </div>
    <div class="col-md-4 col-sd-3" id="stdescriptodo">
        <img src="imagenes/iconos/informacion.svg" class="card-img-top mt-2" alt="...">
        <h3 class="d-inline-block">RECUPERACION</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum nihil itaque officiis voluptas adipisci
            ipsum minus beatae non voluptates molestias aspernatur modi rerum odio hic, eos voluptatibus labore,
            excepturi alias.</p>
    </div>
    <div class="col-md-4 col-sd-3" id="stdescriptodo">
        <img src="imagenes/iconos/instalacion.svg" class="card-img-top mt-2" alt="...">
        <h3 class="d-inline-block">INSTALACION DE SOFTWARE</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui, culpa. Architecto, necessitatibus error
            dignissimos perferendis ullam tenetur vero eveniet voluptas sed quo rem veritatis maxime molestiae aliquam
            laudantium totam! Aliquid.</p>
    </div>
    <div class="col-md-4 col-sd-3" id="stdescriptodo">
        <img src="imagenes/iconos/dto.svg" class="card-img-top mt-2" alt="...">
        <h3 class="d-inline-block">ELIMINACION DE VIRUS</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur cum maiores in tempore, quod aliquid
            distinctio dolor, sed eius, ducimus est architecto similique ea dignissimos consequatur incidunt laboriosam
            ad. Doloremque.</p>
    </div>
    <div class="col-md-4 col-sd-3" id="stdescriptodo">
        <img src="imagenes/iconos/mto.svg" class="card-img-top mt-2" alt="...">
        <h3 class="d-inline-block">MANTENIMIENTO </h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur cum maiores in tempore, quod aliquid
            distinctio dolor, sed eius, ducimus est architecto similique ea dignissimos consequatur incidunt laboriosam
            ad. Doloremque.</p>
    </div>
    <div class="col-md-4 col-sd-3" id="stdescriptodo">
        <img src="imagenes/iconos/laptop.svg" class="card-img-top mt-2" alt="...">
        <h3 class="d-inline-block">RECUPERACION DE LAPTOP</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur cum maiores in tempore, quod aliquid
            distinctio dolor, sed eius, ducimus est architecto similique ea dignissimos consequatur incidunt laboriosam
            ad. Doloremque.</p>
    </div>
    <div class="col-md-4 col-sd-3" id="stdescriptodo">
        <img src="imagenes/iconos/impresora.svg" class="card-img-top mt-2" alt="...">
        <h3 class="d-inline-block">IMPRESORA </h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur cum maiores in tempore, quod aliquid
            distinctio dolor, sed eius, ducimus est architecto similique ea dignissimos consequatur incidunt laboriosam
            ad. Doloremque.</p>
    </div>
    <div class="col-md-4 col-sm-3" id="stdescriptodo">
        <img src="..." class="card-img-top mt-2" alt="...">
        <h3 class="d-inline-block">REDES DE DATOS </h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur cum maiores in tempore, quod aliquid
            distinctio dolor, sed eius, ducimus est architecto similique ea dignissimos consequatur incidunt laboriosam
            ad. Doloremque.</p>
    </div>
    <div class="col-md-4 col-sd-3" id="stdescriptodo">
        <img src="imagenes/iconos/web.svg" class="card-img-top mt-2 " alt="...">
        <h3 class="d-inline-block">WEB Y EMAILS</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur cum maiores in tempore, quod aliquid
            distinctio dolor, sed eius, ducimus est architecto similique ea dignissimos consequatur incidunt laboriosam
            ad. Doloremque.</p>
    </div>
    <div class="col-md-4 col-sd-3" id="stdescriptodo">
        <img src="imagenes/iconos/alquilar.svg" class="card-img-top mt-2" alt="...">
        <h3 class="d-inline-block">ALQUILERES DE EQUIPOS</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur cum maiores in tempore, quod aliquid
            distinctio dolor, sed eius, ducimus est architecto similique ea dignissimos consequatur incidunt laboriosam
            ad. Doloremque.</p>
    </div>
</div>

<!-- FIN ESTRUCTURA SERVICIO -->

<!-- BOTONES -->

<div class="row mt-3">
    <div class="col-md-4">
        <button class="btn btn-primary" id="buton1">Solicitar Servicio</button>
    </div>
    <div class="col-md-4">
        <button class="btn btn-primary" id="buton2">Presupuesto</button>
    </div>
    <div class="col-md-4">
        <button class="btn btn-primary" id="buton3">Por asignar</button>
    </div>

</div>

<!-- FUNCION CON JQUERY -->

<script src="../js/codigo.js"></script>

<!-- PIE DE PAGINA  -->
<?php
include 'plantilla/pie.php'
?>