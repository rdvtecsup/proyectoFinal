@extends('layouts.app2')

@section('content')

<div class="container-fluid" style="margin-inline-start: 350px;" >
        <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span class="bg-secondary pr-3"></span></h2>
        <div class="row px-xl-5">
            <div class="col-lg-7 mb-3">
                <div class="card">
                    <div class="card-header">Editar Producto</div>
                    <div class="card-body">
                    <br>
                        <form method="POST" action="{{ url('product/' .$product->id)}}" enctype="multipart/form-data" class="row g-3">
                            
                            @csrf
                            @method("PATCH")
                            <div class="row mb-3">
                                <label for="tipo" class="col-md-4 col-form-label text-md-end">Tipo</label><br>
                                <div class="col-md-6">
                                    <input id="tipo" name="tipo" type="text" value="{{$product->tipo}}" class="form-control" name="tipo">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="codigo" class="col-md-4 col-form-label text-md-end">Código</label><br>
                                <div class="col-md-6">
                                    <input id="codigo" name="codigo" type="number" value="{{$product->codigo}}" class="form-control" name="codigo">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="imagen" class="col-md-4 col-form-label text-md-end">Imagen</label><br>
                                <div class="col-md-6">
                                    <input id="imagen" name="imagen" type="file" value="{{$product->imagen}}" class="form-control" name="imagen">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="material" class="col-md-4 col-form-label text-md-end">Material</label><br>
                                <div class="col-md-6">
                                    <input id="material" name="material" type="text" value="{{$product->material}}" class="form-control" name="material">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="medida" class="col-md-4 col-form-label text-md-end">Medida</label><br>
                                <div class="col-md-6">
                                    <input id="medida" name="medida" type="number" value="{{$product->medida}}" class="form-control" name="medida">
                                </div>
                            </div>
                            <div class="row mb-0">
                                <!-- <form action="" method="POST" > -->
                                    <div class="btn-group">
                                        <input type="submit" value="Update" class="btn btn-sm btn-outline-success"></input>
                                    </div>
                                <!-- </form> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

@endsection