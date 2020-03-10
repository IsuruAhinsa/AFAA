<?php

namespace App\Http\Controllers;

use App\Applicant;
use App\Attachment;
use App\Category;
use App\Http\Requests\StoreAcademic;
use App\Http\Requests\StoreApplicant;
use App\Http\Requests\StoreBasicInformation;
use App\Http\Requests\StoreContactInformation;
use App\Http\Requests\StoreExperience;
use App\Http\Requests\UploadAvatar;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Intervention\Image\Facades\Image;

class ApplicantController extends Controller
{
    public function index()
    {
        SEOMeta::setTitle('REGISTRATION');
        SEOMeta::setDescription('This is an application form for applicant.');

        OpenGraph::setDescription('This is an application form for applicant.');
        OpenGraph::setTitle('REGISTRATION');
        OpenGraph::setUrl('http://registration.lk');

        TwitterCard::setTitle('REGISTRATION');
        TwitterCard::setSite('@AFAA_official');

        JsonLd::setTitle('REGISTRATION');
        JsonLd::setDescription('This is an application form for applicant.');

        return view('registration', [
            'categories' => $this->getCategories()
        ]);
    }

    public function getCategories()
    {
        return Category::where('status', 1)->get();
    }

    public function store(StoreApplicant $request)
    {
        $validated = $request->validated();

        if ($request->hasFile('avatar'))
        {
            $avatar = $request->file('avatar');
            if ($avatar->isValid())
            {
                $extension = $avatar->getClientOriginalExtension();
                $filename = date("Y_m_d_h_i_s") . "." . $extension;
                $path = 'uploads/avatars/' . $filename;
                Image::make($avatar)->save($path);
            }
        }

        $applicant = Applicant::create([
            'category' => $request->category,
            'avatar' => $filename,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'nic' => $request->nic,
            'gender' => $request->gender,
            'birthday' => $request->birthday,
            'body_color' => $request->body_color,
            'body_weight' => $request->body_weight,
            'body_height' => $request->body_height,
            'hair_color' => $request->hair_color,
            'country' => $request->country,
            'telephone_1' => $request->telephone_1,
            'telephone_2' => $request->telephone_2,
            'state' => $request->state,
            'city' => $request->city,
            'email' => $request->email,
            'street' => $request->street,
            'nationality' => $request->nationality,
            'zip' => $request->zip,
            'language_skill' => $request->language_skill,
            'year' => $request->year,
            'university' => $request->university,
            'degree' => $request->degree,
            'experience' => $request->experience
        ]);

        if($request->hasFile('attachment')) {
            foreach ($request->file('attachment') as $file) {
                $extension = $file->getClientOriginalExtension();
                $filename = uniqid() . "." . $extension;
                $file->move(public_path('uploads/attachments/'), $filename);
                // save to database
                Attachment::create([
                    'applicant_id' => $applicant->id,
                    'file' => $filename
                ]);
            }
        }

    }

    /*public function showAttachment($id)
    {
        return view('form.registration.form_attachment')->with(compact('id'));
    }*/

    /*public function uploadAttachment(Request $request)
    {
        $id = $request->id;
        $file = $request->file('file');
        if ($file) {
            $filename = $file->getClientOriginalName();
            $file->move('uploads/attachments', $filename);
        }
        Attachment::create([
            'applicant_id' => $id,
            'file' => $filename
        ]);
        return 'done';
    }*/
}
