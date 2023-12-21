<x-layout-backend>
 <!-- Content -->

 <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tareas/</span> Editar</h4>

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
            <h5 class="mb-0">Editar Tarea</h5>
            <small class="text-muted float-end">Datos</small>
          </div>
          <div class="card-body">
            <form method="POST" action="{{ route('tasks.update', ['id' => $task->id]) }}">
              @csrf
              <input type="hidden" class="form-control" id="proyect_id" name="proyect_id"  value="{{$task->proyect->id}}"/>
                <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="titulo">Titulo</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nombre del task" value="{{$task->titulo}}" required/>
                  @error('titulo')
                    <div class="alert alert-danger" role="alert">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="titulo">Fecha Inicio</label>
                <div class="col-md-10">
                    <input
                    class="form-control"
                    type="date"
                    value="{{$task->fecha_inicio}}"
                    id="fecha_inicio" 
                    name="fecha_inicio"
                    />
                    @error('fecha_inicio')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="descripcion" required>Descripción</label>
                <div class="col-sm-10">
                  <textarea
                    id="descripcion"
                    class="form-control"
                    placeholder="Agrega una descripción"
                    aria-label="Agrega una descripción"
                    aria-describedby="descripcion"
                    name="descripcion"
                  >{{$task->descripcion}}</textarea>
                    @error('descripcion')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label class="col-sm-2 col-form-label" for="statu_id" required>Estado</label>
                <div class="col-sm-10">
                    <select class="form-select" id="statu_id" name="statu_id" aria-label="Seleccione un Estado">
                      <option value="">Seleccione un estado</option>
                      @foreach ($estados as $estado)
                        <option value="{{$estado->id}}"  @if($estado->id == $task->statu_id) selected  @endif >{{$estado->estado}}</option>
                      @endforeach
                    </select>
                    @error('statu_id')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
              </div>
              <div class="row justify-content-end">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">Send</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- / Content -->
</x-layout-backend>