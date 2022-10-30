<?php include("plantillas/cabecera.php");?>
<?php include("modelo/instrucciones.php");?>
<main class="form-signin">
    <div class="container">
        <div class="row text-center  position-relative">
            <div class="col w-50">
                <form class="" action="" method="post">
                    <img class="mb-4" src="img/icono2.svg" alt="" width="72" height="57">
                    <h1 class="h3 mb-3 fw-normal">Registrate</h1>
                    <div class="form-floating">
                    <input type="text" class="form-control" id="floatingInput" name="userRegis">
                    <label for="floatingInput"><i class="fa-regular fa-user"></i> Nombre de usuario:</label>
                    </div>
                    <div class="form-floating">
                    <input type="email" class="form-control" id="floatingPassword" placeholder="correo" name="correoRegis">
                    <label for="floatingPassword"><i class="fa-solid fa-envelope"></i> Correo electronico:</label>
                    </div>
                    <div class="form-floating">
                    <input type="email" class="form-control" id="floatingPassword" placeholder="correo" name="correoConfiRegis">
                    <label for="floatingPassword">Confirmar correo electronico:</label>
                    </div>
                    <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="claveRegis">
                    <label for="floatingPassword"><i class="fa-solid fa-key"></i> Contraseña:</label>
                    </div>
                    <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="claveConfiRegis">
                    <label for="floatingPassword">Confirmar contraseña:</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Registrar</button>
                    <p>ya tienes cuenta? <a href="login.php.php">Iniciar sesion.</a></p>
                    <p class="mt-5 mb-3 text-muted">© 2022-2025</p>
             </form>
            </div>
        </div>
    </div>
</main>



<?php  include("plantillas/footer.php"); ?>