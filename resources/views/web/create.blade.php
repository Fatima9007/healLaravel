 <form  action="{{url('/Usuario')}}" method="post" enctype="multipart/form-data">
 {{csrf_field() }}
 <label for="Nombre">{{'Nombre'}}</label>
 <input  type="text" name="Nombre" id="Nombre" value="">
 <input  type="submit" value="Agregar">
</form>