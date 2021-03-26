<?php
include 'plantilla/cabecera.php'
?>

<div class="row mt-3" id="fondo1">
    <div class="col-md-6 col-sm-6 col-xs-12">

        <div class="jumbotron mt-3">
            <h1 class="display-4">Contáctenos</h1>
            <p class="lead">Para comunicarse con nuestro equipo le dejamos a su disposición.</p>
            <hr class="my-4">
            <p>Visite nuestra tarjeta digital</p>
             <a class="btn btn-primary btn-lg" href="../tarjeta_digital/index.php" role="button">Visitar</a>
            <!-- <a class="btn btn-primary btn-lg" href="vision.php" role="button">vision</a>  -->
        </div>


    </div>
    <div class="col-md-6 col-sm-6 col-xs-12 mt-3">
        <form action="mail/enviar.php" method="post">

            <div class="form-group">
                <div class="form-group">

                    <label for="text">Nombre</label>

                    <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>

                    <small class="form-text text-muted">Ingrese Su Nombre</small>

                </div>
                <label for="exampleInputEmail1">Correo Electrónico</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="correo electrónico" name="email" required>
                <small id="emailHelp" class="form-text text-muted">Ingrese su correo</small>
            </div>
            
            <label for="exampleInputEmail1">Descripción</label><br>
            <textarea cols="60" rows="8" name="mensaje" class="textarea"></textarea>
            <br>
            <button type="submit" class="btn btn-primary mb-3 mt-3">Enviar</button>
        </form>

    </div>
</div>

<?php
include 'plantilla/pie.php'
?>