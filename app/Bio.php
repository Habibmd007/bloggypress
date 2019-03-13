<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bio extends Model
{
    public function imgfinal($request)
    {

        $image = $request->file('img');
        $slug = str_slug($request->name);

        if (isset($image)) {
            $imageName = $slug.'-'.uniqid().'-'.'.'.$image->getClientOriginalExtension();
            $image->move('images/', $imageName);
            }else {
            $imageName = 'default.jpg';
            }
            $imageUrl = 'images/'.$imageName;
       
        return $imageUrl;

    }
    
    public function imgfinalUpdate($request , $bio)
    {

        if (file_exists($bio->img) && $bio->img !=='images/default.jpg') {
            unlink($bio->img);
        }

        $image = $request->file('img');
        $slug = str_slug($request->name);

        if (isset($image)) {
            $imageName = $slug.'-'.uniqid().'-'.'.'.$image->getClientOriginalExtension();
            $image->move('images/', $imageName);
            }else {
            $imageName = 'default.jpg';
            }
            $imageUrl = 'images/'.$imageName;
       
        return $imageUrl;

    }

   

    protected function cropImageUpload($request)
        {   
            $image= $request->file('product_image');
            $imageFileType = $image->getClientOriginalExtension();
            $imageName = $request->product_name .'.' . $imageFileType;
            // $directory = 'thumbnail_images/';
            $directory = public_path('/thumbnail_images');
            $thumb_img = Image::make($image->getRealPath())->resize(200, 200);
            $imageUrl = 'thumbnail_images/' . $imageName;
            $thumb_img->save($directory.'/'.$imageName,80);
            // $directory = 'product-images/';
            // $image->move($directory, $imageName,80);
            return $imageUrl;
        }

}
