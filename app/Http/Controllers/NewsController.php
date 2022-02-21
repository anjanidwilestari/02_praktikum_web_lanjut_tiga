<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function berita($id){
        return 'Berita saat ini dari Fashion Week Indonesia tanggal '.$id;
    }
}
