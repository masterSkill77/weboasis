<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class HomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Home', [
            'meta' => [
                'title' => 'WebOasis Labs — Building products that matter',
                'description' => 'Studio produit SaaS basé à Madagascar. Nous concevons des outils simples et accessibles pour les marchés francophones.',
            ],
        ]);
    }
}
