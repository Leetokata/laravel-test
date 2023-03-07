<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;



class FileController extends Controller
{
    public function files()
    {
       $files = File::orderBy('id','desc')->take(10)->get();
       return view('files.index', compact('files'));
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'files' => 'required',
            'files.*' => 'mimes:pdf',
        ]);


        $files = $request->file('files');

        foreach($files as $file){

        	$path = Storage::disk('public')->put('pdf', $file);

            File::create([
                'path' => $path,
            ]);
        }
        return redirect()->route('files');
    }



    public function destroy($id)
    {
        $file = File::find($id);

        $delete = Storage::disk('public')->delete($file->path);
        if($delete){
            $file->delete();
            return redirect()->route('files');
        }


    }
}
