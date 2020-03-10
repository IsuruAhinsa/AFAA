<?php

namespace App\Http\Controllers;

use App\Judge;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;

class JudgeController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('JUDGE');
        SEOMeta::setDescription('This is AFAA Judge panel');

        OpenGraph::setDescription('This is AFAA Judge panel');
        OpenGraph::setTitle('JUDGE');
        OpenGraph::setUrl('http://judges.lk');

        TwitterCard::setTitle('JUDGE');
        TwitterCard::setSite('@AFAA_official');

        JsonLd::setTitle('JUDGE');
        JsonLd::setDescription('This is AFAA Judge panel');

        return view('judges', [
            'judges' => $this->getJudges()
        ]);
    }

    public function getJudges()
    {
        return Judge::where('status', 1)
            ->orderBy('id', 'asc')
            ->get();
    }
}
