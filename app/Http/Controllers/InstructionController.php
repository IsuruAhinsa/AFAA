<?php

namespace App\Http\Controllers;

use App\Instruction;
use Artesaos\SEOTools\Facades\SEOMeta;
use Illuminate\Http\Request;

class InstructionController extends Controller
{
    public function show($id)
    {
        $instruction = Instruction::with('category')->where('category_id', $id)->first();
        SEOMeta::setTitle($instruction->category->name);
        return view('instruction', [
            'instruction' => $instruction
        ]);
    }
}
