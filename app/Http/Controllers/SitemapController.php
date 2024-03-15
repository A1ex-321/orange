<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Banner;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SitemapController extends Controller
{


    public function index(): Response{
        $post = Banner::latest()->get();
        return Response()->view('sitemap',['post' => $post])->header('Content-Type','text/xml');
    }

   
}
