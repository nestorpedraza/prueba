<x-layout-backend>
    <!-- Content -->
   
    <div class="container-xxl flex-grow-1 container-p-y">
       <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Proyectos/</span> Crear</h4>
   
       <!-- Basic Layout & Basic with Icons -->
       <div class="row">
           @if(session('status'))
               <div class="alert alert-success" role="alert">{{ session('status') }}</div>
           @endif
           <div class="demo-inline-spacing">
               <a type="button" href="{{route('proyects.index')}}" class="btn btn-secondary">Regresar</a>
           </div>
         <!-- Basic Layout -->
         <div class="col-xxl">
           <div class="card mb-4">
             <div class="card-header d-flex align-items-center justify-content-between">
               <h5 class="mb-0">Crear Proyecto</h5>
               <small class="text-muted float-end">Datos</small>
             </div>
             <div class="card-body">
               <form method="POST" action="{{ route('proyects.store') }}">
                 @csrf
                   <div class="row mb-3">
                   <label class="col-sm-2 col-form-label" for="titulo">Titulo</label>
                   <div class="col-sm-10">
                     <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nombre del proyecto" value="" required/>
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
                       value=""
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
                     ></textarea>
                       @error('descripcion')
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