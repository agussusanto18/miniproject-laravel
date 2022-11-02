<?php

namespace App\Traits;
use Illuminate\Http\UploadedFile;

trait FileTrait 
{
    public function uploadFile(UploadedFile $file) : string
    {
        $filename = now()->timestamp."{$file->getClientOriginalName()}";
        $file->move('uploads', $filename);
        return $filename;
    }
}