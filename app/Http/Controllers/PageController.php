<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index(){
        return view('pages.welcome');
    }
    public function details(){
        return view('pages.details');
    }

    public function news(){
        $url = 'https://www.apimapor.diaryies.web.id/api/news';

        $response = Http::get($url);

        $data = $response->json()['dataDetail'];
        return view('pages.news', compact('data'));
    }


}
