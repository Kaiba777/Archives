<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Laravel;
use Illuminate\Http\Request;

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
            return to_route('archives.laravel.detail', ['slug' => $expectedSlug, 'id' => $laravel->id]);
        }
        return view('admin.detail',[
            'laravel' => $laravel
        ]);
    }

    public function archivesLivewires() {
        return view('admin.livewire');
    }
}
