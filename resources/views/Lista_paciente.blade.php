@extends('web')

@section('content')
<div class="container">
      
         <center>
         <table class="table table-dark">
      <thead>
         <tr>
            <th scope="col">Numero Id Paciente</th>
            <th scope="col">Nombre Paciente</th>
          
         </tr>
      </thead>
      <tbody>
         <tr>
            <th scope="row">1</th>
            <td>Mark Otto</td>
            <td><button type="button" class="btn btn-primary">Editar</button></td>
            
           
         </tr>
         <tr>
            <th scope="row">2</th>
            <td>Jacob Thornton</td>
            <td><button type="button" class="btn btn-primary">Editar</button></td>
           
         </tr>
        
      </tbody>
      </table>
   </div>
</div>      
   </center>
@endsection