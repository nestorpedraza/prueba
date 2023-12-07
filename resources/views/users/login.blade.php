<x-layout-front>
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
            <!-- Register -->
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
                <h4 class="mb-2">Bienvenido al Login! 👋</h4>
                <p class="mb-4">Por favor ingresa tus datos!</p>
                @if(session('status'))
                    <div class="alert alert-success" role="alert">{{ session('status') }}</div>
                @endif
                <form id="formAuthentication" class="mb-3" action="/storelogin" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Correo:</label>
                    <input
                    type="email"
                    class="form-control"
                    id="email"
                    name="email"
                    placeholder="Ingrega tu correo"
                    autofocus
                    required
                    />
                    @error('email')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3 form-password-toggle">
                    <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Contraseña:</label>
                    <a href="auth-forgot-password-basic.html">
                        <small>¿Contraseña Perdida?</small>
                    </a>
                    </div>
                    <div class="input-group input-group-merge">
                        <input
                            type="password"
                            id="password"
                            class="form-control"
                            name="password"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="password" required
                        />
                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                        @error('password')
                        <div class="alert alert-danger" role="alert">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me" name="remember"/>
                    <label class="form-check-label" for="remember-me"> Recordar mis datos! </label>
                    </div>
                </div>
                <div class="mb-3">
                    <button class="btn btn-primary d-grid w-100" type="submit">Ingresar</button>
                </div>
                </form>

                <p class="text-center">
                <span>Eres nuevo en la APP?</span>
                <a href="/">
                    <span>Crea una cuenta</span>
                </a>
                </p>
            </div>
            </div>
            <!-- /Register -->
        </div>
        </div>
    </div>
</x-layout-front>