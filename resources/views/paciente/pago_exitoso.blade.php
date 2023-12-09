@extends ('layouts.plantilla')
@section ('content')


<main>
    
    <div class="container-fluid  pago-cont">
        <div class="d-flex justify-content-center align-items-center">
            <div class="card pago">
                <img src="{{ asset('assets/img/pago_exitoso.png')}}" class="card-img-top pago" alt="pago exitoso">
                <div class="card-body">
                  <h5 class="card-title">Pago Exitoso</h5>
                  <p class="card-text">Su pago fue exitoso, se registro su cita con exito, esperamos verlo pronto.</p>
                  <a href="{{ route('perfilPaciente') }}" class="btn btn-primary">Ver citas</a>
                </div>
            </div>
        </div>
    </div>
</main>


@endsection