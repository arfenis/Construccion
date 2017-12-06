<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facedes\Storage;
use App\Post;

class ToursController extends Controller
{


        /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tours = Post::all();
        return view('pages.tours.index')->with('tours', $tours);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.tours.manage');
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
            'title' => 'required',
            'description' => 'required',
            'tour_code' => 'required',
            'short_description' => 'required',
            'cover_image' => 'image|nullable|max:1999'
        ]);

        //Handle File upload
        if($request->hasFile('cover_image')){

            //Get FileName with the extension

            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            //Get just Filename

            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            
            //Get just Esxtencion
            $extension = $request->file('cover_image')->getClientOriginalExtension();

            //Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;

            //Upload Image
            $path = $request->file('cover_image')->storeAs('public/img/cover_images', $fileNameToStore);

        } else {

            $fileNameToStore = "noimage.jpg";
        }

        //Create a New Post
            $post = New Post;
            $post->fp_title = $request->input('title');
            $post->fp_description = $request->input('description');
            $post->fp_code = $request->input('tour_code');
            $post->fp_short_description = $request->input('short_description');
            $post->fp_adult_price = $request->input('adult_price');
            $post->user_id = auth()->user()->id;
            $post->cover_image = $fileNameToStore;
            $post->save();

        return redirect('/tours')->with('success', 'Tour Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tours = Post::find($id);
        return view('pages.tours.tour')->with('tour',$tours);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tours = Post::find($id);
        //Check for correct user
        if(auth()->user()->id !==$tours->user_id){

            return redirect('/tours')->with('error','Unauthorize Page');
        }
        return view('pages.tours.edit')->with('tour',$tours);
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
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'tour_code' => 'required',
            'short_description' => 'required'
        ]);

         //Handle File upload
         if($request->hasFile('cover_image')){
            
                        //Get FileName with the extension
            
                        $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                        //Get just Filename
            
                        $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                        
                        //Get just Esxtencion
                        $extension = $request->file('cover_image')->getClientOriginalExtension();
            
                        //Filename to store
                        $fileNameToStore= $filename.'_'.time().'.'.$extension;
            
                        //Upload Image
                        $path = $request->file('cover_image')->storeAs('public/img/cover_images', $fileNameToStore);
            
                    } 
        //Create a New Post
            $post = Post::find($id);
            $post->fp_title = $request->input('title');
            $post->fp_description = $request->input('description');
            $post->fp_code = $request->input('tour_code');
            $post->fp_short_description = $request->input('short_description');
            $post->fp_adult_price = $request->input('adult_price');
            if($request->hasFile('cover_image')){
                $post->cover_image = $fileNameToStore;

            }
            $post->save();

        return redirect('/tours')->with('success', 'Tour Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
         //Check for correct user
         if(auth()->user()->id !==$tours->user_id){
            
                        return redirect('/tours')->with('error','Unauthorize Page');
                    }
        
            if($post->cover_image != 'noimage.jpg'){

                //Delete Image
                Storage::delete('public/img/cover_images/'.$post->cover_image);

            }

        $post->delete();
        
        return redirect('/tours')->with('success', 'Tour Remove');
    }
}
