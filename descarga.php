<?php
include 'conexion/config.php';
include 'conexion/conexion1.php';
include 'conexion/conexion.php';
include 'carrito/carrito.php';
include 'plantilla/cabecera.php';

?>


<div class="row mt-3 fondo_carrito10">
    <div class="col-sm-12 col-md-4 col-xl-2 " id="fondo_carrito">
        <a href="" class="categorias mt-3" name="todo">todo</a>
        <a href="" class="categorias" name="computadoras">LIBROS</a>
        <a href="" class="categorias" name="electrodomestico">AUDIO LIBROS</a>
        <a href="" class="categorias" name="marron">PROGRAMAS</a>

    </div>
    <div class="col-10">
        <?php if ($mensaje!=""){ ?>
        <div class="aler alert-sucess">

            <br>
            <?php }?>
            <div class="row">
                <!-- consultar los productos que estan en base datos -->
                <?php

                $sentencia=$pdo->prepare('SELECT * FROM descargas');
                $sentencia->execute();
                $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
                // print_r($listaProductos);

            ?>

                <!-- fin de la consulta -->

                <!-- consulta producto base de datos -->

                <?php foreach($listaProductos as $producto){ ?>

                <div class="col-md-4 col-sm-6 col-xs-12 mt-3">
                    <div class="card">
                        <img title=<?php echo $producto ['nombre'];?> alt=<?php echo $producto ['nombre'];?>
                            class="card-img-top" data-toggle="popover" data-trigger="hover"
                            data-content="<?php echo $producto ['imagen']?>"
                            src="<?php echo $producto ['imagen'];?>" height="150px"  >

                        <div class="card-body">
                            <span><?php echo $producto ['nombre'];?></span>
                            <h5 class="card-title"><?php echo $producto ['descripcion'];?></h5>


                            <!-- inicio del formulario encriptado -->

                            <form action="" method="POST">

                                <input type="hidden" name="id" id="id"
                                    value="<?php echo openssl_encrypt($producto ['id'],COD,KEY);?>">
                                <input type="hidden" name="imagen" id="imagen"
                                    value="<?php echo openssl_encrypt($producto ['imagen'],COD,KEY);?>">
                                <input type="hidden" name="nombre" id="nombre"
                                    value="<?php echo openssl_encrypt($producto ['nombre'],COD,KEY);?>">
                                <input type="hidden" name="descripcion" id="descripcion"
                                    value="<?php echo openssl_encrypt($producto ['link'],COD,KEY);?>">
                                <input type="hidden" name="link" id="link"
                                    value="<?php echo openssl_encrypt(1,COD,KEY);?>">

                                <!-- boton de descarga -->
                                <a href="<?php echo $producto ['link'];?>" target="_blank">descargar</a>

                                <!-- <button class="btn btn-primary" name="btnaction" value="agregar" type="submit">
                                agregar al carrito

                            </button> -->

                                <!-- fin boton de agregar al carrito -->

                            </form>
                            <!-- fin  del formulario -->
                        </div>
                    </div>

                </div>


                <?php }?>

                <!-- fin nueva consulta -->


            </div>

        </div>

    </div>

    <br>

    <!-- <script>
//popod
$(function() {
    $('[data-toggle="popover"]').popover()
})
</script> -->

    <?php
include 'plantilla/pie_dos.php';
?>