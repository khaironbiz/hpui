<?php

namespace App\Http\Controllers;

use App\Models\Home;
use App\Http\Requests\StoreHomeRequest;
use App\Http\Requests\UpdateHomeRequest;
use Image;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = [
            'title'     => 'Home',
            'navbar'    => 'home',
        ];
        return view('landing.all.index', $data);
    }
    public function about()
    {

        $data = [
            'title'     => 'About',
            'navbar'    => 'about',
        ];
        return view('landing.about.about', $data);
    }
    public function services()
    {

        $data = [
            'title'     => 'Services',
            'navbar'    => 'services',
        ];
        return view('landing.services.services', $data);
    }
    public function contact()
    {

        $data = [
            'title'     => 'Contact Us',
            'navbar'    => 'contact',
        ];
        return view('landing.contact.contact', $data);
    }
    public function foto()
    {

        $data = [
            'title'     => 'Media Foto',
            'navbar'    => 'media',
        ];
        return view('landing.foto.foto', $data);
    }
    public function video()
    {

        $data = [
            'title'     => 'Media Video',
            'navbar'    => 'media',
        ];
        return view('landing.video.video', $data);
    }
    public function events()
    {

        $data = [
            'title'     => 'Events',
            'navbar'    => 'events',
        ];
        return view('landing.events.events', $data);
    }
    public function resizeImagePost(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $input['imagename'] = time().'.'.$image->extension();

        $destinationPath = public_path('/thumbnail');
        $img = Image::make($image->path());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);

        $destinationPath = public_path('/images');
        $image->move($destinationPath, $input['imagename']);

        return back()
            ->with('success','Image Upload successful')
            ->with('imageName',$input['imagename']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHomeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHomeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(Home $home)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(Home $home)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHomeRequest  $request
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHomeRequest $request, Home $home)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Home  $home
     * @return \Illuminate\Http\Response
     */
    public function destroy(Home $home)
    {
        //
    }
}
