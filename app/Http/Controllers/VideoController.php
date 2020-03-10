<?php

namespace App\Http\Controllers;

use App\Video;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;

class VideoController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('VIDEO');
        SEOMeta::setDescription('This is videos gallery for AFAA.');

        OpenGraph::setDescription('This is videos gallery for AFAA.');
        OpenGraph::setTitle('VIDEO');
        OpenGraph::setUrl('http://videos.lk');

        TwitterCard::setTitle('VIDEO');
        TwitterCard::setSite('@AFAA_official');

        JsonLd::setTitle('VIDEO');
        JsonLd::setDescription('This is videos gallery for AFAA.');

        return view('albums.video.index', [
            'videos' => $this->getVideos()
        ]);
    }

    public function getVideos()
    {
        return Video::where('status', 1)
            ->orderBy('id', 'desc')
            ->get();
    }
}
