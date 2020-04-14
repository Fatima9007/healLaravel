 @extends('web')

@section('content')
<form  action="{{url('/Usuario')}}" method="POST" enctype="multipart/form-data">
{{csrf_field() }}

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
                        <th scope="col"><label for="foto">{{'foto'}}</label></th>
                        <th scope="col"><input  type="file" name="foto" id="foto" value=""></th>
                    </tr>
                    
                    <tr>
                       <th scope="col"> <label for="cedula">{{'cedula'}}</label></th>
                       <td scope="col"> <input  type="text" name="cedula" id="cedula" value=""></td>
                    </tr>

                    <tr>
                        <th scope="col"><label for="nombre">{{'nombre'}}</label></th>
                        <th scope="col"><input  type="text" name="nombre" id="nombre" value=""></th>
                    </tr>
                    <tr>
                        <th scope="col"><label for="Apaterno">{{'Apaterno'}}</label></th>
                        <th scope="col"><input  type="text" name="Apaterno" id="Apaterno" value=""></th>
                    </tr>
                    <tr>
                        <th scope="col"><label for="Amaterno">{{'Amaterno'}}</label></th>
                        <th scope="col"><input  type="text" name="Amaterno" id="Amaterno" value=""></th>
                    </tr>
                    <tr>
                        <th scope="col"><label for="Especialidad">{{'Especialidad'}}</label></th>
                        <th scope="col"><input  type="text" name="Especialidad" id="Especialidad" value=""></th>
                    </tr>
                    <tr>
                        <th scope="col"><label for="EspecialidadAdd">{{'EspecialidadAdd'}}</label></th>
                        <th scope="col"><input  type="text" name="EspecialidadAdd" id="EspecialidadAdd" value=""></th>
                    </tr>
                    <tr>
                        <th scope="col"><label for="Clinica">{{'Clinica'}}</label></th>
                        <th scope="col"><input  type="text" name="Clinica" id="Clinica" value=""></th>
                    </tr>

                    <tr>
                        <th scope="col"> <label for="email">{{'e-mail'}}</label></th>
                        <th scope="col"> <input  type="email" name="email" id="email" value=""></th>
                    </tr>
                    <tr>
                        <th scope="col"> <label for="Telefono_Emergencia">{{'Telefono de Emergencia'}}</label></th>
                        <th scope="col"> <input  type="text" name="Telefono_Emergencia" id="Telefono_Emergencia" value=""></th>
                    </tr>

                    
                    <tr>
                        <td><input  type="submit" value="Guardar"></td>
                    </tr>
</form>
@endsection