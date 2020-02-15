<?php

namespace Chondal\UserPersonification\Http\Controllers;

use App\Http\Controllers\Controller;
use Chondal\UserPersonification\Facades\UserPersonification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ImpersonationsController extends Controller
{

    // TODO: borrar esto y la ruta index probando
    public function index()
    {
        return UserPersonification::hello();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        session(['inpersonation_id' => $request->inpersonation_id]);

        auth()->loginUsingId($request->id);

        return redirect(config('user-personification.url-user'));
    }

    public function destroy(Request $request)
    {

        auth()->loginUsingId(session('inpersonation_id'));

        session()->forget('inpersonation_id');

        flash("<strong>Finalizo Personificación</strong>.")
            ->success()->important();

        return redirect(config('user-personification.url-admin'));
    }

}
