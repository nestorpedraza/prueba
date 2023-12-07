<x-layout-backend>
     <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

    <div class="row">
        <div class="col-md-12">
            <ul class="nav nav-pills flex-column flex-md-row mb-3">
                <li class="nav-item">
                <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a>
                </li>
            </ul>
            <div class="card mb-4">
                <h5 class="card-header">Profile Details</h5>
                <!-- Account -->
                <div class="card-body">
                    <div class="d-flex align-items-start align-items-sm-center gap-4">
                        <img
                        src="../assets/img/avatars/5.png"
                        alt="user-avatar"
                        class="d-block rounded"
                        height="100"
                        width="100"
                        id="uploadedAvatar"
                        />
                        
                    </div>
                </div>
                <hr class="my-0" />
                <div class="card-body">
                    <form id="formAccountSettings" method="POST" action="{{ route('users.update', ['id' => $usuario->id]) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">

                            <div class="button-wrapper">
                                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                    <span class="d-none d-sm-block">Subir nueva foto</span>
                                    <i class="bx bx-upload d-block d-sm-none"></i>
                                    <input
                                    type="file"
                                    id="upload"
                                    name="imagen"
                                    class="account-file-input"
                                    hidden
                                    accept="image/png, image/jpeg"
                                    disabled
                                    />
                                </label>
    
                                <p class="text-muted mb-0">permitida JPG, GIF or PNG. Max size of 800K</p>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="firstName" class="form-label">Nombres</label>
                                <input
                                class="form-control"
                                type="text"
                                id="name"
                                name="name"
                                value="{{ $usuario->name }}"
                                autofocus
                                required
                                />
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="email" class="form-label">E-mail</label>
                                <input
                                class="form-control"
                                type="email"
                                id="email"
                                name="email"
                                value="{{ $usuario->email}}"
                                placeholder="john.doe@example.com"
                                readonly
                                />
                            </div>
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-primary me-2">Save changes</button>
                            <button type="reset" class="btn btn-outline-secondary">Cancel</button>
                        </div>
                </form>
                </div>
                <!-- /Account -->
            </div>
            <div class="card">
                <h5 class="card-header">Delete Account</h5>
                <div class="card-body">
                <div class="mb-3 col-12 mb-0">
                    <div class="alert alert-warning">
                    <h6 class="alert-heading fw-bold mb-1">Are you sure you want to delete your account?</h6>
                    <p class="mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                    </div>
                </div>
                <form id="formAccountDeactivation" onsubmit="return false">
                    <div class="form-check mb-3">
                    <input
                        class="form-check-input"
                        type="checkbox"
                        name="accountActivation"
                        id="accountActivation"
                    />
                    <label class="form-check-label" for="accountActivation"
                        >Yo confirmo la desactivacion de esta cuenta</label
                    >
                    </div>
                    <button type="submit" class="btn btn-danger deactivate-account">Deactivate Account</button>
                </form>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
</x-layout-backend>