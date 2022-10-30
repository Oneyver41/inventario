 <?php include("plantillas/cabecera.php"); ?>
 <main>
    <div class="container">
       <div class="row justify-content-center align-items-center g-2">
        <div class="col-lg-12">
             <!-- carrusel -->
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="img/imagen1.jpg" class=" imagen1 d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Lleve el control de su negocio</h5>
                            <p>Con nuestro sistema podra tener funciones especiales para el manejo de productos,contaduria y mas.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/imagen2.jpg" class=" imagen2 d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Obtenga una administracion optima</h5>
                            <p>Sera mas sencillo tener un sistema que ayude a solucionar sus problmeas economicos y financieros.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="img/imagen3.jpg" class=" imagen3 d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Cuente con la mayor seguridad</h5>
                            <p>Prestamos una seguridad informatica de alto nivel y cuidamos los vienes y derechos de nuestros usuarios.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">/span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden"></span>
                </button>
        </div>
            <hr>
                 <br>
        </div>
        <!-- ===========================TARJETAS=============================== -->
        <div class="col-4 text-center">
            <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Mayor sistematizacion</h5>
                        <p class="card-text">Capacidad rapida y precisa para manejar cualquier control de productos o inventario de su negocio con un sistema eficiente.</p>
                        <a href="login.php" class="btn btn-primary">Comenzar</a>
                    </div>
            </div>
        </div>
        <div class="col-4 text-center">
            <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Control de cualquier mercancia</h5>
                        <p class="card-text">Pruebe y comentenos el funcionamiento que ocupa nuestro software para manejar su mercancia.</p>
                        <a href="login.php" class="btn btn-primary">Comenzar</a>
                    </div>
            </div>
        </div>
        <div class="col-4 text-center">
            <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Uso practico y simple</h5>
                        <p class="card-text">Sitema bastante intuitivo y facil de manejar que con simples cliks ya tiene su trabajo listo.</p>
                        <a href="login.php" class="btn btn-primary">Comenzar</a>
                    </div>
            </div>
        </div>
       </div>
    </div>
</main>
<?php include("plantillas/footer.php"); ?>
    