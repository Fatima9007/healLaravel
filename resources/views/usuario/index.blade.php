@extends('web')

@section('content')


@foreach ( $usuarios as $usuario)
    

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
                        <th scope="row">#</th>
                        <td> {{$loop->iteration}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Cedula</th>
                        <td>{{ $usuario->cedula}}</td>
                    </tr>

                    <tr>
                        <th scope="row">Nombre (s)</th>
                        <td>{{ $usuario->nombre}}</td>
                        
                    </tr>

                    <tr>
                        <th scope="row">Apellido Paterno</th>
                        <td>{{ $usuario->Apaterno}}</td>
            
                    </tr>
            
                    <tr>
                        <th scope="row">Apellido Materno</th>
                        <td>{{ $usuario->Amaterno}}</td>
                    </tr>

                    <tr>
                        <th scope="row">Especialidad</th>
                        <td>{{ $usuario->Especialidad}}</td>
                    </tr>

                    <tr>
                        <th scope="row">Especialidad  Adicional</th>
                        <td>{{ $usuario->EspecialidadAdd}}</td>
                    </tr>

                    <tr>
                        <th scope="row">Clinica</th>
                        <td>{{ $usuario->Clinica}}</td>
                    </tr>

                    <tr>
                        <th scope="row">E-Mail</th>
                        <td>{{ $usuario->email}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Núm. Telefónico</th>
                        <td>{{ $usuario->Telefono_Emergencia}}</td>
                    </tr>
                    <tr>
                        <th scope="row">Fotografia</th>
                        <td>{{ $usuario->foto}}</td>
                    </tr>
                                   
                </tbody>
            
                
            </table>
             
        </div>
         <form method="post" action="{{url('/Usuario/'.$usuario->id)}}">
            {{csrf_field()}}
            {{method_field('DELETE')}} 
            <button type="submit" onclick="return confirm ('¿Usted desea eliminar el Usuario?')" class="btn btn-primary">Borrar</button></td>  
            </form>
                       
        <a href="{{url('/Usuario/'.$usuario->id.'/edit')}}">Editar</a>

        </center>
@endforeach
@endsection