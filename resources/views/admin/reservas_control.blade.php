@extends('layouts.app2')

@section('content')
<main>
<div class="container mt-5">
    <div class="contenido row justify-content-center" >
        <div class="col-md-7">
            <div class="contenedor_datos card md-6" style="width: 50rem;">
                <div class="carta card-header" >
                    Reservas 
                </div>
                <div class="contenedor_datos md-4 p-4">
                    <table class="contenedor_datos table align-middle">
                        <thead class="contenedor_datos">
                            <tr class="contenedor_datos">
                                <th scope="col">#</th>
                                <th scope="col">Nombres</th>
                                <th scope="col">Apellido Paterno</th>
                                <th scope="col">Apellido Materno</th>
                                <th scope="col">Dirección</th>
                                <th scope="col">DNI</th>
                                <th scope="col">F.Nacimiento</th>
                                <th scope="col">Celular</th>
                                <th scope="col" colspan="3">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- @         -->

                            <!-- <tr>
                                <td scope="row"></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><a class="text-success" href="editar.php?codigo="><i class="bi bi-pencil"></i></a></td>
                                <td><a class="text-warning" href="agregarPedido.php?codigo="><i class="bi bi-bag-plus"></i></a></td>
                                <td><a onclick="return confirm('Estas seguro de eliminar?');" class="text-danger" href="eliminar.php?codigo=<"><i class="bi bi-trash2-fill"></i></a></td>
                            </tr> -->
                            <!-- @ -->
                        </tbody>
                    </table>
                    
                </div>
            </div>
        </div>
    <!-- Products End -->

    <!-- Back to Top -->
    <!-- <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a> -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</main>
@endsection