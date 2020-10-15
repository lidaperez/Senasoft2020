@extends('admin.layouts.app')
@section('content')
<div class="row align-items-center mb-3">
    <div class="col-8 offset-2 offset-lg-2">
        <h3 class="card-title">Gestionar Productos</h3>
    </div>
    <div class="col-1 offset-1">
        <a href="{{route('bodega.producto.create', $id)}}" class="btn btn-lg float-right">
            <i class="fas fa-plus-circle fa-2x" data-toggle="tooltip" id="icono-v" title="Registrar Productos"></i>
        </a>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-12">
        @if(count($productos)>=1)
            <div class="card card-outline card-sena elevation-2">
                <div class="card-body">
                    <!-- Tabla de registros -->
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-header">
                                <tr>
                                    <th>N°</th>
                                    <th class="text-center">Producto</th>
                                    <th class="text-center">Codigo de Barras</th>
                                    <th class="text-center">Descripción</th>
                                    <th class="text-center">Categoria</th>
                                    <th class="text-center">Acciones</th>
                                </tr>
                            </thead>
                            <tbody class="table-body">
                                @foreach ($productos as $producto)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$producto->producto->producto}}</td>
                                        <td class="text-center">{{$producto->producto->cod_barras}}</td>
                                        <td class="text-center">{{$producto->producto->descripcion}}</td>
                                        <td class="text-center">{{$producto->producto->categoria}}</td>

                                        <td class="text-center align-middle">
                                            <div class="row justify-content-center text-center">
                                                <div class="col-3">
                                                    <a href="" type="button">
                                                        <i class="fas fa-eye" data-toggle="tooltip" title="Detalle Producto"></i>
                                                    </a>
                                                </div>
                                                <div class="col-3">
                                                    <a href="" type="button">
                                                        <i class="fas fa-edit" data-toggle="tooltip" title="Actualizar Producto"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="float-right">
                            {{$productos->links()}}
                        </div>
                    </div>
                </div>
            </div>
        @else
            <h4 class="mt-5 text-center">No hay productos registrados</h4>
        @endif
    </div>
</div>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection
