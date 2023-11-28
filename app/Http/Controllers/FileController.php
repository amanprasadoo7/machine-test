<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FileController extends Controller
{

    public function fileUpload(Request $request)
    {
        return view('file-upload');
    }

    public function form_store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'file' => 'required|min:2048|max:204800000', // maximum 2MB
        ]);
        
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        

        return "yes";

        //     $validator = Validator::make($request->all(), [
        //         'file' => 'required|size:2048', //2mb
        //     ]);
        //     if ($validator->fails()) {
        //         return back()
        //             ->withErrors($validator)
        //             ->withInput();
        //     }
        //     return view('file-upload');
    }
}
