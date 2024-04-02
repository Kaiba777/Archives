<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Laravel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index() {
        return view('admin.index');
    }

    public function archivesLaravel() {
        $archivesLaravels = Laravel::all();
        return view('admin.laravel', [
            'archivesLaravels' => $archivesLaravels
        ]);
    }

    public function archivesDetailLaravel(string $slug, Laravel $laravel) {
        $expectedSlug = $laravel->getSlug();
        if($slug != $expectedSlug) {
            return to_route('archives.laravel.detail', ['slug' => $expectedSlug, 'id' => $laravel->id]);
        }
        return view('admin.detail',[
            'laravel' => $laravel
        ]);
    }
}
