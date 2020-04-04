<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <link rel="stylesheet" type="text/css" href="/css/web.css">

    <title>Healt</title>
  </head>

  <body>
  <header>

    <center> <h1 class="titulo" id="44">HEALTLSTLI</h1></center></div>
    </header>
      <br>

      <!-- Image and text -->
      
            
            <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-top">
              <a class="navbar-brand " href="#1"> <img src="/docs/4.4/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt=""> HEALTLSTLI</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                  <li class="nav-item active"><a class="nav-link" href="#2">Servicios</a></li>
                  <li class="nav-item active"><a class="nav-link" href="#3">Empresa Netzasoft</a></li>
                
                </ul>
                <span class="navbar-text"> 
                <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ route('login') }}">Iniciar Sesion</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Registro</a>
                            @endif
                        @endauth
                    </div>
                @endif
                </span>
              </div>
          </nav>
        </div>
        
        <br>
      
     
      <!-- Carousel
    ================================================== -->
    
    <center>
    <div class="col-md-8">
    
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="/css/image/01.jpg" class="d-block w-100" alt="...">
              </div>
                <div class="carousel-item"> <img src="/css/image/02.jpg" class="d-block w-100" alt="...">
                </div>
                  <div class="carousel-item">
                    <img src="/css/image/04.jpg" class="d-block w-100" alt="...">
                  </div>
            </div>
                  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
            </div>
            
            </div>
      </center>
  <!-- /.carousel -->
<!-- information -->
<center>

        <section class="one">
            <h1 class="titulo1" id="1"><a name="01">  Healtlstli</a></h1>

            <br>
            <br> Es una aplicación web hecha a la medida
            <br> Para el control de los pacientes.
            <br> En la cual puede almacenar los datos de sus pacientes
            <br> Y consultarlos desde cualquier dispositivo con conexión
            <br> A internet
            <br> La empresa Cliente es Therapeutica
            <br> Clínica de Terapia Física ubicada en Puebla.
            <br> calle 16 de Septiembre 1713
            <br> Col. El Carmen, 72530
            <br> Puebla, Pue.
            <br> conozca mas en:
            <br>
            <div class="bot">
                <a href="https://www.therapeuticapuebla.com/"><img class="img" src="CSS/Image/thra.webp"></a>
            </div>
            <br>
            <div class="bot">
                <a href="#44"><img class="img" src="CSS/Image/bot.jpg"></a>
            </div>
        </section>
        <br>
        <br>
        <br>
        <section class="one">
            <h1 class="titulo1" id="2"><a name="02"> Servicios</a></h1>
            <br> Los servicios que ofrece esta plataforma son
            <br> • Perfil de usuario:
            <br> En el cual usted puede llevar su curriculum vitae y posteriormente, ir actualizando si así lo desea<br>
            <br> • Alta de Nuevos pacientes:
            <br> En la cual usted puede agregar a un nuevo paciente cuando usted así lo desee, podrá hacerlo desde
            <br> cualquier dispositivo móvil
            <br>
            <br> • Lista de paciente:
            <br> Usted podrá consultar rápida y eficazmente su lista de pacientes y en esta misma podrá ir agregando
            <br> información sobre sus avances cuando usted lo desee.
            <br>
            <br> ¿Cómo funciona?
            <br> Para comenzar un usuario (fisioterapeuta) hará un registro en la aplicación web proporcionando sus
            <br> datos e información la cual compondrán su perfil (el Fisioterapeuta será libre de escoger su nombre
            <br>de usuario).

            <br>Después del registro el usuario podrá visualizar una interfaz gráfica en la cual podrá observar un
            <br> menú de herramientas:
            <br>
            <br>

            <ul>
                <li>Perfil </li>
                <li>Agregar Nuevo </li>
                <li>Lista de Paciente.</li>
            </ul>
            <br> <strong>Perfil:</strong>
            <br>En la sección de Perfil el usuario podrá observar su información la cual podrá modificar.
            <br> <strong>Nuevo Paciente:</strong>
            <br>En la sección de agregar Nuevo Paciente, vera una lista con formularios en la cual llenara con los
            <br>datos del expediente medico
            <br> <strong>Lista de Pacientes:</strong>
            <br>En la sección de Lista de Paciente, el usuario Podrá observar una lista que cuenta con los nombres de
            <br> los pacientes. La cual al dar doble clip sobre un nombre podrá mostrar su información, más adelante
            <br> se podrá observar un botón, en el cual dirá “editar” el cual nos permitirá modificar la información
            <br> del paciente.
            <br>
            <br>
            <div class="bot">
                <a href="#44"><img class="img" src="CSS/Image/bot.jpg"></a>
            </div>
            <br>
            <br>

        </section>
        <br>
        <br>
        <section class="one">


            <h1 class="titulo1" id="3"> <a name="03"> Healtlstli</a></h1>
            <p>

                <br>
                <section class="04"> Para llegar a un acuerdo en la compra de nuestro producto
                    <br> puedes llamar a los siguientes números de teléfono nos pondremos en contacto
                    <br> inmediatamente o puedes mandar un correo a: <em>amarotef.90@gmail.com</em></section>
                <br>
            </p>



            </strong>
        </section>
        <br>
        <br>
        <br>

        <section class="one">

            <h1 class="titulo1" id="4"><a name="04"> Empresa Netzasoft </a> </h1>
            </h1>

            <br>
            <br> <strong>¿Quiénes somos?</strong>
            <br> Somos un grupo de jóvenes emprendedores capases de dar soluciones a los problemas en el área de
            <br> desarrollo de software.
            <br> Como empresa iniciamos actividades en la Universidad Tecnológica de Tecamachalco buscando
            <br> satisfacer las necesidades de la sociedad.
            <br> <strong>Misión</strong>
            <br> Ser capaces de apoyar congruentemente en el proyecto a realizar, desarrollando unas aplicaciones
            <br> web, capases, de interfaz ágil y amigable complaciendo así los requisitos que se soliciten.
            <br> <strong>Visión</strong>
            <br> El éxito en nuestra empresa, logrando ser reconocida de manera internacional y apoyando de
            <br> manera profesional el desarrollo de nuevas empresas produciendo desarrollo a la sociedad para que
            <br> esta pueda actualizarse e innovarse
            <br>
            <br> <strong> Objetivo general de la empresa</strong>
            <br>
            <br> Ser una empresa líder sobre el desarrollo de software siendo capaz de satisfacer las necesidades de
            <br> nuestros clientes.
            <br> Imponernos con una imagen novedosa y amable en el área del Desarrollo de Software, logrando
            <br> abrir numerosas sucursales en el país y entrar en más áreas de la vida cotidiana (salud, comercio,
            <br> industrias, etc.).
            <br>
            <br>
            <div class="bot">
                <a href="#44"><img class="img" src="CSS/Image/bot.jpg"></a>
            </div>
        </section>





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/web.js" type="text/javascript" charset="utf-8" ansyc defer></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

   <footer class="footer">
        <strong>
        
                Netzasoft
               <br>   Empresa desarrolladora de software.
               <br>   Desarrolladores:
               <br>   Fátima Isabel Santiago Reynoso.
               <br>   Josué Isaac Reyes Pérez.
               <br>   José Uriel Rodríguez Ramírez.
               <br>   Miguel Sánchez contreras.
               <br>   
               <br>   Yeider Yonand González Rodríguez.
               <br>   Teléfonos: (244) 249-130-73-13.
                
            </strong>

        <div class="logosub"><img class="img1" src="CSS/Image/log.png"></a>
        </div>
    </footer>

</html>