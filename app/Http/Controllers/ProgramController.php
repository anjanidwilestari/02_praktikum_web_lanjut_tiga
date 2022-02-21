<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function fashionclass(){
        echo '<img src="https://coursehorse.imgix.net/images/course/473/main/the_fashion_class_55a765325e039.jpeg?auto=format%2Cenhance%2Ccompress&crop=entropy&fit=crop&h=333&ixlib=php-1.2.1&q=90&w=571" alt="fashion-class" height="500"/>';
        echo '<h3>Fashion Class by Fashionizta</h3>';
        echo '<p>Feel the comfort class and get all of knowledge about fashion around the world</p>';
    }
    public function fashionmuseum(){
        echo '<img src="https://pbs.twimg.com/media/DfaRFA_X0AE1AQt.jpg:large" alt="fashion-museum" height="500"/>';
        echo '<h3>Fashion Museum by Fashionizta</h3>';
        echo '<p>Just see the wonderfull all of the fashion all periodes</p>';
    }
    public function fashioncharity(){
        echo '<img src="https://www.romania-insider.com/sites/default/files/2019-03/bucharest_charity_fashion_show_fb.jpg" alt="fashion-charity" height="500"/>';
        echo '<h3>Fashion Charity by Fashionizta</h3>';
        echo '<p>Help people around the world trhough your love with fashion</p>';
    }
}
