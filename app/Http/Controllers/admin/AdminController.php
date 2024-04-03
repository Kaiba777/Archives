<?php

namespace App\Http\Controllers\admin;

use App\Models\Laravel;
use App\Models\Livewire;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Models\Javascript;

class AdminController extends Controller
{
    // Point d'entrée du site
    public function index() {
        return view('admin.index');
    }

    // Affiche tous les archives consernant laravel
    public function archivesLaravel() {
        $archivesLaravels = Laravel::all();
        return view('admin.laravel', [
            'archivesLaravels' => $archivesLaravels
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

    public function archivesLivewires() {
        $archivesLivewires = Livewire::all();
        return view('admin.livewire', [
            'archivesLivewires' => $archivesLivewires
        ]);
    }

    public function archivesDetailLivewire(string $slug, Livewire $livewire) {

        $expectedSlug = $livewire->getSlug();

        if($slug != $expectedSlug) {
            return to_route( 'archives.livewire');
        }

        return view('admin.detail', [
            'livewire' => $livewire
        ]);
    }

    // Affiche tous les archives consernant Javascript
    public function archivesJavascript() {
        
        $archivesJavascript = Javascript::all();
        return view('admin.javascript', [
            'archivesJavascript' => $archivesJavascript
        ]);
    }
}
