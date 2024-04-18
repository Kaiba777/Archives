<?php

namespace Database\Seeders;

use App\Models\Livewire;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LivewireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Livewire::create([
            'motsCle' => "Generer un projet livewire",
            'Contenu 1' => "composer require livewire/livewire",
            'Contenu 2' => "",
            'explication' => "Vérifier si Alpine est installé et la supprimer dans resources/js/app.js"
        ]);
        Livewire::create([
            'motsCle' => "Creer un composant livewire",
            'Contenu 1' => "php artisan make:livewire NomDuComposant",
            'Contenu 2' => "",
            'explication' => "Ce composant cre une class et une vue ratacher a cette class"
        ]);
        Livewire::create([
            'motsCle' => "Declarer une variable public et une fonction public",
            'Contenu 1' => "public $maVariable = 1;
            public function maFonction() {
                //Instrunction
            }",
            'Contenu 2' => "",
            'explication' => "A mettre dans la vue"
        ]);
        Livewire::create([
            'motsCle' => "Afficher la valeur de maVariable et maFonction dans la vue",
            'Contenu 1' => "<div>
            <h1>{{ $maVariable }}</h1>
            <button wire:click='maFonction'>Ecrire</button>
            </div>",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "Creer une mis en page pour la vue de tous nos composant",
            'Contenu 1' => "php artisan livewire:layout",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "Creer la class d'un composant sans la vue",
            'Contenu 1' => "php artisan make:livewire NomDuComposant --inline",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "Transmettre des donnees a la vue grâce a sa class",
            'Contenu 1' => "public function render() {
                return view('livewire.post')->with([
                    'author' => Auth::user()->name
                ]);
            }",
            'Contenu 2' => "<div>
            <span>Author: {{ $author }}</span>
            </div>",
            'explication' => "le premier c'est dans la class et le deuxieme c'est dans la vue"
        ]);
        Livewire::create([
            'motsCle' => "Afficher plusieurs donnees",
            'Contenu 1' => "<div>
            @foreach($posts as $post)
                <div wire:key='{{ $post->id }}'>Ecrire</div>
            @endforeach
            </div>",
            'Contenu 2' => "",
            'explication' => "Dans la vue"
        ]);
        Livewire::create([
            'motsCle' => "Remplir un input avec une variable",
            'Contenu 1' => "<div>
            <form>
                <input type='text' wire:model=title>
            </form>
            </div>",
            'Contenu 2' => "",
            'explication' => "Dans la vue"
        ]);
        Livewire::create([
            'motsCle' => "Mettre a jour automatiquement la variable lorque l'utilisateur saisir",
            'Contenu 1' => "<div>
            <form>
                <input type='text' wire:model.live=title>
            </form>
            </div>",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "Action qui permet d'enregistrer des donnees dans la base de donnees",
            'Contenu 1' => "public $title = '';
            public function save() {
                $post = Post::create([
                'title' => $this->title
                ]);
                return redirect()->to('/posts')->with('status', 'Post created!');
            }",
            'Contenu 2' => "<div>
            <form wire:submit='save'>
                //Input
                <button type='submit'>Enregistrer</button>
            </form>
            </div>",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "Ajouter la vue d'un composant dans un blade",
            'Contenu 1' => "<livewire:(la vue) /> ou <livewire:(Dossier).(la vue) />",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "Ajouter la vue d'un composant dans un blade et mettre une valeur par defaut a une variable",
            'Contenu 1' => "<livewire:(la vue) (maVariable)='Ecrire' />",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "Mettre un id dans l'url",
            'Contenu 1' => "importer la ClassDuComposant;
            Route::get('/post/{id}', ClassDuComposant::class);",
            'Contenu 2' => "public function mount($id){
                $this->post = Test::findOrFail($id);
            }",
            'explication' => "le premier c'est dans web.php et le deuxiéme c'est dans la class"
        ]);
        Livewire::create([
            'motsCle' => "Utiliser du code js dans un composant livewire",
            'Contenu 1' => "@script
            <script>
                //Ecrire du code js
            </script>
            @endscript",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "Charger des fichier css et js dans les composants livewire",
            'Contenu 1' => "@assets
            //link
            //script
            @endassets",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "Definir des valeurs initial dans mount()",
            'Contenu 1' => "public function mount(){
                //Instruction
            }",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "Reinitialiser une variable a sa valeur d'origine",
            'Contenu 1' => "public $todos = [];
            public $todo = '';
            public function addTodo(){
                $this->todos[] = $this->todo;
                $this->reset('todo');
            }",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "",
            'Contenu 1' => "",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "",
            'Contenu 1' => "",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "",
            'Contenu 1' => "",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "",
            'Contenu 1' => "",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "",
            'Contenu 1' => "",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "",
            'Contenu 1' => "",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "",
            'Contenu 1' => "",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "",
            'Contenu 1' => "",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "",
            'Contenu 1' => "",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "",
            'Contenu 1' => "",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "",
            'Contenu 1' => "",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "",
            'Contenu 1' => "",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "",
            'Contenu 1' => "",
            'Contenu 2' => "",
            'explication' => ""
        ]);
        Livewire::create([
            'motsCle' => "",
            'Contenu 1' => "",
            'Contenu 2' => "",
            'explication' => ""
        ]);
    }
}
