<x-layout-backend>
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tareas /</span> Lista</h4>
        <!-- Basic Bootstrap Table -->
        <div class="demo-inline-spacing">
            <a type="button" href="{{route('proyects.index')}}" class="btn btn-secondary">Regresar</a>
            <a type="button" href="{{ url('/taskcreate/'.$proyecto->id) }}" class="btn btn-primary">Nueva Tarea</a>
        </div>
        <div class="card">
            <h5 class="card-header">Proyecto: {{$proyecto->titulo}}</h5>
            
            @if(session('status'))
                <div class="alert alert-success" role="alert">{{ session('status') }}</div>
            @endif
            <div class="table-responsive text-nowrap">
            <table class="table">
                <thead>
                    <tr>
                        <th>Tarea</th>
                        <th>Creador por</th>
                        <th>Fecha fin</th>
                        <th>Fecha creacion</th>
                        <th>Fecha edicion</th>
                        <th>Usuarios</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody class="table-border-bottom-0">
                    @foreach ($tasks as $task)
                        <tr>
                            <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong>{{$task->titulo}}</strong></td>
                            <td>{{$task->user->name}}</td>
                            <td>{{$task->fecha_inicio}}</td>
                            <td>{{$task->created_at}}</td>
                            <td>{{$task->updated_at}}</td>
                            <td>
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
                                <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                title="Sophia Wilkerson"
                                >
                                <img src="../assets/img/avatars/6.png" alt="Avatar" class="rounded-circle" />
                                </li>
                                <li
                                data-bs-toggle="tooltip"
                                data-popup="tooltip-custom"
                                data-bs-placement="top"
                                class="avatar avatar-xs pull-up"
                                title="Christina Parker"
                                >
                                <img src="../assets/img/avatars/7.png" alt="Avatar" class="rounded-circle" />
                                </li>
                            </ul>
                            </td>
                            <td><span class="badge bg-label-primary me-1">{{$task->statu->estado}}</span></td>
                            <td>
                            <div class="dropdown">
                                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu">
                                    @if ($task->user_id == auth()->user()->id)
                                    <a class="dropdown-item" href="{{ url('/taskedit/'.$task->id) }}"
                                        ><i class="bx bx-edit-alt me-1"></i> Editar</a
                                    >
                                    <a class="dropdown-item" href="{{ url('/taskdestroy/'.$task->id) }}"
                                        ><i class="bx bx-trash me-1"></i> Eliminar</a
                                    >
                                    @endif

                                    <a class="dropdown-item" href="{{ url('/taskshow/'.$task->id) }}"
                                        ><i class="bx bx-task me-1"></i> Ver Detalle</a
                                    >
                                    
                                </div>
                            </div>
                            </td>
                        </tr>
                    @endforeach
                    
                </tbody>
            </table>
            </div>
        </div>
        <!--/ Basic Bootstrap Table -->
    </div>
    <!-- / Content -->
</x-layout-backend>