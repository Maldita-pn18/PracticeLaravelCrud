<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FileUpload;

class ImageController extends Controller
{
    public function store(Request $request)
    {
       if($request->get('image'))
       {
          $image = $request->get('image');
          $name = time().'.' . explode('/', explode(':', substr($image, 0, strpos($image, ';')))[1])[1];
          \Image::make($request->get('image'))->save(public_path('images/').$name);
        }

       $image_name = new FileUpload();
       $image_name->image_directory = $name;
       $image_name->save();

       return response()->json(['success' => 'You have successfully uploaded an image'], 200);
     }
}
