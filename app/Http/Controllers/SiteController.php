<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;
use DB;
use Image as InterventionImage;
use App\Models\Slider;
use App\Models\Img;
use App\Models\Contact;
use App\Models\Texte;

class SiteController extends Controller
{
    /*Slide*/
    public function add_slider(Request $request)
{
 $fileName = null;
    if(request()->hasFile('img')){
        $img = request()->file('img');
        $image = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
        $source = $img;
        $target = 'images/' .$image;
        //dd($source, $target);
        InterventionImage::make($source)->fit(1000, 900)->save($target);
    } 
    $slider = Slider::create([
        'titre' => $request->titre,
        'sous_titre' => $request->sous_titre,
        'img' => $image,  
    ]);
   //dd($Test);
     session()->flash('message','Ajout effectué avec succès');
     return redirect()->route('home');
  }

    public function delete_slider($id)
    {
        $slider = Slider::find($id);
        $slider->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function update_slider($id)
    {
        $slider = Slider::find($id);
        return view('update.updateSlide',compact('slider'));
    }

    public function edite_slider(Request $request, $id)
    {        
        $updated= Slider::find($id);
              $fileName= null;
             if(request()->hasFile('img')){
                $img = request()->file('img');
                $image = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
                $source = $img;
                $target = 'images/' .$image;
                //dd($source, $target);
                InterventionImage::make($source)->fit(1000, 900)->save($target);
            }
             else{
    
                $image = $updated->image;
               }
    
           $updated->update([
                    'titre' => $request->titre,
                    'sous_titre' => $request->sous_titre,
                    'img' => $image,  
            ]);
    
            session()->flash('message','Update effectuée avec succès');
             return redirect()->route('home');
        
    }

    public function add_texte(Request $request)
    {
    
        Texte::create([
        'titre' => htmlspecialchars($request->titre),
        'texte' => htmlspecialchars($request->texte),
    ]);
      session()->flash('message','Ajout effectué avec succès');
      return redirect()->route('home');

    }

    public function update_texte($id)
    {
        $texte = Texte::find($id);
        return view('update.updateTexte',compact('texte'));
    }

    public function edite_texte(Request $request, $id)
    {        
        $updated= Texte::find($id);   
        $updated->update([
            'titre' => htmlspecialchars($request->titre),
            'texte' => htmlspecialchars($request->texte),  
          ]);
          
       session()->flash('message','Update effectuée avec succès');
       return redirect()->route('home');
        
    }

    public function delete_texte($id)
    {
        $texte = Texte::find($id);
        $texte->delete();
        session()->flash('message','Operation effectuée avec succès');
        return redirect()->back();
    }

    public function add_img(Request $request)
    {
     $fileName = null;
        if(request()->hasFile('img')){
            $img = request()->file('img');
            $image = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
            $source = $img;
            $target = 'images/' .$image;
            //dd($source, $target);
            InterventionImage::make($source)->fit(200, 200)->save($target);
        } 
        $mage = Img::create([
            'sous_titre' => $request->sous_titre,
            'img' => $image,  
        ]);
       //dd($Test);
         session()->flash('message','Ajout effectué avec succès');
         return redirect()->route('home');
      }
    
        public function delete_img($id)
        {
            $mage = Img::find($id);
            $mage->delete();
            session()->flash('message','Operation effectuée avec succès');
            return redirect()->back();
        }

        public function update_img($id)
        {
            $mage = Img::find($id);
            return view('update.updateImg',compact('mage'));
        }
    
        public function edite_img(Request $request, $id)
        {        
            $updated= Img::find($id);
                  $fileName= null;
                 if(request()->hasFile('img')){
                    $img = request()->file('img');
                    $image = md5($img->getClientOriginalExtension().time()).".".$img->getClientOriginalExtension();
                    $source = $img;
                    $target = 'images/' .$image;
                    //dd($source, $target);
                    InterventionImage::make($source)->fit(1000, 900)->save($target);
                }
                 else{
        
                    $image = $updated->image;
                   }
        
               $updated->update([
                        'sous_titre' => $request->sous_titre,
                        'img' => $image,  
                ]);
        
                session()->flash('message','Update effectuée avec succès');
                 return redirect()->route('home');
            
        }
}
