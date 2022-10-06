<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('email', 'ASC')->get();
        return view('user.user_index', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.user_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //dd($request->all());

        $message = [
            'name.required' => 'O campo nome é obrigatório!',
            'name.min' => 'O campo nome precisa ter no mínimo :min caracteres!',
            'cpf.required' => 'O campo CPF é obrigatório!',
            'email.required' => 'O campo email é obrigatório!',
            'email.email' => 'Este e-mail não é valido!',
            'password.required' => 'O campo nome é obrigatório!',
            'password.same' => 'As senham precisam ser identicas!',

        ];

        $validateData = $request->validate([
            'name'          => 'required|min:3',
            'cpf'           => 'required|max:11',
            'email'         => 'required|email',
            'password'      =>'required|same:confirm-password',
        ], $message);


        $user = new User;
        $user->name         = $request->name;
        $user->cpf          = $request->cpf;
        $user->telefone     = $request->telefone;
        $user->perfil       = $request->perfil;
        $user->email        = $request->email;
        $user->password     = Hash::make($request->password);
        $user->save();

        return redirect()->route('user.index')->with('message', "user {$user->nome} criado com sucesso!");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
            $user = User::find($id);
            
            return view('user.user_show', ['user' => $user]);
        }
    
    /*
    public function perfil()
    {
            $user = Auth::user();
            return view('user.perfil_cliente', ['user' => $user]);
    }
    */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);

        return view('user.user_edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //dd($request->name);

        $message = [
            'name.required' => 'O campo nome é obrigatório!',
            'name.min' => 'O campo nome precisa ter no mínimo :min caracteres!',
            'cpf.required' => 'O campo CPF é obrigatório!',
            'email.required' => 'O campo email é obrigatório!',
            'email.email' => 'Este e-mail não é valido!',
            //'password.required' => 'O campo nome é obrigatório!', // ERA AQUI
            //'password.same' => 'As senham precisam ser identicas!',

        ];

        $validateData = $request->validate([
            'name'          => 'required|min:3',
            'cpf'           => 'required|max:11',
            'email'         => 'required|email',
            //'password'      =>'required|same:confirm-password',
        ], $message);


        $user = User::find($id);
        $user->name         = $request->name;
        $user->cpf          = $request->cpf;
        $user->telefone     = $request->telefone;
        $user->perfil       = $request->perfil;
        $user->email        = $request->email;
        if(!empty(trim($request->password))){
            $user->password     = Hash::make($request->password);
        }
        $user->save();

        return redirect()->route('user.index')->with('message', "user {$user->nome} editado com sucesso!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.index')->with('message', 'usuário excluido com sucesso!');
    }


     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_cliente()
    {
        return view('user.create_cliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_cliente(Request $request)
    {
        $message = [
            'name.required' => 'O campo nome é obrigatório!',
            'name.min' => 'O campo nome precisa ter no mínimo :min caracteres!',
            'cpf.required' => 'O campo CPF é obrigatório!',
            'email.required' => 'O campo email é obrigatório!',
            'email.email' => 'Este e-mail não é valido!',
            'password.required' => 'O campo nome é obrigatório!',
            'password.same' => 'As senham precisam ser identicas!',

        ];

        $validateData = $request->validate([
            'name'          => 'required|min:3',
            'cpf'           => 'required|max:11',
            'email'         => 'required|email',
            'password'      =>'required|same:confirm-password',
        ], $message);


        $user = new User;
        $user->name         = $request->name;
        $user->perfil       = 'cliente';
        $user->cpf          = $request->cpf;
        $user->email        = $request->email;
        $user->password     = Hash::make($request->password);
        $user->save();

        Auth::loginUsingId($user->id);

        //@todo - precisa redirecionar para uma pagina do cliente
        return redirect()->route('user.index')->with('message', "Caro(a) {$user->nome} sua conta foi criada com sucesso!");
    }

}
