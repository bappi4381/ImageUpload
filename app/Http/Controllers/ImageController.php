<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
class ImageController extends Controller
{
    private $image;
     public function Home()
     {
        return view('index');
     }
     public function create(Request $request)
     {
        $image        = $request->file('image');
        $extention    = $image->getClientOriginalName();
        $imageName    = 'product_'.time().'.'.$extention;
        $image->storeAs('Public',$imageName);

        $image = new Image ;
        $image->image = $imageName;
        $image->save();
        return view('index');

     }
     
      public function manage()
      {
          $this->image = Image::all();
          return view('manage',['images'=> $this->image]);
      }
     
}
