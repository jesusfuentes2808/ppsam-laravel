<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Checkout example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body class="bg-light">

<div class="container">
    <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg"
             alt="" width="72" height="72">
        <h2>Agregar Producto</h2>
        <p class="lead">
            Agregar productos
        </p>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="{{route('product.index')}}" style="float: left">Volver</a>
        </div>
    </div>
    <div class="row">

        <form action="{{route('product.store')}}" method="post">
            @csrf
            <div class="form-group col-md-12">
                <label for="inputEmail4">Nombre</label>
                <input name="name" type="text" class="form-control" id="inputEmail4" placeholder="Nombre">
            </div>


            <div class="form-group col-md-12">
                <label for="inputEmail4">Stock</label>
                <input name="stock" type="number" class="form-control" id="inputEmail4" placeholder="Stock">
            </div>


            <div class="form-group col-md-12">
                <label for="inputEmail4">Precio</label>
                <input name="price" type="number" class="form-control" id="inputEmail4" placeholder="Precio">
            </div>


            <div class="form-group col-md-12">
                <label for="inputEmail4">Local</label>
                <select name="local_id" class="form-control">
                    @foreach($locals as $local)
                        <option value="{{$local->id}}">{{$local->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group col-md-12">
                <label for="inputEmail4">Estado</label>
                <select name="status" class="form-control">
                    <option value="1">Activo</option>
                    <option value="0">Inactivo</option>
                </select>
            </div>

            <div class="form-group col-md-12">
                <button type="submit" class="btn btn-primary" style="margin-top: 10px">Registrar</button>
            </div>

        </form>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">&copy; 2017-2018 Company Name</p>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Privacy</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Support</a></li>
        </ul>
    </footer>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>
</html>
