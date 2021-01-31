<?php

namespace App\Http\Controllers;
use App\links;
use App\Mapping;
use Illuminate\Http\Request;
use Auth;

class LinkController extends Controller
{

    public function welcome(Request $request)
    {
        return view('welcome');
    }

    public function index(Request $request)
    {   
        $user_id = Auth::user()->id;
    	$links = links::where('user_id', $user_id)->get();
    	return view('dashboard', ['links' => $links]);
    }

    public function create(Request $request)
    {
        // return $request;
        $slug = Links::where('slug', $request->slug)->get();

        if (count($slug) > 0) {
            $links = Links::where('user_id', Auth::user()->id)->get();
            return view('dashboard', ['links' => $links])->with('error', 'Slug yang anda gunakan telah ada, gunakan slug yang lain!');
        }
    	
        links::create([
            'slug' => $request->slug,
            'redirect' => $request->redirect,
            'user_id' => Auth::user()->id,
            'clicks' => 0
        ]);

        $links = Links::where('user_id', Auth::user()->id)->get();
    	return view('dashboard', ['links' => $links]);
    }

    public function edit($id)
    {
    	$links = links::find($id);
    	// dd($links);
    	return view('edit', ['links' => $links]);
    }

    public function update(Request $request, $id)
    {
        // return $request->all();
    	$links = links::find($id);
    	$links->update($request->all());
    	return redirect('/link');
    }

    public function delete($id)
    {
    	$links = links::find($id);
    	$links->delete();
    	return redirect('/link');
    }

    public function run(String $slug)
    {
    	$mapping = Mapping::where('slug', $slug)->get();
    	// dd($mapping);
    	if (count($mapping) < 1) {
    	 	return abort(404);
    	 } else {
            $clicks = Links::where('slug', $slug)->get();
            Links::where('slug', $slug)->update([
                'clicks'=> $clicks[0]->clicks + 1
            ]);
    	 	return redirect($mapping[0]->redirect);
    	 }
    }

    public function random(Request $request)
    {
        // return $request;
        // links::create([
        //     'slug' => \Str::random(5),
        //     'redirect' => $request->redirect,
        //     'user_id' => 0
        // ]);
        $link = new Links;
        $link->slug = \Str::random(5);
        $link->redirect = $request->redirect;
        $link->user_id = 0;
        $link->save();
        return view('shorten', ['slug' => $link->slug]);
    }

    public function sublink(Re0quest $request)
    {
        $links = links::all();
        return $links;
        return view('sublink', ['links' => $links]);
    }
}
