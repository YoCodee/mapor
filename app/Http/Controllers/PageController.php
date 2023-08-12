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

        if ($response->status() == 401) {
            return view('pages.news');
        } else {
            $data = $response->json()['dataDetail'];
            return view('pages.news', compact('data'));
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
            return redirect('/add')->with('err', 'Ada masalah!');
        }
    }

    public function detailInfo($slug){
        $url = 'https://www.apimapor.diaryies.web.id/api/news/' . $slug;

        $response = Http::get($url);

        $data = $response->json()['data'];
        return view('pages.details', compact('data'));
    }
}
