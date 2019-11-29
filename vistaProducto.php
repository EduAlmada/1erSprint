<!DOCTYPE html>
<html lang="en">
<?php include("head.php") ?>
<body>

<?php include("nav.php") ?>

<div class="navspacer p-5"></div> <!-- Separador para que no tape el fixed-top -->

<div class="container">
    <div class="row">
    <h1 class="col-12 mb-2">Detalle del producto</h1>
    <!-- foto y botones -->
    <section class="col-lg-6 col-md-6">
    <article class="col-lg-12 col-md-12 mb-2">
            <div class="card">
            <img src="img/Camperas2.jpg" class="card-img-top" alt="">
        <!--referencias debajo de la foto-->
        <div class="card-body text-center">
            <h3>Saco</h3>
            <h3>
            <strong>
                <a href="..." class="dark-grey-text">Detalle de saco
                <span class="badge badge-pill danger-color">Nuevo</span>
                </a>
            </strong>
            </h3>
        </div>
        </div>
        <p></p>
        <!-- botones -->
        <div class="col-12 text-center">
        <a href="vistaCarritoCompras.php" class="btn btn-outline-dark col-5 m-1" role="buttom" aria-pressed="true">Agregar al carrito</a>
        <button class="btn btn-outline-dark col-5 m-1" type="submit">Comprar ahora</button>
        </div>
    </article> 
    </section>
    <!-- detalle de la derecha -->
    <section class="col-lg-6 col-md-6">
    <article class="col-lg-12 col-md-12 mb-4">
        <h3>Detalle</h3>
        <div class="card-body">
        <a href="..." class="grey-text">
        <h3>Saco</h3>
        </a>
        <h3>
        <strong>
            <a href="..." class="dark-grey-text">Detalle de saco
            <span class="badge badge-pill danger-color">Nuevo</span>
            </a>
        </strong>
        </h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Culpa maiores repudiandae perspiciatis laborum sed, laboriosam tempora ducimus necessitatibus, quo adipisci quia sit esse, dolorum dolores recusandae minima rem nesciunt quod?</p>
        <h4 class="font-weight-bold blue-text">
        <strong>$920</strong>
        </h4>
        <h4>Talles:</h4>
        <ul>
            <li>SM</li>
            <li>MD</li>
            <li>LG</li>
            <li>XL</li>
        </ul>
        </div>
    </article>
    </section>
    </div>
</div>

<<?php include("footer.php") ?>
<?php include("scripts.php") ?>
</body>
</html>