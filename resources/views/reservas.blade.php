@extends('layouts.cabezera')

@section('content')
<main>

 <!-- Breadcrumb Start -->
 <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-12">
                <nav class="breadcrumb bg-light mb-30">
                    <a class="breadcrumb-item text-dark" href="#">Home</a>
                    <a class="breadcrumb-item text-dark" href="#">Productos</a>
                    <span class="breadcrumb-item active">Reservas</span>
                </nav>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Cart Start -->
    <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="form_reserves">
            <table class="table table-light table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre cliente</th>
                            <th scope="col">Tipo</th>
                            <th scope="col">Material</th>
                            <th scope="col">Medida</th>
                            <th scope="col">Fecha de reserva</th>
                            <!-- <th scope="col">Opciones</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reservas as $reserva)
                            <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$reserva->User->name}}</td>
                            <td>{{$reserva->User->email}}</td>
                            <td>{{$reserva->created_at}}</td>
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
    <!-- Cart End -->

</main>
@endsection