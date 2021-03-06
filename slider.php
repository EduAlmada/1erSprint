<div class="navspacer p-4"></div> <!-- Separador para que no tape el fixed-top -->
<!--carrusel-->
<div class="bd-example">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/Camperas1b.jpg" class="d-block w-100" alt="first slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Sacos de calidad</h5>
                <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Camperas2b.jpg" class="d-block w-100" alt="second slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Sobretodos</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/Camperas3b.jpg" class="d-block w-100" alt="third slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
<!--segundo navbar para las categorías-->
<main>
    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light mdb-color lighten-3 mt-3 mb-5">
        <span class="navbar-brand">Categorías de Productos:</span>
        <!-- botón hamburguesa en collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
        aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="basicExampleNav">
            <!-- los links de las categorías -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#">Sacos
                    <span class="sr-only">(current)</span>
                </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Blazers</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Chalecos</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Varios</a>
                </li>
            </ul>
            <!-- boton para buscar-->
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Buscar</button>
            </form>
        </div>
    </nav>