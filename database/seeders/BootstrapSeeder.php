<?php

namespace Database\Seeders;

use App\Models\Bootstrap;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BootstrapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bootstrap::create(
            [
                'motsCle' => "lien cdn de css et js",
                'Contenu 1' => '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">',
                'Contenu 2' => '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>',
                'explication' => "Ces liens cdn necessite une connexion internet pour fonctionner"
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "fichier css et js",
                'Contenu 1' => '<link rel="stylesheet" href="./assets/bootstrap-v5.3/css/bootstrap.min.css">',
                'Contenu 2' => '<script src="./assets/bootstrap-v5.3/js/bootstrap.min.js"></script>',
                'explication' => "Ces fichier n'utilise pas de la connexion"
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "extension importante de bootstrap",
                'Contenu 1' => "IntelliSense for CSS class names in HTML",
                'Contenu 2' => "",
                'explication' => "permet d'afficher les class bootstrap pour cela enfoncer ctrl plus barre espace"
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "changer la couleur d'un text",
                'Contenu 1' => "text-(couleur)",
                'Contenu 2' => "",
                'explication' => "(couleur) signifie qu'il faut definir la couleur"
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "changer le fond d'un text",
                'Contenu 1' => "bg-(couleur)",
                'Contenu 2' => "",
                'explication' => "(couleur) signifie qu'il faut definir la couleur"
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "Varié la couleur de d'un text et le fond",
                'Contenu 1' => ".customize-color{
                    color: brown !important;
                    background: burlywood !important;
                }",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "grille avec les meme colonne",
                'Contenu 1' => '<div class="container-fluid">
                        <div class="row">
                            <div class="col bg-info">Un</div>
                            <div class="col bg-info">Deux</div>
                            <div class="col bg-info">Trois</div>
                        </div>
                    </div>',
                'Contenu 2' => "",
                'explication' => "container-fluid permet de pas avoir une barre de défilement et des espaces de trop"
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "grille responsive avec par exemple 4 colonnes , 3 colonnes et 1 colonnes",
                'Contenu 1' => '<div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-12 bg-danger">Un</div>
                            <div class="col-lg-3 col-md-4 col-sm-12 bg-success">Deux</div>
                            <div class="col-lg-3 col-md-4 col-sm-12 bg-dark">Trois</div>
                            <div class="col-lg-3 col-md-4 col-sm-12 bg-secondary">Quatre</div>
                            <div class="col-lg-3 col-md-4 col-sm-12 bg-danger">Cinq</div>
                            <div class="col-lg-3 col-md-4 col-sm-12 bg-primary">Six</div>
                            <div class="col-lg-3 col-md-4 col-sm-12 bg-danger">Sept</div>
                            <div class="col-lg-3 col-md-4 col-sm-12 bg-info">Huit</div>
                            <div class="col-lg-3 col-md-4 col-sm-12 bg-secondary">Neuf</div>
                            <div class="col-lg-3 col-md-4 col-sm-12 bg-danger">Dix</div>
                            <div class="col-lg-3 col-md-4 col-sm-12 bg-dark">Onze</div>
                            <div class="col-lg-3 col-md-4 col-sm-12 bg-primary">Douze</div>
                        </div>
                    </div>',
                'Contenu 2' => "",
                'explication' => "col-lg signifiie sur un ecran large, col-md sur un ecran moins large et ol-sm sur un petit ecran"
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "grille avec des spaces",
                'Contenu 1' => '<div class="container-fluid">
                        <div class="row g-4">
                            <div class="col-4">
                                <div class="bg-primary">Custom 1</div>
                            </div>
                            <div class="col-4">
                                <div class="bg-primary">Custom 2</div>
                            </div>
                            <div class="col-4">
                                <div class="bg-primary">Custom 3</div>
                            </div>
                            <div class="col-4">
                                <div class="bg-primary">Custom 4</div>
                            </div>
                            <div class="col-4">
                                <div class="bg-primary">Custom 5</div>
                            </div>
                            <div class="col-4">
                                <div class="bg-primary">Custom 6</div>
                            </div>
                            <div class="col-4">
                                <div class="bg-primary">Custom 6</div>
                            </div>
                            <div class="col-4">
                                <div class="bg-primary">Custom 7</div>
                            </div>
                        </div>
                    </div>',
                'Contenu 2' => "",
                'explication' => "c'est g- qui permet de mettre des spaces"
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "mettre la police d'un text en la police d'une balise h1",
                'Contenu 1' => '<p class="h1">Hello World</p>',
                'Contenu 2' => "",
                'explication' => "sa par de h1 a h6"
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "changer la police d'un text tout en étant plus fin",
                'Contenu 1' => '<div class="display-1">C\'est une div</div>',
                'Contenu 2' => "",
                'explication' => "sa par de display-1 a display-6"
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "mettre un text en gras",
                'Contenu 1' => '<div class="fw-bold">simple text</div>',
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "l'image prend 100% de la largeur de l'ecran",
                'Contenu 1' => '<img src="./assets/imgs/Capture d’écran 2024-01-03 065027.png" class="img-fluid" alt="">',
                'Contenu 2' => "",
                'explication' => "permet d'eviter la barre de defilement"
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "Entourer l'image d'une bordure blanche",
                'Contenu 1' => '<img src="./assets/imgs/Capture d’écran 2024-01-03 065027.png" class="img-thumbnail" alt="">',
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "aligner 3 images sur la meme ligne",
                'Contenu 1' => '<img src="./assets/imgs/01.jpg" class="float-start" height="400" width="400" alt="">
                    <img src="./assets/imgs/02.jpg" class="float-end" height="400" width="400" alt="">
                    <div class="text-center">
                        <img src="./assets/imgs/03.jpg" height="400" width="400" alt="">
                    </div>',
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "tableau",
                'Contenu 1' => '<table class="table">
                        <thead></thead>
                        <tbody></tbody>
                    </table>',
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "margin et padding en haut",
                'Contenu 1' => "mt-1 pt-1",
                'Contenu 2' => "",
                'explication' => "mt- et pt- par de 0 a 5"
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "margin et padding en bas",
                'Contenu 1' => "mb-1 pb-1",
                'Contenu 2' => "",
                'explication' => "mb- et pb- par de 0 a 5"
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "margin et padding a gauche",
                'Contenu 1' => "ms-1 ps-1",
                'Contenu 2' => "",
                'explication' => "ms- et ps- a gauche"
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "margin et padding a droite",
                'Contenu 1' => "me-1 pe-1",
                'Contenu 2' => "",
                'explication' => "me- et pe- a droite"
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "label",
                'Contenu 1' => '<label for="" class="form-label">Email</label>',
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "input",
                'Contenu 1' => '<input type="email" name="" id="" placeholder="" class="form-control">',
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "select",
                'Contenu 1' => '<select class="form-select">
                    <option selected>Sélectionnez</option>
                    <option value="1">Html</option>
                    <option value="2">Css</option>
                    <option value="3">Javascript</option>
                </select>',
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "checkbox",
                'Contenu 1' => '<div class="form-check">
                    <input type="checkbox" class="form-check-input">
                    <label for="">Defaut checkbox</label>
                </div>',
                'Contenu 2' => '<div class="form-check">
                    <input type="checkbox" checked class="form-check-input">
                    <label for="">Checked checkbox</label>
                </div>',
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "radio",
                'Contenu 1' => '<div class="form-check">
                    <input type="radio" class="form-check-input" name="input-radio">
                    <label for="">Defaut checkbox</label>
                </div>',
                'Contenu 2' => '<div class="form-check">
                    <input type="radio" checked class="form-check-input" name="input-radio">
                    <label for="">Checked checkbox</label>
                </div>',
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "radio switch",
                'Contenu 1' => '<div class="form-check form-switch">
                    <input type="radio" class="form-check-input" name="input-radio">
                    <label for="">Defaut checkbox</label>
                </div>',
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "range",
                'Contenu 1' => '<input type="range" class="form-range" min="0" max="10" step="2">',
                'Contenu 2' => "",
                'explication' => "min et max c'est specifier sa facon de defiler et step pour le pas"
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "input autre modele",
                'Contenu 1' => '<div class="input-group mb-3">
                    <span class="input-group-text">Nom d\'utilisateur</span>
                    <input type="text" placeholder="nom" class="form-control">
                </div>',
                'Contenu 2' => '<div class="input-group">
                    <input type="text" class="form-control" placeholder="nom">
                    <span class="input-group-text">Email</span>
                </div>',
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "input flottant",
                'Contenu 1' => '<div class="form-floating mb-3">
                    <input type="text" class="form-control" placeholder="Nom">
                    <label for="">Nom</label>
                </div>',
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "alert",
                'Contenu 1' => '<div class="alert alert-danger">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Sit maiores facere, quasi est fugit quaerat perspiciatis 
                    porro culpa dolore ullam illum molestiae, doloremque modi.
                </div>',
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "boutton",
                'Contenu 1' => '<div>
                <button class="btn btn-primary">Submit</button>
                </div>',
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "badge",
                'Contenu 1' => '<h2>Hello <span class="badge bg-danger">world</span></h2>',
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "card",
                'Contenu 1' => '<div class="card" style="width: 300px;">
                    <div class="card-header">La tête</div>
                    <img src="./assets/imgs/02.jpg" class="card-img-top" alt="">
                    <div class="card-body">
                        <h1>courses</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Tempora magni nam non officiis laborum excepturi eius adipisci! 
                            Dolorem, aperiam? Necessitatibus, fugit odio. Saepe iure a vitae 
                            praesentium sapiente? Adipisci, debitis!
                        </p>
                        <button type="button" class="btn btn-outline-secondary">Acheter</button>
                    </div>
                    <div class="card-footer">le pied</div>
                </div>',
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
        Bootstrap::create(
            [
                'motsCle' => "",
                'Contenu 1' => "",
                'Contenu 2' => "",
                'explication' => ""
            ]
        );
    }
}
