<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Texte;
use App\Models\Img; 

class WebSiteController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        $texte = Texte::all();
        return view('index', compact('slider', 'texte'));
    }

    public function contact()
    {
        $texte = Texte::all();
        return view('contact', compact('texte'));
    }

    public function product()
    {
        $texte = Texte::all();
        return view('product', compact('texte'));
    }

    public function gallery()
    {
        $mage = Img::all();
        $texte = Texte::all();
        return view('gallery', compact('mage', 'texte'));
    }
    
    public function service()
    {
        $texte = Texte::all();
        return view('services', compact('texte'));
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function slider()
    {
        return view('add.dashAddSlider');
    }
    public function texte()
    {
        return view('add.dashAddTexte');
    }

    public function image()
    {
        return view('add.dashAddImg');
    }
}
