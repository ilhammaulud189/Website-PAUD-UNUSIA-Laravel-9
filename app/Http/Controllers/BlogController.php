<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

use function Pest\Laravel\post;

class BlogController extends Controller
{
    public function index()
    {
        $blog = Post::latest()->paginate(5);
        return view('pages.crudblogpost.crudpost',['post'=>$blog]);
        
    }

    public function blog()
    {
        $blog = Post::latest()->paginate(5);
        return view('pages.crudblogpost.blog',['post'=>$blog]);
        
    }
   
    public function show($id)
    {
        $data = Post::find($id);
        $blog = Post::latest()->paginate(5);
         //dd($data);
        return view('pages.crudblogpost.blogdetail',['post' => $blog],compact('data'));
        
    }

    public function create()
    {
        return view('pages.crudblogpost.crudpost');
    } 

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul'=>'required',
            'deskripsi'=>'required',
            'foto'=>'required|file|image|mimes:png,jpg,jpeg|max:2048',
            
        ]);

    /**
     * variabel -> foto berasal dari Name"foto" yang ada di form input file crudpost.blade.php 
     */
        $file = $request->file('foto');
        $fileName = uniqid(). '.'. $file->getClientOriginalExtension();
        $file->storeAs('public/postfoto', $fileName);
        $data['foto'] = $fileName;  

        Post::create($data);

        return redirect('/blog')->with('success','Kamu berhasil menambahkan postingan baru');

    }

    public function edit($id)
    {
        $data= Post::find($id);
        //dd($data);
        return view('pages.crudblogpost.editpost', compact('data'));
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
        $data = [
            'judul'=>$request->input('judul'),
            'deskripsi'=>$request->input('deskripsi'),

        ];

        if ($request->hasFile('foto')) {
            $request->validate([
                'foto'=>'file|image|mimes:png,jpg,jpeg|max:2048',
            ]);
            $file = $request->file('foto');
            $fileName = uniqid(). '.'. $file->getClientOriginalExtension();
            $file->storeAs('public/postfoto', $fileName);
            $data['foto'] = $fileName;
           
            $data= Post::where('id',$id)->first();
            File::delete(public_path('storage/public\postfoto').'/'.$data->foto);

            $data=[
                 'foto'=>$data['foto']=$fileName,
                 
            ];
        }     

        
        $data = Post::find($id)->update($data);

        return redirect('/blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data= Post::where('id',$id)->first();
        File::delete(public_path('storage/public\postfoto').'/'.$data->foto);

        Post::where('id',$id)->delete();
       // $data = Post::find($id);
        //$data->delete();

        return redirect('/blog');
    }
}
