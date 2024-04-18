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
                'motsCle' => "Avoir une url de ce type 127.0.0.1:8000/blog/mon-premier-article-12",
                'Contenu 1' => "Route::get('/blog/{slug}-{id}', function(string $slug, string $id){
                    return [
                        'slug' => $slug,
                        'id' => $id
                    ];
                })->where([
                    'id' => '[0-9]+',
                    'slug' => '[a-z0-9\-]+'
                ]);",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "Lister tous les routes",
                'Contenu 1' => "php artisan route:list",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "Nommer une routes",
                'Contenu 1' => "Route::get('le chemin', function(){
                    return 'Ecrire';
                })->name('Ecrire');",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Laravel::create(
            [
                'motsCle' => "Regrouper plusieurs route qui commence par le même chemin et par le même name",
                'Contenu 1' => "Route::prefix('le chemin de depart')->name('Ecrire')->group(
                    function(){
                        //Ecrire les routes
                });",
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