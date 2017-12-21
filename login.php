<!DOCTYPE html>
<html lang="es">
<head>
    <?php include "./components/head.php";?>
    <title>Login</title>
</head>
<body>
    <?php include "./components/header.php";?>
    <section id="login">
         <form id="login_form" name="login" action="login.html" method="post">
               <h2>Inicio de Sesión</h2>
            <div class="campo_form">  
               <label for="nombredeusuario/email">Nombre de usuario / email</label><br/>      
               <input type="email" name="Nombredeusuario/email" id="nombredeusuario/email"
                 value="" placeholder="Email de usuario" required autofocus autocomplete="on"/>
            </div>
            <div  class="campo_form">
               <label>Contraseña</label><br/>      
               <input type="password" name="contrasena" id="contrasena"
                 value="" placeholder="Password" required/>  
            </div> 
      
            <div  class="campo_form">
               <input type="submit" name="submit" value="Acceso"/>      
            </div> 
    
            <div  class="campo_form">
               <input type="checkbox" name="remember" id="remember"/><label for="remember"> Recuerdame</label>
            </div>
         </form>      
        <div>      
                <div>
                   <h4>¿No tienes cuenta?</h4>    
                   <input type="submit" name="submit" value="Crear cuenta"/>   
                </div> 

                <div>
                   <h4>¿Has olvidado tu contraseña?</h4>  
                   <input type="submit" name="submit" value="Recuperar"/>      
                </div>      
        </footer>
        <?php include "./components/footer.php";?>
    </section>
</body>
</html>