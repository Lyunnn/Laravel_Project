<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;

class ImageController extends Controller
{
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'required'
        ]);

        //get the image file from request and store it in public/experiences_images
        $file = $request->file('image');
        $fileName = $file->getClientOriginalName();
        $destinationPath = public_path().'/experiences_images';
        $file->move($destinationPath,$fileName);

        //the food image will be stored in this format '/experiences_images/img.jpg'
        $image_store = 'experiences_images/'.$fileName;

        $Image = new Image();
        $Image->exp_proj_id = $request->exp_proj_id;
        $Image->image = $image_store;
        $Image->save();

        // return redirect()->action([ExperienceController::class, 'show'], ['exp_proj_id' => $request->exp_proj_id]);
        return redirect()->action([ExperienceController::class, 'index']);
    }

}
