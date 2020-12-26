<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserDoPostController extends Controller
{
        public function doposttablets(Request $request)
        {
            $this->validateWith([
                'radio1' => 'required',
                'radio2' => 'required',
                'title' => 'required|max:255',
                'description' => 'required|max:500',
                'district' => 'required',
                'price' => 'required',
                'image' => 'required',
                'country' => 'required',
                'name' => 'required',
                'number' => 'required'
            ]);

            $str = strtolower($request->title);
            dd($str);
//            $game->slug = preg_replace('/\s+/', '-', $str);
        }
}
