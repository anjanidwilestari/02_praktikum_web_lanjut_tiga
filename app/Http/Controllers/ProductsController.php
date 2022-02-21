<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function baju(){
        echo '<img src="https://cdn.elevenia.co.id/g/6/6/4/6/6/7/11664667_A3.jpg" alt="baju" height="500"/>';
        echo '<h3 style="color: red;">Baju Olahraga Elastis Cantik</h3>';
    }
    public function rok(){
        echo '<img src="https://filebroker-cdn.lazada.co.id/kf/H5265fb9d06644454acb8b077e829d4e3Y.jpg" alt="rok" height="500"/>';
        echo '<h3 style="color: red;">Rok Olahraga Super Nyaman</h3>';
    }
    public function sepatu(){
        echo '<img src="https://cdn.elevenia.co.id/g/8/1/1/9/7/7/27811977_A1.jpg" alt="sepatu" height="500"/>';
        echo '<h3 style="color: red;">Sepatu Running Feminim Cantik</h3>';
    }
}
