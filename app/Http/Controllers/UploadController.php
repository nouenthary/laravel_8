<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\PdfToImage\Pdf;

class UploadController extends Controller
{
    public function index()
    {
        return [
            'file' => 'file'
        ];
    }

    public function store(Request $request)
    {
        $file = $request->file('file');
        $fileName = $file->getClientOriginalName();


        $file->move('upload', $fileName);


        $path = 'upload/grade11.pdf';

        return [
            //'file' => $fileName,
            // 'path' => $path,
            $path
        ];
    }
}
