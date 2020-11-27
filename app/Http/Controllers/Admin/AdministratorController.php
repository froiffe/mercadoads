<?php

namespace App\Http\Controllers\Admin;

use App\Role;
use App\Administrator;
use Illuminate\Http\Request;
use Spatie\Fractal\Facades\Fractal;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use App\Transformers\AdministratorTransformer;
use App\Http\Requests\AdministratorCreate;
use App\Http\Requests\AdministratorUpdate;

class AdministratorController extends Controller
{
    public function list(Request $request)
    {
        return view('admin.administrators.list');
    }

    public function create()
    {
        $roles = Role::where('name', '!=', 'user')->get();

        return view('admin.administrators.create')
            ->with('roles', $roles);
    }

    public function store(AdministratorCreate $request)
    {
        $role = Role::find($request->input('role'));
        $administrator = new Administrator;

        $administrator->name = $request->input('name');
        $administrator->email = $request->input('email');
        $administrator->password = bcrypt($request->input('password'));

        if( $administrator->save() ) {
            $administrator->attachRole($role);

            return redirect()->route('administrators.list')->withSuccess('Administrador creado correctamente.');
        }
    }

    public function edit(Administrator $administrator)
    {
        $roles = Role::where('name', '!=', 'user')->get();

        return view('admin.administrators.edit')
            ->with('administrator', $administrator)
            ->with('roles', $roles);
    }

    public function update(AdministratorUpdate $request, Administrator $administrator)
    {
        $role = Role::find($request->input('role'));

        $administrator->name = $request->input('name');
        $administrator->email = $request->input('email');

        if( $request->input('password') ) {
            $administrator->password = bcrypt($request->input('password'));
        }

        $administrator->syncRoles([$role]);

        if( $administrator->save() ) {
            return redirect()->route('administrators.edit', $administrator)->withSuccess('Administrador actualizado correctamente.');
        }
    }

    public function destroy(Administrator $administrator)
    {
        if ( Auth::guard('admin')->user()->id == $administrator->id ) {
            return redirect()->route('administrators.list')->withWarning('No se puede borrar a ese usuario.');
        }

        $administrator->delete();

        return redirect()->route('administrators.list')->withSuccess('Usuario borrado correctamente.');
    }

    // AJAX
    public function ajaxList(Request $request)
    {
        $administrators = Administrator::query()->where('id', '!=', Auth::guard('admin')->user()->id)->get();

        return DataTables::of($administrators)
            ->setTransformer(new AdministratorTransformer)
            ->make(true);
    }
}
