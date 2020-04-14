
<form  action="{{url('/Usuario/'.$usuario->id)}}" method="POST" enctype="multipart/form-data">
{{csrf_field() }}
{{ method_field('PATCH') }}


    
    <label for="cedula">{{'cedula'}}</label>
    <input  type="text" name="cedula" id="cedula" value="{{$usuario->cedula}}">
    <br>

    <label for="nombre">{{'nombre'}}</label>
    <input  type="text" name="nombre" id="nombre" value="{{$usuario->nombre}}">
    <br>

    <label for="Apaterno">{{'Apaterno'}}</label>
    <input  type="text" name="Apaterno" id="Apaterno" value="{{$usuario->Apaterno}}">
    <br>

    <label for="Amaterno">{{'Amaterno'}}</label>
    <input  type="text" name="Amaterno" id="Amaterno" value="{{$usuario->Amaterno}}">
    <br>

    <label for="Especialidad">{{'Especialidad'}}</label>
    <input  type="text" name="Especialidad" id="Especialidad" value="{{$usuario->Especialidad}}">
    <br>

    <label for="EspecialidadAdd">{{'EspecialidadAdd'}}</label>
    <input  type="text" name="EspecialidadAdd" id="EspecialidadAdd" value="{{$usuario->EspecialidadAdd}}">
    <br>

    <label for="Clinica">{{'Clinica'}}</label>
    <input  type="text" name="Clinica" id="Clinica" value="{{$usuario->Clinica}}">
    <br>

    <label for="email">{{'e-mail'}}</label>
    <input  type="email" name="email" id="email" value="{{$usuario->email}}">
    <br>

    <label for="Telefono_Emergencia">{{'Telefono de Emergencia'}}</label>
    <input  type="text" name="Telefono_Emergencia" id="Telefono_Emergencia" value="{{$usuario->Telefono_Emergencia}}">

    <br>
    <label for="foto">{{'foto'}}</label>
    <input  type="file" name="foto" id="foto" value="{{$usuario->foto}}">
    <br>

    <input  type="submit" value="Editar">

</form>