<?php

namespace Database\Seeders;

use App\Models\Laravel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LaravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Laravel::create(
            [
                'motsCle' => "Afficher des elements a l'ecran",
                'Contenu 1' => "Route::get('le chemin', function(){
                    return 'Ecrire';
                });",
                'Contenu 2' => '',
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "Afficher le chemin de la page",
                'Contenu 1' => "use Illuminate\Http\Request;
                Route::get('le chemin', function(Request $request){
                    return $request->path();
                })",
                'Contenu 2' => '',
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "Afficher l'url du site",
                'Contenu 1' => "Route::get('le chemin', function(Request $request){
                    return $request->url();
                });",
                'Contenu 2' => '',
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "Afficher tous les informations du site",
                'Contenu 1' => "Route::get('le chemin', function(Request $request){
                    return $request->all();
                });",
                'Contenu 2' => '',
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "Afficher une information particulière",
                'Contenu 1' => "Route::get('le chemin', function(Request $request){
                    return $request->input('name');
                });",
                'Contenu 2' => "Route::get('le chemin', function(Request $request){
                    return $request->input('name', 'Ecrire');
                });",
                'explication' => "Elle renvoie Null si on a rien ou Mettre un name par defaut"
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
    }
}