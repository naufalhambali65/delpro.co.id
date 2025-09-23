<?php

namespace App\Http\Controllers;

use App\Models\TemporaryFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    public function store(Request $request)
    {
        if ($request->hasFile('images')) {
            $path = $request->file('images')->store('temp_files', 'public');
            TemporaryFile::create([
                'image' => $path,
            ]);
            return $path;
        }

        return '';
    }

    public function revert(Request $request)
    {
        // kalau mau hapus file yang diupload
        $fileName = $request->getContent();
        TemporaryFile::where('image', $fileName)->delete();
        Storage::disk('public')->delete($fileName);

        return response('');
    }

    public function remove(Request $request)
    {
        $fileName = $request->image;
        TemporaryFile::where('image', $fileName)->delete();
        Storage::disk('public')->delete($fileName);

        return response('');
    }

    public function clearTemp()
    {
        // hapus semua file di folder temp_files
        $files = Storage::disk('public')->allFiles('temp_files');
        Storage::disk('public')->delete($files);
        TemporaryFile::truncate();

        return response('');
    }

}
