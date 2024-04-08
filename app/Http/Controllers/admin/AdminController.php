<?php

namespace App\Http\Controllers\admin;

use App\Models\Css;
use App\Models\HTML;
use App\Models\Laravel;
use App\Models\Livewire;
use App\Models\Javascript;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    // Point d'entrée du site
    public function index() {
        return view('admin.index');
    }

    // Affiche tous les archives consernant laravel en les paginants
    public function archivesLaravel(Request $request) {
        $laravel = Laravel::query();

        if ($recherche = $request->rechercher) {
            $laravel->where('motsCle', 'like', '%' . $recherche . '%');
        }
        return view('admin.laravel', [
            'archivesLaravels' => $laravel->paginate(10)
        ]);
    }

    // Affiche les details spécifiques d'une archive consernant laravel
    public function archivesDetailLaravel(string $slug, Laravel $laravel) {

        $expectedSlug = $laravel->getSlug();

        if($slug != $expectedSlug) {
            return to_route('archives.laravel');
        }
        return view('admin.detail',[
            'laravel' => $laravel
        ]);
    }

    // Affiche tous les archives consernant livewire en les paginants
    public function archivesLivewires(Request $request) {
        $livewire = Livewire::query();

        if ($recherche = $request->rechercher) {
            $livewire->where('motsCle', 'like', '%' . $recherche . '%');
        }
        return view('admin.livewire', [
            'archivesLivewires' => $livewire->paginate(10)
        ]);
    }

    // Affiche les details spécifiques d'une archive consernant livewire
    public function archivesDetailLivewire(string $slug, Livewire $livewire) {

        $expectedSlug = $livewire->getSlug();

        if($slug != $expectedSlug) {
            return to_route( 'archives.livewire');
        }

        return view('admin.detail', [
            'livewire' => $livewire
        ]);
    }

    // Affiche tous les archives consernant Javascript en les paginants
    public function archivesJavascript(Request $request) {
        $javascript = Javascript::query();

        if ($recherche = $request->rechercher) {
            $javascript->where('motCle', 'like', '%' . $recherche . '%');
        }
        return view('admin.javascript', [
            'archivesJavascript' => $javascript->paginate(10)
        ]);
    }

    // Affiche les details spécifiques d'une archive consernant Javascript
    public function archivesDetailJavascript(string $slug, Javascript $javascript) {

        $expectedSlug = $javascript->getSlug();

        if($slug != $expectedSlug) {
            return to_route( 'archives.javascript');
        }

        return view('admin.detail', [
            'javascript' => $javascript
        ]);
    }

    // Affiche tous les archives consernant html en les paginant
    public function archivesHtml(Request $request) {
        $javascript = HTML::query();

        if ($recherche = $request->rechercher) {
            $javascript->where('motsCle', 'like', '%' . $recherche . '%');
        }
        return view('admin.html', [
            'archiveshtmls' => $javascript->paginate(10)
        ]);
    }

    // Affiche les details spécifiques d'une archive consernant html
    public function archivesDetailHtml(string $slug, HTML $html) {

        $expectedSlug = $html->getSlug();

        if($slug != $expectedSlug) {
            return to_route( 'archives.javascript');
        }

        return view('admin.detail', [
            'html' => $html
        ]);
    }

    // Affiche tous les archives consernant css en les paginants
    public function archivesCss(Request $request) {
        $css = Css::query();

        if ($recherche = $request->rechercher) {
            $css->where('motsCle', 'like', '%' . $recherche . '%');
        }
        return view('admin.css', [
            'archivesCss' => $css->paginate(10)
        ]);
    }

    // Affiche les details spécifiques d'une archive consernant Css
    public function archivesDetailCss(string $slug, Css $css) {

        $expectedSlug = $css->getSlug();

        if($slug != $expectedSlug) {
            return to_route( 'archives.css');
        }

        return view('admin.detail', [
            'css' => $css
        ]);
    }
}
