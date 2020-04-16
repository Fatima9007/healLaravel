@extends('web')

@section('content')



<center>
    <div class="col-md-10">

            <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Información general</th>
                <th scope="col"></th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">Cedula</th>
                    <td>{{ auth()->user()->Cedula}}</td>
                </tr>

                <tr>
                    <th scope="row">Nombre (s)</th>
                    <td>{{ auth()->user()->name}}</td>
                    
                </tr>

                <tr>
                    <th scope="row">Apellido Paterno</th>
                    <td>{{ auth()->user()->Apellido_Paterno}}</td>
         
                </tr>
        
                <tr>
                    <th scope="row">Apellido Materno</th>
                    <td>{{ auth()->user()->Apellido_Materno}}</td>
                </tr>

                <tr>
                    <th scope="row">Especialidad</th>
                    <td>{{ auth()->user()->Especialidad}}</td>
                </tr>

                <tr>
                    <th scope="row">Especialidad  Adicional</th>
                    <td>{{ auth()->user()->Especialidad_Adicional}}</td>
                </tr>

                <tr>
                    <th scope="row">Clinica</th>
                    <td>{{ auth()->user()->Clinica}}</td>
                </tr>
                <tr>
                    <th scope="row">Núm. Telefónico</th>
                    <td>{{ auth()->user()->Num_Telefonico}}</td>
                </tr>

                <tr>
                    <th scope="row">E-Mail</th>
                    <td>{{ auth()->user()->email}}</td>
                </tr>
            </tbody>
        </table>
        <td><button type="button" class="btn btn-primary">Editar</button></td>
    </div>

    </center>
@endsection