<!DOCTYPE html>
<html lang="en">
    <head>

        <title>Productos para comprar</title>

    </head>
    <body id="page-top">
    <!-- header Bar -->
    <?php include(dirname(__FILE__)."/includes/header.php");?>
    <?php include(dirname(__FILE__)."/includes/menu.php");?>

        <!-- Counter Section -->
        <section class="course">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 mx-auto text-center">
                        <h2 class="mb-3 text-uppercase font-weight-bold">Nuestros productos</h2>
                            <div class="divider"></div>
                            <p class="pt-3 pb-3">Cosas que vendemos.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="card-group">
                        <div class="col-lg-4 col-md-6 mb-3">
                            <div class="card">
                                <img class="card-img-top" src="jabon_manos.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h6 class="text-uppercase font-weight-bold m-0"><?php echo $Productos["nombre"];?></h6>
                                    <p class="card-text">posible descripcion.</p>
                                    <button type="submit" class="btn btn-radius2 py-2 px-3 text-uppercase">añadir producto</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer Section -->
        <?php include(dirname(__FILE__)."/includes/footer.php");?>
        
    </body>
</html>