<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use App\Models\Image;
use App\Models\Skill;
use App\Http\Controllers\ExperienceController;
use Auth;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiences = Experience::all();
        $skills = Skill::all();
        $images = Image::all();
        return view('experiences.index')->with('experiences', $experiences)->with('skills', $skills)->with('images', $images);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('experiences.create_experience');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'proj_name' => 'required|max:50|unique:experiences,proj_name,',
            'proj_year' => 'required|numeric|min:2017',
            'proj_description' => 'nullable|max:500',
            'URL' => 'nullable|url'
        ]);

        $experience = new Experience();
        $experience->proj_name = $request->proj_name;
        $experience->proj_year = $request->proj_year;
        $experience->proj_description = $request->proj_description;
        $experience->URL = $request->URL;
        $experience->save();

        return redirect()->action([ExperienceController::class, 'index']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $experience = Experience::find($id);
        $ImagesPerPage = 3;
        $Images = Image::where('exp_proj_id', $id)->paginate($ImagesPerPage);
        return view('experiences.index')->with('experience', $experience)->with('Images', $Images);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $experience = Experience::find($id);
        $experience->delete();

        return redirect()->action([ExperienceController::class, 'index']);
    }
}
