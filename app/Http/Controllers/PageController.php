<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PageController extends Controller
{
    public function index(){
        return view('pages.welcome');
    }

    public function news(Request $request){
        $page = $request->query('page', 1);

        $baseUrl = 'https://api.memarong.id/api/news';
        $url = "$baseUrl?page=$page";

        $response = Http::withHeaders([
            'APP_KEY' => env('API_KEY')
        ])->get($url);

        if ($response->status() == 401) {
            return redirect('/');
        } elseif ($response->status() == 200) {
            $dataPage = $response->json()['dataPage'];
            $data = $response->json()['dataDetail'];

        return view('pages.news', compact('data', 'page', 'dataPage'));
        }
    }

    public function add(){
        return view('pages.addnews');
    }

    public function addProses(Request $request){
        $request->validate([
            'title' => 'required',
            'file' => 'required|mimes:png,jpg,pdf,word,doc,jpeg,docx,gif|max:10000',
            'body' => 'required'
        ]);

        $url = 'https://www.api.memarong.id/api/create';

        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();

        $response = Http::withHeaders([
            'APP_KEY' => env('API_KEY')
        ])->attach('file', file_get_contents($file->path()), $fileName)->post($url, [
            'title' => $request->title,
            'body' => $request->body,
            'userId' => 1
        ]);

        if ($response->status() == 201) {
            return redirect('/news');
        } else {
            return redirect('/add')->with('err', 'Ada masalah! / Title sudah dipakai!');
        }
    }

    public function detailInfo($slug){
        $url = 'https://www.api.memarong.id/api/news/' . $slug;

        $response = Http::withHeaders([
            'APP_KEY' => env('API_KEY')
        ])->get($url);

        $data = $response->json()['data'];
        return view('pages.details', compact('data'));
    }

    public function dataNews(){
        $url = 'https://www.api.memarong.id/api/allnews';

        $response = Http::withHeaders([
            'APP_KEY' => env('API_KEY')
        ])->get($url);

        $data = $response->json()['data'];
        return view('pages.datanews', compact('data'));
    }

    public function editNews($slug){
        $url = 'https://www.api.memarong.id/api/news/' . $slug;

        $response = Http::withHeaders([
            'APP_KEY' => env('API_KEY')
        ])->get($url);

        $data = $response->json()['data'];
        return view('pages.editnews', compact('data'));
    }

    public function editNewsProses($slug, Request $request){
        $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $url = 'https://www.api.memarong.id/api/edit/' . $slug;

        $response = Http::withHeaders([
            'APP_KEY' => env('API_KEY')
        ])->put($url, [
            'title' => $request->title,
            'body' => $request->body
        ]);

        if ($response->status() == 200) {
            return redirect('/news');
        } else if($response->status() == 400){
            return redirect('/');
        } else if(!$response->successful()){
            return redirect('/edit/'. $slug)->with('err', 'Ada masalah! / Title sudah dipakai!');
        }
    }

    public function editFileNews($slug){
        $url = 'https://www.api.memarong.id/api/news/' . $slug;

        $response = Http::withHeaders([
            'APP_KEY' => env('API_KEY')
        ])->get($url);

        $data = $response->json()['data'];
        return view('pages.editfilenews', compact('data'));
    }

    public function editFileNewsProses($slug, Request $request){
        $request->validate([
            'file' => 'required|mimes:png,jpg,pdf,word,doc,jpeg,docx,gif|max:10000',
        ]);

        $url = 'https://www.api.memarong.id/api/editfile/' . $slug;

        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();

        $response = Http::withHeaders([
            'APP_KEY' => env('API_KEY')
        ])->attach('file', file_get_contents($file->path()), $fileName)->post($url);

        if ($response->status() == 200) {
            return redirect('/news');
        } else if($response->status() == 400){
            return redirect('/');
        }
    }

    public function deleteNews($slug){
        $url = 'https://www.api.memarong.id/api/delete/' . $slug;

        $response = Http::withHeaders([
            'APP_KEY' => env('API_KEY')
        ])->delete($url);

        if ($response->status() == 200) {
            return redirect('/news');
        } else if($response->status() == 400){
            return redirect('/');
        }
    }
}
