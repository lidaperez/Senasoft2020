@extends('admin.layouts.app')
@section('content')
<div class="row">
    <div class="col-12 text-center">
        <h3 class="card-title mb-4">Gestionar Proveedores</h3>
    </div>

</div>
<div class="row justify-content-center">
    <div class="col-12">
        @if(count($proveedores)>=1)
            <div class="card card-outline card-sena elevation-2">
                <div class="card-body">
                    <!-- Tabla de registros -->
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-header">
                                <tr>
                                    <th>N°</th>
                                    <th class="text-center">Razon social</th>
                                    <th class="text-center">nit</th>
                                    
                                </tr>
                            </thead>
                            <tbody class="table-body">
                                @foreach ($proveedores as $proveedor)
                                    <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$proveedor->razon_social}}</td>
                                        <td class="text-center">{{$proveedor->nit}}</td>
                                        

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
                            {{$proveedores->links()}}
                        </div>
                    </div>
                </div>
            </div>
        @else
            <h4 class="mt-5 text-center">No hay Proveedores registrados</h4>
        @endif
    </div>
</div>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
@endsection
