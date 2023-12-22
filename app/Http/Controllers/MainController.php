<?php

namespace App\Http\Controllers;

use App\models\Actu;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        $actus = Actu::all();
        return view('home' , [
            'actus' => $actus,
        ]);
    }

    public function menu()
    {
        $categories = ['Petit déjeuner', 'Entrées', 'Plats', 'Desserts', 'Boissons'];

        return view('menu', [
            'categories' => $categories,
        ]);
    }
}
