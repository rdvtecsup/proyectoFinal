@extends('layouts.app2')

@section('content')
<main>
<div class="container mt-5">
    <div class="contenido row justify-content-center" >
        <div class="col-md-7">
            <div class="contenedor_datos card md-6" style="width: 50rem;">
                <div class="carta card-header" >
                    Clientes 
                </div>
                <div class="contenedor_datos md-4 p-4">
                    <table class="table table-light table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <!-- <th scope="col">DNI</th>
                            <th scope="col">Telefeno</th>
                            <th scope="col">Dirección</th> -->
                            <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <!-- <td>{{$user->dni}}</td>
                            <td>{{$user->telefono}}</td>
                            <td>{{$user->direccion}}</td> -->
                            <td>
                            <div class="btn-group">	
                            <a  id='editar'  type="submit" class="btn btn-sm btn-outline-secondary" href="">Editar</a>
                            <form method="POST" action="">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-secondary" id="eliminar"  onclick="return confirm('¿Borrar?');">Eliminar</button>
                            </form>
                            </div>  
                            </td>
                            </tr> 
                            @endforeach  
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