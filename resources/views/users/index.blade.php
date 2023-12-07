<x-layout-front>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register Card -->
            <div class="card">
            <div class="card-body">
                <!-- Logo -->
                <div class="app-brand justify-content-center">
                <a href="index.html" class="app-brand-link gap-2">
                    <span class="app-brand-logo demo">
                        <img
                        src="../assets/img/avatars/1.png"
                        alt="user-avatar"
                        class="d-block rounded"
                        height="50"
                        width="50"
                        id="uploadedAvatar"
                        />
                    </span>
                    <span class="app-brand-text demo text-body fw-bolder">TaskManamenget</span>
                </a>
                </div>
                <!-- /Logo -->
                <h4 class="mb-2">La prueba comienza aqui 🚀</h4>
                <p class="mb-4">¡Hagamos que la gestión de esta aplicación sea fácil y divertida!</p>
                @if(session('status'))
                    <div class="alert alert-success" role="alert">{{ session('status') }}</div>
                @endif
                <form id="formAuthentication" class="mb-3" action="/storeuser" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nombres:</label>
                        <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        placeholder="Ingresa tu nombre completo"
                        autofocus 
                        required
                        value="{{old('name')}}"
                        />
                        @error('name')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label" >Correo</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa tu Correo" value="{{old('email')}}" required/>
                        @error('email')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3 form-password-toggle">
                        <label class="form-label" for="password">Contraseña</label>
                        <div class="input-group input-group-merge">
                            <input
                                type="password"
                                id="password"
                                class="form-control"
                                name="password"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password"
                                required
                            />
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            @error('password')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-3 form-password-toggle">
                        <label class="form-label" for="password">Repetir Contraseña</label>
                        <div class="input-group input-group-merge">
                            <input
                                type="password"
                                id="repassword"
                                class="form-control"
                                name="repassword"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password"
                                required
                            />
                            <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                            @error('repassword')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                        <label class="form-check-label" for="terms-conditions">
                        Acepto la 
                            <a href="javascript:void(0);">política de privacidad y los términos</a>
                        </label>
                        @error('terms')
                            <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>

                    <button class="btn btn-primary d-grid w-100">Registrarse</button>
                    
                </form>

                <p class="text-center">
                <span>¿Ya tienes una cuenta?</span>
                <a href="{{ route('users.login') }}">
                    <span>Inicia sesión en su lugar</span>
                </a>
                </p>
            </div>
            </div>
            <!-- Register Card -->
        </div>
        </div>
    </div>
</x-layout-front>