<?php
 
namespace App\Http\Controllers\blog;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\blog;
use App\kategori;
use App\galeri;

use Illuminate\Http\Request;

class blogController extends Controller
{
    public function index(Request $request)
    {
    	$kategori = kategori::all();
    	$recent = blog::take(4)->get();
        $miniGaleri = galeri::take(6)->get();
        if ($request->has('category')) {
            $blog = blog::where('kategori',$request->category)->paginate(5);
        }
    	else $blog = blog::paginate(5);
        return view('blog.index',compact('kategori','recent','blog','miniGaleri'));
    }

    public function detailBlog($id){
        $kategori = kategori::all();
        $recent = blog::take(4)->get();
        $miniGaleri = galeri::take(6)->get();
        $data = blog::find($id);
        return view('blog.detailBlog',compact('data','kategori','recent','miniGaleri'));   
    }

    public function createCategory(Request $request){
    	try{
            if (Auth::check()) {
    	    	$data = new kategori();
    	    	$data->kategori = $request->kategori;
                $data->key = $request->key;
    	    	$data->save();
    	    	return redirect()->back()->with('alert-success','Success add new category!');
            }
            else return redirect()->back()->with('alert-fail', 'Anda tidak mempunyai Akses');
    	}catch(\Exception $e){
    		return redirect()->back()->with('alert-fail','Failed add new category! Contact Developer!'); 
    	}
    }

    public function updateCategory(Request $request){
        try{
            if (Auth::check()) {
                $data = kategori::find($request->id);
                $data->kategori = $request->kategori;
                $data->key = $request->key;
                $data->save();
                return redirect()->back()->with('alert-success','Success edit category!');
            }
            else return redirect()->back()->with('alert-fail', 'Anda tidak mempunyai Akses');
        }catch(\Exception $e){
            return redirect()->back()->with('alert-fail','Failed edit category! Contact Developer!'); 
        }
    }

    public function createPost(Request $request){
        try{
            if (Auth::check() and $request->hasFile('foto')) {
                $data = new blog();
                $data->judul = $request->judul;
                $data->kategori = $request->kategori;
                $data->detail = $request->detail;
                $data->tanggal = date("Y-m-d");
                $data->jam = date("H:m");

                // $cek = blog::deleteLinked($data->lokasi_foto);
                $picts=['png','jpg','jpeg'];
                $ext = strtolower($request->foto->getClientOriginalExtension());
                if(in_array($ext,$picts)){
                    $name = 'blog-'.uniqid().".".$request->foto->getClientOriginalExtension();
                    $path = '/storage/'.$name;
                    \File::put(public_path().$path, file_get_contents($request->foto->getRealPath()));
                    $data->foto = '/storage/'.$name;
                }else{
                    return redirect()->back()->with('alert-fail','Foto harus berformat jpg / jpeg / png')->withInput();
                } 

                $data->save();
                return redirect()->back()->with('alert-success','Success add new post!');
            }
            else return redirect()->back()->with('alert-fail', 'Anda tidak mempunyai Akses atau Data tidak lengkap!');
        }catch(Exception $e){
            return redirect()->back()->with('alert-fail','Failed add new post! Contact Developer!'); 
        }
    }

    public function updatePost(Request $request){
        try{
            if (Auth::check() and $request->hasFile('foto')) {
                $data =  blog::find($request->id);
                $data->judul = $request->judul;
                $data->kategori = $request->kategori;
                $data->detail = $request->detail;
                // $data->tanggal = date("Y-m-d");
                // $data->jam = date("H:m");

                $cek = $data->deleteLinked($data->foto);
                $picts=['png','jpg','jpeg'];
                $ext = strtolower($request->foto->getClientOriginalExtension());
                if(in_array($ext,$picts)){
                    $name = 'blog-'.uniqid().".".$request->foto->getClientOriginalExtension();
                    $path = '/storage/'.$name;
                    \File::put(public_path().$path, file_get_contents($request->foto->getRealPath()));
                    $data->foto = '/storage/'.$name;
                }else{
                    return redirect()->back()->with('alert-fail','Foto harus berformat jpg / jpeg / png')->withInput();
                } 

                $data->save();
                return redirect()->back()->with('alert-success','Success edit post!');
            }
            else return redirect()->back()->with('alert-fail', 'Anda tidak mempunyai Akses atau Data tidak lengkap!');
        }catch(Exception $e){
            return redirect()->back()->with('alert-fail','Failed to edit post! Contact Developer!'); 
        }
    }

    public function deleteCategory($id){
        try{
            if (Auth::check()) {
                $data = kategori::find($id);
                $data->delete();
                return redirect()->back()->with('alert-success','Success delete category!');
            }
            else return redirect()->back()->with('alert-fail', 'Anda tidak mempunyai Akses');
        }catch(\Exception $e){
            return redirect()->back()->with('alert-fail','Failed delete category! Contact Developer!'); 
        }
    }

    public function deletePost($id){
        try{
            if (Auth::check()) {
                $data = blog::find($id);
                $data->delete();
                return redirect()->back()->with('alert-success','Success delete post!');
            }
            else return redirect()->back()->with('alert-fail', 'Anda tidak mempunyai Akses');
        }catch(\Exception $e){
            return redirect()->back()->with('alert-fail','Failed delete post! Contact Developer!'); 
        }
    }

}
