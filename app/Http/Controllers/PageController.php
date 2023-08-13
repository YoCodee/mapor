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

    public function news(Request $request){
        $page = $request->query('page', 1); 
    
        $baseUrl = 'https://www.apimapor.diaryies.web.id/api/news';
        $url = "$baseUrl?page=$page";
    
        $response = Http::get($url);

        if ($response->status() == 401) {
            return redirect('/news?page=1');
        } elseif ($response->status() == 200) {
            $dataPage = $response->json()['dataPage'];
            $data = $response->json()['dataDetail'];
    
        return view('pages.news', compact('data', 'page', 'dataPage'));
        }
        
    }

    public function detail(){
        return view('pages.details');
    }

    public function add(){
        return view('pages.addnews');
    }

    public function addProses(Request $request){
        $request->validate([
            'title' => 'required',
            'file' => 'required|mimes:png,jpg,jpeg,gif,docx,word,pdf,doc',
            'body' => 'required'
        ]);

        $url = 'https://www.apimapor.diaryies.web.id/api/create';

        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();

        $response = Http::attach('file', file_get_contents($file->path()), $fileName)->post($url, [
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
        $url = 'https://www.apimapor.diaryies.web.id/api/news/' . $slug;

        $response = Http::get($url);

        $data = $response->json()['data'];
        return view('pages.details', compact('data'));
    }
    
    public function dataNews(){
        $url = 'https://www.apimapor.diaryies.web.id/api/allnews';

        $response = Http::get($url);

        $data = $response->json()['data'];
        return view('pages.datanews', compact('data'));
    }

    public function editNews($slug){
        $url = 'https://www.apimapor.diaryies.web.id/api/news/' . $slug;

        $response = Http::get($url);

        $data = $response->json()['data'];
        return view('pages.editnews', compact('data'));
    }

    public function editNewsProses($slug, Request $request){
        $request->validate([
            'title' => 'required',
            'body' => 'required'
        ]);

        $url = 'https://www.apimapor.diaryies.web.id/api/edit/' . $slug;

        $response = Http::put($url, [
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
        $url = 'https://www.apimapor.diaryies.web.id/api/news/' . $slug;

        $response = Http::get($url);

        $data = $response->json()['data'];
        return view('pages.editfilenews', compact('data'));
    }

    public function editFileNewsProses($slug, Request $request){
        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg,gif,docx,word,pdf,doc'
        ]);

        $url = 'https://www.apimapor.diaryies.web.id/api/editfile/' . $slug;

        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();

        $response = Http::attach('file', file_get_contents($file->path()), $fileName)->post($url);

        if ($response->status() == 200) {
            return redirect('/news');
        } else if($response->status() == 400){
            return redirect('/');
        }
    }

    public function deleteNews($slug){
        $url = 'https://www.apimapor.diaryies.web.id/api/delete/' . $slug;

        $response = Http::delete($url);

        if ($response->status() == 200) {
            return redirect('/news');
        } else if($response->status() == 400){
            return redirect('/');
        }
    }
}
