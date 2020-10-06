<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Video;
class VideoController extends Controller
{
    public function get(Video $video)
    {
    	// return Video::find($id);
    	return $video;
    }
}
