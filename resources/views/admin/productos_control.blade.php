@extends('layouts.app2')

@section('content')
<main>
<div class="container mt-5">
    <div class="contenido row justify-content-center" >
                
        <div class="col-md-7">
                
            <div class="contenedor_datos card md-6" style="width: 50rem;">
                <div class="carta card-header" >
                    Productos 
                </div>
                <br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <a type="button" href="{{route('agregar_producto')}}" class="btn btn-sm btn-outline-success">Agregar Producto</a>
                    <br>
                </div>
                <div class="contenedor_datos md-4 p-4">
                <table class="table table-light table-striped">
                        <thead>
                            <tr>
                            <th scope="col"></th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Código</th>
                            <th scope="col">Material</th>
                            <th scope="col">Medida</th>
                            <th scope="col">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$product->tipo}}</td>
                            <td>{{$product->codigo}}</td>
                            <td>{{$product->material}}</td>
                            <td>{{$product->medida}}</td>
                            <td>
                            <div class="btn-group justify-content-center">	
                            <!-- <div> -->
                                <!-- <input type="hidden" name="product_id" value="{{$product->_id}}"> -->
                                <a  id='editar'  type="button" class="btn btn-sm btn-outline-primary" href="">
                                    Editar
                                </a>
                            </div>
                            <form action="{{route('eliminar_producto')}}" method="POST" >
                                @csrf
                                <div class="btn-group">
                                    <input type="hidden" name="product_id" value="{{$product->_id}}">
                                    <button type="submit" class="btn btn-sm btn-outline-danger">Eliminar</button>
                                </div>
                            </form>
                            </div>  
                            </td>
                            </tr> 
                            @endforeach  
                        </tbody>
                    </table>
                    <!-- <form  method="POST" > -->
                        
                    <!-- </form> -->
                </div>
                <!-- @csrf -->
                <!-- <div class="btn-group"> -->
                    
                <!-- </div> -->
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