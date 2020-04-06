@extends('web')

@section('content')
<div class="container">
<div class="row">
    
        <p>

        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
           Información Del Paciente
        </button>
        
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
            Padecimientos y Enfermedades de la Infancia
        </button>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
           Signos Vitales
        </button>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
            Medicamentos
        </button>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
           Hábitos
        </button>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample5" aria-expanded="false" aria-controls="collapseExample">
            Cirugías y lesiones previas
        </button>
        <center>
        <div class="col">
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample6" aria-expanded="false" aria-controls="collapseExample">
            Antecedentes Familiares
        </button>
        <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample7" aria-expanded="false" aria-controls="collapseExample">
           Alergias y Vacunas
        </button>
        </p>
        </center>
 <!-- boton 1-->  
</div>
    <center>
    <div class="col-10">
        
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                   
    <div class="col-md-10">

            <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Información Del Paciente</th>
                <th scope="col"></th>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row">Nombre (s)</th>
                    <td></td>
                    
                </tr>

                <tr>
                    <th scope="row">Apellido Paterno</th>
                    <td></td>
         
                </tr>
        
                <tr>
                    <th scope="row">Apellido Materno</th>
                    <td></td>
                </tr>

                <tr>
                    <th scope="row">Genero</th>
                    <td></td>
                </tr>

                <tr>
                    <th scope="row">Edad</th>
                    <td></td>
                </tr>

                <tr>
                    <th scope="row">Peso</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Altura</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Talla</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Tipo Sanguíneo</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Nacionalidad</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Lugar de Nacimiento</th>
                    <td></td>
                </tr>
                
                <tr>
                    <th scope="row">E-Mail</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Teléfono de Emergencia</th>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    </center>

  
</div>
<!-- boton 2-->
    <center>
    <div class="col-10">
        
            <div class="collapse" id="collapseExample1">
                <div class="card card-body">
                   
    <div class="col-md-10">

        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Padecimientos y Enfermedades de la Infancia</th>
                <th scope="col"></th>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row">Mecanismo de Lesión</th>
                    <td></td>
                    
                </tr>

                <tr>
                    <th scope="row">Síntomas</th>
                    <td></td>
         
                </tr>
        
                <tr>
                    <th scope="row">¿Incrementa los síntomas?</th>
                    <td></td>
                </tr>

                <tr>
                    <th scope="row">¿Disminuye los síntomas?</th>
                    <td></td>
                </tr>

                <tr>
                    <th scope="row">Nivel de Dolor Actual</th>
                    <td></td>
                </tr>

                <tr>
                    <th scope="row">Promedio de Dolor Semanal</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Nombre Enfermedad de la Infancia</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Descripción de la Enfermedad</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Tratamiento de la Enfermedad</th>
                    <td></td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>
</center>
<!-- -->
        <!-- boton 3-->
            <center>
            <div class="col-10">
                
                    <div class="collapse" id="collapseExample2">
                        <div class="card card-body">
                        
            <div class="col-md-10">

                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">Signos Vitales</th>
                        <th scope="col"></th>

                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th scope="row">Frecuencia Cardiaca</th>
                            <td></td>
                            
                        </tr>

                        <tr>
                            <th scope="row">Frecuencia Respiratoria</th>
                            <td></td>
                
                        </tr>
                
                        <tr>
                            <th scope="row">Llenado Capilar</th>
                            <td></td>
                        </tr>

                        <tr>
                            <th scope="row">Temperatura</th>
                            <td></td>
                        </tr>

                        <tr>
                            <th scope="row">Saturación de Oxigeno</th>
                            <td></td>
                        </tr>

                        <tr>
                            <th scope="row">Tención Arterial</th>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </center>
        <!-- -->

        <!-- boton 4-->
    <center>
    <div class="col-10">
        
            <div class="collapse" id="collapseExample3">
                <div class="card card-body">
                   
    <div class="col-md-10">

        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Medicamento</th>
                <th scope="col"></th>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row">Nombre del Medicamento</th>
                    <td></td>
                    
                </tr>

                <tr>
                    <th scope="row">Frecuencia del Medicamento</th>
                    <td></td>
         
                </tr>
        
                <tr>
                    <th scope="row">Inicio del Tratamiento</th>
                    <td></td>
                </tr>

                <tr>
                    <th scope="row">Final del Tratamiento</th>
                    <td></td>
                </tr>

                <tr>
                    <th scope="row">Indicacioneso</th>
                    <td></td>
                </tr>

                <tr>
                    <th scope="row">Medico Recetador</th>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</center>
<!-- -->

        <!-- boton 5-->
    <center>
    <div class="col-10">
        
            <div class="collapse" id="collapseExample4">
                <div class="card card-body">
                   
    <div class="col-md-10">

        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Hábitos</th>
                <th scope="col"></th>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row">Fumar</th>
                    <td></td>
                    
                </tr>

                <tr>
                    <th scope="row">Cajetillas por día</th>
                    <td></td>
         
                </tr>
        
                <tr>
                    <th scope="row">Desde Cuando Fuma</th>
                    <td></td>
                </tr>

                <tr>
                    <th scope="row">Alcohol</th>
                    <td></td>
                </tr>

                <tr>
                    <th scope="row">Cantidad de Alcohol por día</th>
                    <td></td>
                </tr>

                <tr>
                    <th scope="row">Otros</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Cantidad de Agua</th>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</center>
<!-- -->

        <!-- boton 6-->
    <center>
    <div class="col-10">
        
            <div class="collapse" id="collapseExample5">
                <div class="card card-body">
                   
    <div class="col-md-10">

        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Cirugías y lesiones previas</th>
                <th scope="col"></th>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row">Número de cirugías realizadas</th>
                    <td></td>
                    
                </tr>

                <tr>
                    <th scope="row">Tiempo</th>
                    <td></td>
         
                </tr>
        
                <tr>
                    <th scope="row">Localización de lesión en el Cuerpo</th>
                    <td></td>
                </tr>

                <tr>
                    <th scope="row">Fecha de cirugía(s)</th>
                    <td></td>
                </tr>

                <tr>
                    <th scope="row">Diagnostico de cirugía</th>
                    <td></td>
                </tr>

                <tr>
                    <th scope="row">Estudios</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Tratamiento</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Complicaciones</th>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</center>
<!-- -->
        <!-- boton 7-->
    <center>
    <div class="col-10">
        
            <div class="collapse" id="collapseExample6">
                <div class="card card-body">
                   
    <div class="col-md-10">

        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Antecedentes Familiares</th>
                <th scope="col"></th>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row">Enfermedades</th>
                    <td></td>
                    
                </tr>

                <tr>
                    <th scope="row">Hábitos de los Familiares</th>
                    <td></td>
         
                </tr>
        
                <tr>
                    <th scope="row">Frecuencia de Habitos</th>
                    <td></td>
                </tr>

                <tr>
                    <th scope="row">Vía de Nacimiento</th>
                    <td></td>
                </tr>

                <tr>
                    <th scope="row">Tiempo de Gestación</th>
                    <td></td>
                </tr>

                <tr>
                    <th scope="row">Número de Hermanos</th>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row">Nota u Observaciones</th>
                    <td></td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>
</center>
<!-- -->

        <!-- boton 8-->
    <center>
    <div class="col-10">
        
            <div class="collapse" id="collapseExample7">
                <div class="card card-body">
                   
    <div class="col-md-10">

        <table class="table">
            <thead class="thead-dark">
                <tr>
                <th scope="col">Alergias y Vacunas</th>
                <th scope="col"></th>

                </tr>
            </thead>
            <tbody>

                <tr>
                    <th scope="row">Nombre de la Vacuna</th>
                    <td></td>
                    
                </tr>

                <tr>
                    <th scope="row">Descripción Vacuna</th>
                    <td></td>
         
                </tr>
        
                <tr>
                    <th scope="row">Nombre de la Alergia</th>
                    <td></td>
                </tr>

                <tr>
                    <th scope="row">Descripción de la Alergia</th>
                    <td></td>
                </tr>

                <tr>
                    <th scope="row">Tratamiento de la Alergia</th>
                    <td></td>
                </tr>

                
                
            </tbody>
        </table>
    </div>
</div>
</center>
<!-- -->
            </div>
        
    </div>
    </center>
</div>

@endsection