<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function video(){
        $videos = Video::orderBy('created_at')->get()->all();
        return view('pages.video', ['videos' => $videos]);
    }

    
    public function videocreate()
    {
        return view('pages.videocreate');
    }

    

    public function storevzideo(Request $request)
    {
        $request->validate([
            'video' => 'required|mimes:mp4,oga,ogx,ogv,ogg,webm'
        ]);

      
        $file = $request->file('video');
        $extension = $file->getClientOriginalExtension();
        $fileName = $file->getClientOriginalName();

        // Move the file to the 'upload' folder with the original filename
        $file->move('upload', $fileName);

    
        $video = new Video;

        $video->video = $fileName;

        $video->save();
        return redirect()->route('pages.video')->with('success', 'Video Added Successfully');
    }


    public function storevideo(Request $request) {
        // Validate the incoming request
        $validator = $request->validate([
            'video' => 'required|mimes:mp4,oga,ogx,ogv,ogg,webm'
        ], [
            'video.required' => 'Please select a video file.',
            'video.mimes' => 'The video must be a file of type: mp4, oga, ogx, ogv, ogg, webm.'
        ]);
    
        // Check if the request contains a valid video file
        if ($request->file('video')->isValid()) {
            // Get the file details
            $file = $request->file('video');
            $fileName = $file->getClientOriginalName();
    
            // Store the file in the 'videos' directory
            $file->move('upload', $fileName);
    
            // Save the file details to the database
            $video = new Video;
            $video->video = $fileName;
            $video->save();
    
            // Return a JSON response indicating success
            return response()->json(['success' => 'Video uploaded successfully']);
        } else {
            // Return a JSON response indicating error
            return response()->json(['error' => 'Invalid video file'], 422);
        }
    }

 
    public function delete(Request $request, $id) {
        $video = Video::find(decrypt($id));

        if ($video) {
            // Delete the file from storage
            $filePath = public_path('upload/' . $video->video);
            if (file_exists($filePath)) {
                unlink($filePath);
            }

            // Delete the record from the database
            $video->delete();

            return redirect()->route('pages.video')->with('success', 'Video Deleted');
        } else {
            // If video not found, return error message or redirect as needed
            return redirect()->route('pages.video')->with('error', 'Video not found');
        }
    }

}
