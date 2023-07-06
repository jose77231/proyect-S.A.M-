<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <!-- main style -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}" />
    <!-- Fonts style -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>UNIVersia</title>
    <link rel="icon" href="img/Logo.png">
  </head>
  <body class="bg-gray">
    <!-- Login -->
    <div class="container mt-5 pt-5 d-flex flex-column flex-lg-row justify-content-evenly">
      <!-- heading -->
      <div class="text-center text-lg-start mt-0 pt-0 mt-lg-5 pt-lg-5">
        <div class="contenedor">
          <h1 class="titulo">UNIVersia</h1>
          <img src="img/Logo.png" class="imagen" alt="...">
        </div>
        <hr class="border border-dark border-2 w-75 mx-auto fs-4 mx-lg-0 ">
        <p class="w-75 mx-auto fs-4 mx-lg-0">En UNIVersia conéctate con tu futuro universitario: Descubre la universidad perfecta para ti en nuestra red social.</p>
      </div>
      <!-- form card -->
      <div style="max-width: 28rem; width: 100%">
        <!-- login form -->
        <!-- first was form tag -->
        <div class=" shadow rounded-5 p-3 input-group-lg inicio">
          <h1>Iniciar sesión</h1>
          <input type="email" class="form-control my-4" placeholder="Correo electrónico/teléfono" />
          <input type="password" class="form-control my-4" placeholder="Contraseña" />
          <a href="./feed.html"><button class="btn btn-primary w-100 my-3 boton_iniciar">Iniciar</button></a>
          <a href="#" class="text-decoration-none text-center contraseña_olvido"><p>Olvidaste tu contraseña</p></a>
          <!-- create form -->
          <hr />
          <div class="text-center my-4">
            <button class="btn btn-success btn-lg boton_verde" type="button" data-bs-toggle="modal" data-bs-target="#createModal">Registrarse</button>
          </div>
          <!-- create modal Infromación personal-->
          <div class="modal fade" id="" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content hw">
                <!-- head -->
                <div class="modal-header">
                  <div>
                    <span class="text-muted fs-7">Paso 2 de 4</span>
                    <h2 class="modal-title" id="exampleModalLabel">Información personal</h2>
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body -->
                <div class="modal-body">
                  <form>
                    <!-- names -->
                    <input type="text" class="form-control my-3" placeholder="Nombre(s)" />
                    <div class="row">
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Apellido paterno" />
                      </div>
                      <div class="col">
                        <input type="text" class="form-control" placeholder="Apellido Materno" />
                      </div>
                    </div>
                    <!-- teléfono -->
                    <input type="gmail" class="form-control my-3" placeholder="Número de teléfono" />
                    <!-- Lugar de origen -->
                    <div class="row my-3">
                      <div class="col">
                        <select class="form-select">
                          <option selected> País </option>
                          <option value="1">México</option>
                          <option value="2">España</option>
                          <option value="3">EUA</option>
                        </select>
                      </div>
                      <div class="col">
                        <select class="form-select">
                          <option selected> Estado </option>
                          <option value="1">Monterrey</option>
                          <option value="2">Quintana Roo</option>
                          <option value="3">Merida</option>
                        </select>
                      </div>
                    </div>
                    <!-- Lugar de Origen -->
                    <div class="row my-3">
                      <div class="col">
                        <select class="form-select">
                          <option selected> Ciudad </option>
                          <option value="1">Chetumal</option>
                          <option value="2">Bacalar</option>
                          <option value="3">Cancún</option>
                        </select>
                      </div>
                      <div class="col">
                        <select class="form-select">
                          <option selected> Municipio </option>
                          <option value="1">Othon P.blanco</option>
                          <option value="2">Bacalar</option>
                          <option value="3">Benito Juarez</option>
                        </select>
                      </div>
                    </div>
                    <!-- Fecha de nacimiento -->
                    <div class="row my-3">
                      <span class="text-muted fs-7">Fecha de nacimiento <i class="fas fa-question-circle" data-bs-toggle="popover" type="button" data-bs-content=" Esta información no sera publica "></i></span>
                      <div class="col">
                        <select class="form-select" name="dia" id="dia">
                          <option selected> Dia </option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                          <option value="7">7</option>
                          <option value="8">8</option>
                          <option value="9">9</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                          <option value="31">31</option>
                        </select>
                      </div>
                      <div class="col">
                        <select class="form-select" name="mes" id="mes">
                          <option selected> Mes </option>
                          <option value="1">Enero</option>
                          <option value="2">Febrero</option>
                          <option value="3">Marzo</option>
                          <option value="3">Abirl</option>
                          <option value="3">Mayo</option>
                          <option value="3">Junio</option>
                          <option value="3">Julio</option>
                          <option value="3">Agosto</option>
                          <option value="3">Septiembre</option>
                          <option value="3">Octubre</option>
                          <option value="3">Noviembre</option>
                          <option value="3">Diciembre</option>
                        </select>
                      </div>
                      <div class="col">
                        <select class="form-select" name="año" id="año">
                          <option selected> Año </option>
                          <option value="2023">2023</option>
                          <option value="2022">2022</option>
                          <option value="2021">2021</option>
                          <option value="2020">2020</option>
                          <option value="2019">2019</option>
                          <option value="2018">2018</option>
                          <option value="2017">2017</option>
                          <option value="2016">2016</option>
                          <option value="2015">2015</option>
                          <option value="2014">2014</option>
                          <option value="2013">2013</option>
                          <option value="2012">2012</option>
                          <option value="2011">2011</option>
                          <option value="2010">2010</option>
                          <option value="2009">2009</option>
                          <option value="2008">2008</option>
                          <option value="2007">2007</option>
                          <option value="2006">2006</option>
                          <option value="2005">2005</option>
                          <option value="2004">2004</option>
                          <option value="2003">2003</option>
                          <option value="2002">2002</option>
                          <option value="2001">2001</option>
                          <option value="2000">2000</option>
                        </select>
                      </div>
                    </div>
                    <!-- gender -->
                    <div class="row my-3">
                      <span class="text-muted fs-7">Genero <i class="fas fa-question-circle" data-bs-toggle="popover" type="button" data-bs-content=" Selecciona 'No binario' si prefieres no especificarlo "></i></span>
                      <div class="col">
                        <div class="border rounded p-2">
                          <label class="form-check-label" for="flexRadioDefault1">Hombre </label>
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" />
                        </div>
                      </div>
                      <div class="col">
                        <div class="border rounded p-2">
                          <label class="form-check-label" for="flexRadioDefault1">Mujer </label>
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                        </div>
                      </div>
                      <div class="col">
                        <div class="border rounded p-2">
                          <label class="form-check-label" for="flexRadioDefault1">No binario </label>
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" />
                        </div>
                      </div>
                    </div>
                    <!-- btn -->
                    <div class="text-center mt-4">
                      <button type="button" class="btn btn-success btn-lg boton_verde" data-bs-dismiss="modal" data-bs-target="#create">Siguente</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- modal end -->

          <!-- create modal Registrar cuenta-->
          <div class="modal fade" id="" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content hw">
                <!-- head -->
                <div class="modal-header">
                  <div>
                    <span class="text-muted fs-7">Paso 1 de 4</span>
                    <h2 class="modal-title" id="exampleModalLabel">Registrar cuenta</h2>
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body -->
                <div class="modal-body">
                  <form>
                    <!-- Nombre de usuario -->
                    <input type="text" class="form-control my-3" placeholder="Nombre de usuario" />

                    <!-- Correo electrónico / teléfono -->
                    <input type="gmail" class="form-control my-3" placeholder="Correo electrónico" />

                    <!-- Contraseña -->
                    <input type="password" class="form-control my-3" placeholder="Contraseña" />

                    <!-- Confirmar Contraseña -->
                    <input type="password" class="form-control my-3" placeholder="Confirmar contraseña" />

                    <!-- btn -->
                    <div class="text-center mt-4">
                      <button type="button" class="btn btn-success btn-lg boton_verde" data-bs-dismiss="modal">Siguente</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- modal end -->

          <!-- create modal Perfil academico-->
          <div class="modal fade" id="" tabindex="-1" aria-labelledby="" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content hw">
                <!-- head -->
                <div class="modal-header">
                  <div>
                    <span class="text-muted fs-7">Paso 3 de 4</span>
                    <h2 class="modal-title" id="exampleModalLabel">Perfil academico</h2>
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body -->
                <div class="modal-body">
                  <form>
                    <!-- Nombre de usuario -->
                    <input type="text" class="form-control my-3" placeholder="Bachillerato de procedencia" />

                    <!-- Nombre de usuario -->
                    <input type="text" class="form-control my-3" placeholder="Especialidad" />

                    <!-- btn -->
                    <div class="text-center mt-4">
                      <button type="button" class="btn btn-success btn-lg boton_verde" data-bs-dismiss="modal">Siguente</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- modal end -->

          <!-- create modal Foto de perfil-->
          <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content hw">
                <!-- head -->
                <div class="modal-header">
                  <div>
                    <span class="text-muted fs-7">Paso 4 de 4</span>
                    <h2 class="modal-title" id="exampleModalLabel">Foto de perfil</h2>
                  </div>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <!-- body -->
                <div class="modal-body">
                  <form>
                    <div class="img-area">
                      <i class='bx bx-upload icon'></i>
                      <h3 class="text-muted fs-7">Selecciona una imagen. <span>La imagen no debe superar los 2 MB</span></h3>
                      <img src="img/usuario3.png" alt="">
                    </div>
                    <button class="seleccion-img">Cambiar avatar/Subir imagen</button>
                    <div class="omitir_contenido">
                      <button class="omitir">Omitir</button>
                    </div>
                    <!-- btn -->
                    <div class="text-center mt-4">
                      <button type="button" class="btn btn-success btn-lg boton_verde" data-bs-dismiss="modal">Finalizar</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <!-- modal end -->

        </div>
        <!-- tag 
        <div class="my-5 pb-5 text-center">
          <p class="fw-bold"><a href="#" class="text-decoration-none text-dark">Createa a Page</a> <span class="fw-normal">for a celebrity, band or business.</span></p>
        </div>
      </div>
    </div>
       Footer
    <footer class="bg-white p-1 text-muted">
      <div class="container">
         language
        <div class="d-flex flex-wrap">
          <p class="mx-2 fs-7 mb-0">English (US)</p>
          <p class="mx-2 fs-7 mb-0">Tiếng Việt</p>
          <p class="mx-2 fs-7 mb-0">中文(台灣)</p>
          <p class="mx-2 fs-7 mb-0">한국어</p>
          <p class="mx-2 fs-7 mb-0">日本語</p>
        </div>
        <hr />
         actions 
        <div class="d-flex flex-wrap">
          <p class="mx-2 fs-7 mb-0">Sign Up</p>
          <p class="mx-2 fs-7 mb-0">Login</p>
          <p class="mx-2 fs-7 mb-0">Messenger</p>
          <p class="mx-2 fs-7 mb-0">Facebook Lite</p>
          <p class="mx-2 fs-7 mb-0">Watch</p>
        </div>
         copy 
        <div class="mt-4 mx-2">
          <p class="fs-7">Flexbook &copy; 2021</p>
        </div>
      </div>
    </footer>
  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
