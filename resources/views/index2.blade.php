<!DOCTYPE html>
<html lang="e">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universia</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="node_modules/reset.css/reset.css">


    <link rel="stylesheet" href="css/style.css">

    <link rel="icon" href="Universia.png">

</head>

<body>
  
    <!-- nav bar starts -->
    <nav>

        <div class="nav_logo-wrapper">
            <div class="logo">
                <img class="icons" src="images/usuario3.png" alt=""><i>Jose Manzo</i>
            </div>
        </div>

        <div class="Menu_options active">
            <span class="material-icons">home</span>
            <h2>Inicio</h2>
        </div>


        </div>

        <div class="Menu_options">
            <span class="material-icons">person</span>
            <h2>Perfil</h2>
        </div>


        <div class="Menu_options">
            <span class="material-icons">settings</span>
            <h2>Configuracion</h2>
        </div>



    </nav>
    <!-- nav bar end -->


    <!-- main section start -->
    <main>
        
        <div class="header">
            <h2>Perfil</h2>
            <div class="aside_input">
                <span class="material-icons aside_search-icon">search</span>
                <input type="text" placeholder="Buscar">
    
            </div>
        </div>

       <section>
          

<style type="text/css">
   
    
    html {
        -webkit-text-size-adjust: 100%;
        -ms-text-size-adjust: 100%;
        text-size-adjust: 100%;
        line-height: 1.4;
    }
    
    
    * {
        margin: 0;
        padding: 0;
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }
    
    body {
        color: #404040;
        font-family: "Arial", Segoe UI, Tahoma, sans-serifl, Helvetica Neue, Helvetica;
    }
    
  
    .seccion-perfil-usuario .perfil-usuario-body,
    .seccion-perfil-usuario {
        display: flex;
        flex-wrap: wrap;
        flex-direction: column;
        align-items: center;
    }
    
    .seccion-perfil-usuario .perfil-usuario-header {
        width: 100%;
        display: flex;
        justify-content: center;
        background: linear-gradient(#B873FF, transparent);
        margin-bottom: 1.25rem;
    }
    
    .seccion-perfil-usuario .perfil-usuario-portada {
        display: block;
        position: relative;
        width: 90%;
        height: 17rem;
        background-image: linear-gradient(45deg, #BC3CFF, #317FFF);
        border-radius: 0 0 20px 20px;
        /*
        background-image: url('http://localhost/multimedia/png/user-portada-3.png');
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        */
    }
    
    .seccion-perfil-usuario .perfil-usuario-portada .boton-portada {
        position: absolute;
        top: 1rem;
        right: 1rem;
        border: 0;
        border-radius: 8px;
        padding: 12px 25px;
        background-color: rgba(0, 0, 0, .5);
        color: #fff;
        cursor: pointer;
    }
    
    .seccion-perfil-usuario .perfil-usuario-portada .boton-portada i {
        margin-right: 1rem;
    }
    
    .seccion-perfil-usuario .perfil-usuario-avatar {
        display: flex;
        width: 180px;
        height: 180px;
        align-items: center;
        justify-content: center;
        border: 7px solid #FFFFFF;
        background-color: #DFE5F2;
        border-radius: 50%;
        box-shadow: 0 0 12px rgba(0, 0, 0, .2);
        position: absolute;
        bottom: -40px;
        left: calc(50% - 90px);
        z-index: 1;
    }
    
    .seccion-perfil-usuario .perfil-usuario-avatar img {
        width: 100%;
        position: relative;
        border-radius: 50%;
    }
    
    .seccion-perfil-usuario .perfil-usuario-avatar .boton-avatar {
        position: absolute;
        left: -2px;
        top: -2px;
        border: 0;
        background-color: #47eb16;
        box-shadow: 0 0 12px rgba(0, 0, 0, .2);
        width: 45px;
        height: 45px;
        border-radius: 50%;
        cursor: pointer;
    }
    
    .seccion-perfil-usuario .perfil-usuario-body {
        width: 70%;
        position: relative;
        max-width: 750px;
    }
    
    .seccion-perfil-usuario .perfil-usuario-body .titulo {
        display: block;
        width: 100%;
        font-size: 1.75em;
        margin-bottom: 0.5rem;
    }
    
    .seccion-perfil-usuario .perfil-usuario-body .texto {
        color: #848484;
        font-size: 0.95em;
    }
    
    .seccion-perfil-usuario .perfil-usuario-footer,
    .seccion-perfil-usuario .perfil-usuario-bio {
        display: flex;
        flex-wrap: wrap;
        padding: 1.5rem 2rem;
        box-shadow: 0 0 12px rgba(0, 0, 0, .2);
        background-color: #fff;
        border-radius: 15px;
        width: 100%;
    }
    
    .seccion-perfil-usuario .perfil-usuario-bio {
        margin-bottom: 1.25rem;
        text-align: center;
    }
    
    .seccion-perfil-usuario .lista-datos {
        width: 50%;
        list-style: none;
    }
    
    .seccion-perfil-usuario .lista-datos li {
        padding: 5px 0;
    }
    
    .seccion-perfil-usuario .lista-datos li>.icono {
        margin-right: 1rem;
        font-size: 1.2rem;
        vertical-align: middle;
    }
    
    .seccion-perfil-usuario .redes-sociales {
        position: absolute;
        right: calc(0px - 50px - 1rem);
        top: 0;
        display: flex;
        flex-direction: column;
    }
    
    .seccion-perfil-usuario .redes-sociales .boton-redes {
        border: 0;
        background-color: #fff;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        color: #fff;
        box-shadow: 0 0 12px rgba(0, 0, 0, .2);
        font-size: 1.3rem;
    }
    
    .seccion-perfil-usuario .redes-sociales .boton-redes+.boton-redes {
        margin-top: .5rem;
    }
    
    .seccion-perfil-usuario .boton-redes.facebook {
        background-color: #5955FF;
    }
    
    .seccion-perfil-usuario .boton-redes.twitter {
        background-color: #35E1BF;
    }
    
    .seccion-perfil-usuario .boton-redes.instagram {
        background: linear-gradient(45deg, #FF2DFD, #40A7FF);
    }
    
    /* adactacion a dispositivos */
    @media (max-width: 750px) {
        .seccion-perfil-usuario .lista-datos {
            width: 100%;
        }
    
        .seccion-perfil-usuario .perfil-usuario-portada,
        .seccion-perfil-usuario .perfil-usuario-body {
            width: 95%;
        }
    
        .seccion-perfil-usuario .redes-sociales {
            position: relative;
            flex-direction: row;
            width: 100%;
            left: 0;
            text-align: center;
            margin-top: 1rem;
            margin-bottom: 1rem;
            align-items: center;
            justify-content: center
        }
    
        .seccion-perfil-usuario .redes-sociales .boton-redes+.boton-redes {
            margin-left: 1rem;
            margin-top: 0;
        }
    }
    </style>
        <!--==========================
    =            html            =
    ===========================-->
        <section class="seccion-perfil-usuario">
            <div class="perfil-usuario-header">
                <div class="perfil-usuario-portada">
                    <div class="perfil-usuario-avatar">
                        <img class="icons" src="images/usuario3.png" alt="img-avatar">
                        <button type="button" class="boton-avatar">
                            <i class="far fa-image"></i>
                        </button>
                    </div>
                    <button type="button" class="boton-portada">
                        <i class="far fa-image"></i> Cambiar fondo
                    </button>
                </div>
            </div>
            <div class="perfil-usuario-body">
                <div class="perfil-usuario-bio">
                    <h3 class="titulo">Jose Alejandro Manzo Hernandez</h3>
                </div>
                <div class="perfil-usuario-footer">
                    <ul class="lista-datos">
                        <li><i class="icono fas fa-map-signs"></i> Nombre de usuario:jose 77231</li>
                        <li><i class="icono fas fa-phone-alt"></i> Teléfono:983106765</li>
                        <li><i class="icono fas fa-briefcase"></i> Escuela: Universidad Politécnica de Bacalar</li>
                    </ul>
                    <ul class="lista-datos">
                        <li><i class="icono fas fa-map-marker-alt"></i> Ubicación :Bacalar </li>
                        <li><i class="icono fas fa-calendar-alt"></i> Fecha nacimiento: 12 junio 2003</li>
                        <li><i class="icono fas fa-share-alt"></i> Redes sociales: Facebock, Instagram</li>
                    </ul>
                </div>
                <div class="redes-sociales">
                    <a href="" class="boton-redes facebook fab fa-facebook-f"><i class="icon-facebook"></i></a>
                    <a href="" class="boton-redes twitter fab fa-twitter"><i class="icon-twitter"></i></a>
                    <a href="" class="boton-redes instagram fab fa-instagram"><i class="icon-instagram"></i></a>
                </div>
            </div>
        </section>
        <!--====  End of html  ====-->
    
    
    <style>
    .mensaje a {
        color: inherit;
        margin-right: .5rem;
        display: inline-block;
    }
    .mensaje a:hover {
        color: #309B76;
        transform: scale(1.4)
    }
    </style>
    <div class="mis-redes" style="display: block;position: fixed;bottom: 1rem;left: 1rem; opacity: 0.5; z-index: 1000;">
        <p style="font-size: .75rem;">Apock graficos</p>
        <div>
            <a target="_blank" href="https://www.facebook.com/josealejandro.manzo.7/"><i class="fab fa-facebook-square"></i></a>
            <a target="_blank" href="https://twitter.com/JoseAle03894250"><i class="fab fa-twitter"></i></a>
            <a target="_blank" href="https://www.instagram.com/jose77231/"><i class="fab fa-instagram"></i></a>
            <a target="_blank" href="https://www.youtube.com/channel/UCvHiCRsIaiyAmC1ON3S-XDQ"><i class="fab fa-youtube"></i></a>
        </div>
    </div>
    <!--====  End of tarjeta  ====-->
   


    


    <!-- main section start -->
    <main>

        <div class="tweet_box">
            <form>
                <div class="tweet_box-input">
                    <img class="icons" src="images/usuario3.png" alt="profile imagw">
                    <input type="text" placeholder="en que piensas?">
                    <button class="">Enviar</button>

                </div>
            </form>

        </div>

       
 
            <div class="post">
                <div class="post_profile-image">
                    <img src="images/LogoUPB.jpg" alt="java-logo">
    
                </div>
    
                <div class="post_body">
                    <div class="post_header">
                        <div class="post_header-text">
                            <h3>UPB
                                <span class="header-icon-section">
                                    <span class="material-icons post_badge">verified</span>@UPB
                                </span>
                            </h3>
                        </div>
    
                        <div class="post_header-discription">
                            <p> </p>
                            <br>
                            <p>#EstudiaConNosotros Ingenieria en Software UPB próximo examen de<br>
                                admisión 27 de mayo de 2023. <br>
    
                            </p>
                        </div>
    
                    </div>
                    <img src="images/publicacion 2.png" alt="java18">
    
                    <div class="post_footer">
    
                        <span class="material-icons">chat</span>
                        <span class="material-icons">repeat</span>
                        <span class="material-icons">favorite_border</span>
                        <span class="material-icons">file_upload</span>
    
    
                    </div>
    
                </div>
    
            </div>
    </body>
    
    </html>
       </section>
           

           

           

                


    </main>
    <!-- main section end -->

    <!-- aside element start -->
    <aside>

        <img  src="images/UniVersiacara.png" alt="">
        <div class="aside_container">
            <h2></h2>
        

        </div>

    </aside>
    <!-- aside element ends -->


</body>

</html>