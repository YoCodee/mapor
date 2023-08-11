<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index(){
        return view('pages.welcome');
    }

    public function news(){
        return view('pages.news');
    }

    public function news2(){
        $url = 'https://www.apimapor.diaryies.web.id/api/news';

        $response = Http::get($url);

        $data = $response->json()['dataDetail'];
        return view('pages.news2', compact('data'));
    }
}
