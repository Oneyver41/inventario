<?php include("plantillas/cabecera.php"); ?>
<?php include("modelo/instrucciones.php");?>
<main class="form-signin">
    <div class="container">
        <div class="row text-center w-100 position-relative">
            <div class="col w-50">
                <form class="" method="post" action="">
                    <img class="mb-4" src="img/icono2.svg" alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">Iniciar sesion</h1>

                    <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" name="userLogin">
                    <label for="floatingInput"><i class="fa-regular fa-user"></i> Nombre de usuario o correo electronico:</label>
                    </div>
                    <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" name="claveLogin"placeholder="Password">
                    <label for="floatingPassword"><i class="fa-solid fa-key"></i> Contraseña:</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Iniciar sesion</button>
                    <p>No te has registrado? <a href="registro.php">Clik aqui.</a></p>
                    <p class="mt-5 mb-3 text-muted">© 2022-2025</p>
             </form>
            </div>
        </div>
    </div>
</main>
<?php include("plantillas/footer.php"); ?>