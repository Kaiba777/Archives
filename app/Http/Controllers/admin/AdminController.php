<?php

namespace App\Http\Controllers\admin;

use App\Models\Laravel;
use App\Models\Livewire;
use App\Http\Controllers\Controller;
use App\Models\Css;
use App\Models\HTML;
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

    // Affiche tous les archives consernant livewire 
    public function archivesLivewires() {
        $archivesLivewires = Livewire::all();
        return view('admin.livewire', [
            'archivesLivewires' => $archivesLivewires
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

    // Affiche tous les archives consernant Javascript
    public function archivesJavascript() {
        
        $archivesJavascript = Javascript::all();
        return view('admin.javascript', [
            'archivesJavascript' => $archivesJavascript
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

    // Affiche tous les archives consernant livewire 
    public function archivesHtml() {

        $archiveshtmls = HTML::all();
        return view('admin.html', [
            'archiveshtmls' => $archiveshtmls
        ]);
    }

    // Affiche les details spécifiques d'une archive consernant Javascript
    public function archivesDetailHtml(string $slug, HTML $html) {

        $expectedSlug = $html->getSlug();

        if($slug != $expectedSlug) {
            return to_route( 'archives.javascript');
        }

        return view('admin.detail', [
            'html' => $html
        ]);
    }

    // Affiche tous les archives consernant css
    public function archivesCss() {

        $archivesCss = Css::all();
        return view('admin.css', [
            'archivesCss' => $archivesCss
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
