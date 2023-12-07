@extends('layouts.plantilla')
@section('content')

<main>
  <div class="container-fluid mt-5 mb-5 d-flex flex-column justify-content-center">

    <div class=" col-12 texto admin mb-5 text-center" >
      <h2 class="display-4">Administrador</h2>
    </div>

    <div class="container col-10 d-flex flex-row">
      
      <div class="container col-8">
        <div class="card mb-3 bienvenido">
          <div class="card-body bienvenido-card text-center  d-flex flex-column justify-content-center">
            <h5 class="display-5">Bienvenido</h5>
            <p class="card-text text-center">Que tengas una muy buena jornada de trabajo</p>
          </div>
        </div>
      </div>

      <div class="container col-4">
        <div class="container d-flex flex-column gap-5">

          <a class="derivacion" href=" {{ route('registerAdmin')}} ">
            <div class="card derivacion-card">
              <div class="card-body derivacion-card-body">
                <h5 class="card-title fw-semibold">Agendar Cita</h5>
                <p class="card-text">Agenda de cita conociendo el id del paciente. En caso no cuente con id, puede crearlo en la interfaz principal.</p>
              </div>
            </div>
          </a>
          
          <a class="derivacion" href="{{ route('citasAdmin')}} ">
            <div class="card derivacion-card">
              <div class="card-body derivacion-card-body">
                <h5 class="card-title fw-semibold">Gestionar Citas</h5>
                <p class="card-text">Visualiza todas las citas registradas, tanto pendientes como atendidas desde la fecha actual.</p>
              </div>
            </div>
          </a>
          
        </div>
        
      </div>


      

    </div>

  </div>
</main>

@endsection
