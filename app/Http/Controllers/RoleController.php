<?php

namespace App\Http\Controllers;

use http\Env\Request;
use Illuminate\Auth\Access\Gate;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:create role')->only('create');
    }

    public function index(): string
   {
       //$this->authorize('read role'); // pengaturan ijin melalui controller
       //bisa juga melalui web atau route nya

       //return 'role page';
       return view('konfigurasi.role');
   }

   public function create(): string
   {
       return 'create role page';
   }
}
