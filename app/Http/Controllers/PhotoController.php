<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImagesRequest;
use Illuminate\Support\Str;

class PhotoController extends Controller
{

    public function getForm()
    {
        return view('photo');
    }

    public function postForm(ImagesRequest $request)
    {
        $image = $request->file('image');

        if($image->isValid())
        {
            $chemin = config('images.path');

            $extension = $image->getClientOriginalExtension();

            do {
                $nom = Str::random(5) . '.' . $extension;
            } while(file_exists($chemin . '/' . $nom));

            if($image->move($chemin, $nom)) {
                return view('photo_ok');
            }
        }

        return redirect('photo')
            ->with('error','Désolé mais votre image ne peut pas être envoyée !');
    }

}
