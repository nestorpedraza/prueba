<x-layout-backend>
    <!-- Content -->
   
    <div class="container-xxl flex-grow-1 container-p-y">
       <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tarea /</span> Crear</h4>
   
       <!-- Basic Layout & Basic with Icons -->
       <div class="row">
           @if(session('status'))
               <div class="alert alert-success" role="alert">{{ session('status') }}</div>
           @endif
           <div class="demo-inline-spacing">
               <a type="button" href="{{ url('/taskshow/'.$task->id) }}" class="btn btn-secondary">Regresar</a>
           </div>
         <!-- Basic Layout -->
         <div class="col-xxl">
           <div class="card mb-4">
            <h5 class="card-header">Tarea: {{$task->titulo}}</h5>
             <div class="card-header d-flex align-items-center justify-content-between">
               <h5 class="mb-0">Crear Comentario</h5>
               <small class="text-muted float-end">Datos</small>
             </div>
             <div class="card-body">
               <form method="POST" action="{{ route('comments.store') }}">
                 @csrf
                 <input type="hidden" class="form-control" id="task_id" name="task_id"  value="{{$task->id}}"/>
                 <div class="row mb-3">
                   <label class="col-sm-2 col-form-label" for="comentario">Comentario</label>
                   <div class="col-sm-10">
                     <textarea
                       id="comentario"
                       class="form-control"
                       placeholder="Agrega un cmentario"
                       aria-label="Agrega un comentario"
                       aria-describedby="comentario"
                       name="comentario"
                       required
                     ></textarea>
                       @error('comentario')
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