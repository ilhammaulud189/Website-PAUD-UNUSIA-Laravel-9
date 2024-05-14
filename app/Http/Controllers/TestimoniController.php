<?php

namespace App\Http\Controllers;

use App\Models\testimonial;
use App\Models\Testimonial as ModelsTestimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TestimoniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = Testimonial::all();
        //dd($test);
        return view('pages.crudtestimoni.testimoni',['testimoni'=>$test]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.crudtestimoni.testimoni');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $test = $request->validate([
            'nama'=>'required',
            'detail'=>'required',
            'testimoni'=>'required',
            'foto'=>'required|file|image|mimes:png,jpg,jpeg|max:2048',
            
        ]);

        $file = $request->file('foto');
        $fileName = uniqid(). '.'. $file->getClientOriginalExtension();
        $file->storeAs('public/testimoni', $fileName);
        $test['foto'] = $fileName;  

        testimonial::create($test);

        return redirect('/testimoni')->with('success','Kamu berhasil menambahkan gambar sponsor baru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $test= testimonial::find($id);
        //dd($data);
        return view('pages.crudtestimoni.edittestimoni', compact('test'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $test = [
            'nama'=>$request->input('nama'),
            'detail'=>$request->input('detail'),
            'testimoni'=>$request->input('testimoni'),

        ];

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto'=>'file|image|mimes:png,jpg,jpeg|max:2048',
            ]);
            $file = $request->file('foto');
            $fileName = uniqid(). '.'. $file->getClientOriginalExtension();
            $file->storeAs('public/testimoni', $fileName);
            $test['foto'] = $fileName;
           
            $test= testimonial::where('id',$id)->first();
            File::delete(public_path('storage/public\testimoni').'/'.$test->foto);

            $test=[
                 'foto'=>$data['foto']=$fileName,
                 
            ];
        }     

        
        $test = testimonial::find($id)->update($test);

        return redirect('/testimoni');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Testimoni  $testimoni
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test= Testimonial::where('id',$id)->first();
        File::delete(public_path('storage/public\testimoni').'/'.$test->foto);

        testimonial::where('id',$id)->delete();
       // $data = Post::find($id);
        //$data->delete();

        return redirect('/testimoni');
    }
}
