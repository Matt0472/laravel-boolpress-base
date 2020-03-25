<?php

namespace App\Http\Controllers;

use App\Chronicle;

use Illuminate\Http\Request;

class ChronicleBlogController extends Controller
{
    private $validationBlog = [
        'author' => 'required|string|max:25',
        'author_job' => 'required|string|max:100',
        'category' => 'required|string|max:30',
        'title' => 'required',
        'img' => 'required|string',
        'article' => 'required'
    ];
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $chronicles = Chronicle::all();
        return view('chronicle_blog.index', compact('chronicles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chronicle_blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $request->validate($this->validationBlog);

        $newChronicle = new Chronicle();
        $newChronicle->fill($data);
        $saved = $newChronicle->save();

        if ($saved) {
            $newChronicle = Chronicle::orderBy('id', 'desc')->first();
            return redirect()->route('chronicle.show', $newChronicle);
        }
        dd('Articolo non salvato correttamente!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Chronicle $chronicle)
    {
        return view('chronicle_blog.show', compact('chronicle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chronicle $chronicle)
    {
        $id = $chronicle->id;
        $deleted = $chronicle->delete();
        $data = [
            'id' => $id,
            'chronicles' => Chronicle::all()
        ];

        return view('chronicle_blog.index', $data);
    }
}
