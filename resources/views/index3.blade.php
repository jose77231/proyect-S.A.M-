<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universia</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="node_modules/reset.css/reset.css">


    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/style.css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
		<!-- Font awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" >
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="estilos.css">

    <!--Link del boostrap no tocar, podrian hechar a aperder el proyecto en especial el Manzo-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    

    <link rel="icon" href="Universia.png">

</head>

<body>

    <!-- nav bar starts -->
    <nav>

        <div class="nav_logo-wrapper">
            <div class="logo">
                <img class="icons" src="images/icon.jpg" alt=""><i>Jose Manzo </i>
            </div>
        </div>

        <div class="Menu_options active">
            <span class="material-icons">home</span>
            <a class="nav-item" href="{{ route('inicio') }}">Inicio</a>
        </div>


        </div>

        <div class="Menu_options">
            <span class="material-icons">person</span>
            <a class="nav-item" href="{{ route('perfil') }}">Perfil</a>
        </div>


        <div class="Menu_options">
            <span class="material-icons">settings</span>
            <a class="nav-item" href="{{ route('configuracion') }}">configuracion</a>
        </div>

    </nav>
    <!-- nav bar end -->


    <!-- main section start -->
    <main>

        <div class="header">
            <div class="aside_input">
                <span class="material-icons aside_search-icon">buscar papu</span>
                <input type="text" placeholder="Buscar">
            </div>
        </div>

        <!--carrousel 3D para el gran manzo, vale el torcido y el giner fantasma, jhonatan-->
        <section>
            <div class="container-fluid h-100">
                <div class="row justify-content-center h-100">
                    <div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
                        <div class="card-header">
                            <div class="input-group">
                                <input type="text" placeholder="Search..." name="" class="form-control search">
                                <div class="input-group-prepend">
                                    <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body contacts_body">
                            <ui class="contacts">
                            <li class="active">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="images/icon.jpg" class="rounded-circle user_img">
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Jose Manzo</span>
                                        <p>Online</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="images/LogoUPB.jpg" class="rounded-circle user_img">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Samantha Metzery tejero</span>
                                        <p>Left 7 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="https://i.pinimg.com/originals/ac/b9/90/acb990190ca1ddbb9b20db303375bb58.jpg" class="rounded-circle user_img">
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Sami Rafi</span>
                                        <p>Online</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="https://avatars.hsoubcdn.com/ed57f9e6329993084a436b89498b6088?s=256" class="rounded-circle user_img">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Hassan Agmir</span>
                                        <p>Left 30 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="https://static.turbosquid.com/Preview/001214/650/2V/boy-cartoon-3D-model_D.jpg" class="rounded-circle user_img">
                                        <span class="online_icon offline"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Abdou Chatabi</span>
                                        <p>Left 50 mins ago</p>
                                    </div>
                                </div>
                            </li>
                            </ui>
                        </div>
                        <div class="card-footer"></div>
                    </div></div>
                    <div class="col-md-8 col-xl-6 chat">
                        <div class="card">
                            <div class="card-header msg_head">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        <img src="images/icon.jpg" class="rounded-circle user_img">
                                        <span class="online_icon"></span>
                                    </div>
                                    <div class="user_info">
                                        <span>Jose Manzo</span>
                                        <p>1767 Messages</p>
                                    </div>
                                    <div class="video_cam">
                                        <span><i class="fas fa-video"></i></span>
                                        <span><i class="fas fa-phone"></i></span>
                                    </div>
                                </div>
                                <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                                <div class="action_menu">
                                    <ul>
                                        <li><i class="fas fa-user-circle"></i> View profile</li>
                                        <li><i class="fas fa-users"></i> Add to close friends</li>
                                        <li><i class="fas fa-plus"></i> Add to group</li>
                                        <li><i class="fas fa-ban"></i> Block</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body msg_card_body">
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/icon.jpg" class="rounded-circle user_img_msg">
                                    </div>
                                    <div class="msg_cotainer">
                                        hola buenos dias
                                        <span class="msg_time">8:40 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        hola como te va en la escuela?
                                        <span class="msg_time_send">8:55 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                <img src="https://avatars.hsoubcdn.com/ed57f9e6329993084a436b89498b6088?s=256" class="rounded-circle user_img_msg">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/icon.jpg" class="rounded-circle user_img_msg">
                                    </div>
                                    <div class="msg_cotainer">
                                        muy bien gracias y a ti que tal?
                                        <span class="msg_time">9:00 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        bastante bien la verdad no me quejo
                                        <span class="msg_time_send">9:05 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                                <img src="https://avatars.hsoubcdn.com/ed57f9e6329993084a436b89498b6088?s=256" class="rounded-circle user_img_msg">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/icon.jpg" class="rounded-circle user_img_msg">
                                    </div>
                                    <div class="msg_cotainer">
                                        yen que carrera estudias
                                        <span class="msg_time">9:07 AM, Today</span>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-4">
                                    <div class="msg_cotainer_send">
                                        en Software
                                        <span class="msg_time_send">9:10 AM, Today</span>
                                    </div>
                                    <div class="img_cont_msg">
                            <img src="https://avatars.hsoubcdn.com/ed57f9e6329993084a436b89498b6088?s=256" class="rounded-circle user_img_msg">
                                    </div>
                                </div>
                                <div class="d-flex justify-content-start mb-4">
                                    <div class="img_cont_msg">
                                        <img src="images/icon.jpg" class="rounded-circle user_img_msg">
                                    </div>
                                    <div class="msg_cotainer">
                                        a okey que buena carrera
                                        <span class="msg_time">9:12 AM, Today</span>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="input-group">
                                    <div class="input-group-append">
                                        <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                                    </div>
                                    <textarea name="" class="form-control type_msg" placeholder="Type your message..."></textarea>
                                    <div class="input-group-append">
                                        <span class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="scripts.js"></script>
        </section>

           
                    

        



    </main>
    <!-- main section end -->

    <!-- aside element start -->
    <aside>
        <img src="images/UniVersiacara.png" alt="">

        <div class="aside_container">
            <h2>Noticia del dia</h2>
            <img class="Noticias" src="images/noticia del dia.png" alt="">

            <h2>Test Vocacional</h2>
            <img class="Noticias" src="images/Test vocional.png" alt="">
        </div>

    </aside>
    <!-- aside element ends -->


</body>

</html>