<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Display a login view.
     */
    public function login()
    {
        return view('users.login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $rules = [
            'name' => 'required|string|max:255|min:4',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'terms' => 'required',
        ];

        // Se agrega una regla de confirmación
        $rules['repassword'] = 'required|string|same:password';

        // Validar el formulario
        $request->validate($rules);

        // Crear un nuevo usuario en la base de datos
        $user = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return to_route('users.index')->with('status','Usuario creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $id = Auth::user()->id;
        $usuario = User::find($id);

        // Ahora, $usuario contiene la información del usuario con el ID proporcionado
        return view('users.show', compact('usuario'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255|min:4',
            'imagen' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ajusta según tus requisitos
        ]);

        $usuario = User::findOrFail($id);

        
        if ($request->hasFile('imagen')) {
            try {
                // Elimina la imagen anterior si existe
                if ($usuario->imagen) {
                    //Storage::delete('public/' . $usuario->imagen);
                }

                // Almacena la nueva imagen
                $rutaImagen = basename($request->file('imagen')->store('imagenes_usuarios', 'public'));
                // Actualiza la ruta de la imagen en la base de datos

                $usuario->imagen=$rutaImagen;
                $usuario->save();
            } catch (\Exception $e) {
                // Manejar cualquier error que pueda ocurrir durante la carga o actualización
                return redirect()->back()->with('error', 'Error al actualizar la imagen.');
            }
        }

        $usuario->name=$request->name;
        $usuario->save();

        return redirect()->route('users.show', ['id' => $usuario->id])->with('success', 'Perfil actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function storelogin(Request $request)
    {
        $rules = [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8'
        ];
        // Validar el formulario
        $credenciales = $request->validate($rules);
        // Crear un nuevo usuario en la base de datos
        if (!Auth::attempt($credenciales, $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => [__('auth.failed')],
            ]);
        }

        $request->session()->regenerate();
        return redirect()->intended('/dashboard');

    }

    public function logout(Request $request)
    {
        //
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        return to_route('users.login')->with('status','Usuario desconectado!');
    }
}
