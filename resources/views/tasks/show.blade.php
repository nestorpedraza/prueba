<x-layout-backend>
 <!-- Content -->

 <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tareas/</span> Detalles</h4>
    <!-- Basic Layout & Basic with Icons -->
    <div class="row">
        @if(session('status'))
            <div class="alert alert-success" role="alert">{{ session('status') }}</div>
        @endif
        <div class="demo-inline-spacing">
            <a type="button" href="{{ url('/taskindex/'.$task->proyect->id) }}" class="btn btn-secondary">Regresar</a>
        </div>
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <h5 class="card-header">Proyecto: {{$task->proyect->titulo}}</h5>
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0"> Tarea Detalle</h5>
            <small class="text-muted float-end">Datos</small>
          </div>
          <div class="card-body">
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Titulo</label>
                <div class="col-sm-10">
                 <label class="col-sm-10 col-form-label">{{$task->titulo}}</label>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Fecha Inicio</label>
                <div class="col-md-10">
                    <label class="col-sm-10 col-form-label">{{$task->fecha_inicio}}</label>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Descripción</label>
                <div class="col-sm-10">
                  <label class="col-sm-10 col-form-label">{{$task->descripcion}}</label>
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label">Estado</label>
                <div class="col-sm-10">
                    <label class="col-sm-10 col-form-label">{{$task->statu->estado}}</label>
                </div>
              </div>
          </div>
        </div>
      </div>
      <!-- Basic Layout -->
      <div class="col-xxl">
        <div class="card mb-4">
          <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0"> Commentarios</h5>
            <small class="text-muted float-end">Datos</small>
          </div>
          <div class="card-body">
              <div class="row mb-3">
                <div class="col-sm-12">
                  <a type="button" href="{{ url('/commentcreate/'.$task->id) }}" class="btn btn-info">Crear Comentario</a>
                </div>
              </div>
              @foreach ($task->comment as $comment)
                <div class="row mb-3">
                  <div class="card shadow-none bg-transparent border border-info mb-3">
                    <div class="card-body">
                      <ul class="list-unstyled users-list m-0 avatar-group d-flex align-items-center">
                        <li
                        data-bs-toggle="tooltip"
                        data-popup="tooltip-custom"
                        data-bs-placement="top"
                        class="avatar avatar-xs pull-up"
                        title="Lilian Fuller"
                        >
                        <img src="../assets/img/avatars/5.png" alt="Avatar" class="rounded-circle" />
                        </li>
                      </ul>
                      <small class="card-title">{{$comment->user->name}}</small>
                      <small>(<strong>creado: {{$comment->created_at}}</strong>)</small>
                      <p class="card-text"><div class="alert alert-secondary" role="alert">{{$comment->comentario}}</div></p>
                    </div>
                  </div>
                </div>
              @endforeach
              
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / Content -->
</x-layout-backend>