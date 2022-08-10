<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
use phpDocumentor\Reflection\Types\Nullable;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login_form()
    {
        return view('login');
    }

    public function login_action(Request $request)
    {
        //buat compare form password sama password database
        // $hashed_password = Hash::check
        $users = Users::where('username', $request->username)->first();
        if($users == null) {
            return redirect()->back()->with('error','Username tidak temukan ');
        }

        //buat token ketika user berhasil login
        $db_password = $users->password;
        $hashed_password = Hash::check($request->password, $db_password);
        
        if($hashed_password) {
            $users->token = Str::random(20);
            $users->save(); //membuat user token
            $request->session()->put('token', $users->token);
            return to_route('dashboard_index'); //biar lansung ke inti
        }else {
            return redirect()->back()->with('error', 'Maaf data anda tidak sesuai');
        }
    }

    public function dashboard_index()
    {
        if(Session::has('token')) {
            //untuk mencegah terjadinya login multiuser 
            $users = Users::where('token', Session::get('token'))->first();
            $articles = Articles::paginate(5);
            
            return view('dashboard/index', [
            "title" => "DASHBOARD ADMIN",
            "users" => $users,
            "articles" => $articles
         ]);
        }else {
            return redirect()->back();
        }
    }

    public function dashboard_logout(Request $request) 
    {   
        //KETIKA LOGOUT TOKEN AKAN BERUBAH MENNJADI NULL
        Users::where('token', $request->token)->update([
            'token' => NULL
        ]);
        Session::pull('token');

        return redirect('/');
    }

    public function article_delete_action(Request $request)
    {
        Articles::find($request->id)->delete();
        return redirect()->back()->with('message', 'artikel berhasil dihapus');
    }

    public function article_add_action(Request $request)
    {
        //validate
        $request->validate([
            'title' => ['required', 'max:255', 'min:5', 'string'],
            'description' => ['required', 'max:255', 'min:10'],
            'tag' => ['nullable'],
        ]);
        $created = Articles::create([
            "title" => $request->title,
            "description" => $request->description,
            "tags" => $request->tags,
        ]);
        if ($created) {
            return redirect('dashboard')->with('message', 'artikel berhasil dibuat');
        } else {
            return redirect()->back()->with('message', 'artikel gagal dibuat');
        }
    }
    
    //  Edit
    public function article_edit_action (Request $request) 
    {
        $tampil = Articles::find($request->id);
        
        return view('dashboard/edit', compact(['tampil']));
    }

    public function article_update_action(Request $request)
    {
        $tampil = Articles::find($request->id);

        //validate edit
        $request->validate([
            'title' => ['required', 'string', 'max:20'],
            'description' =>['required', 'max:255', 'min:20'],
            'tags' =>['required']
        ]);


        $tampil->update($request->all());

        if($tampil) {
            return redirect('dashboard')->with('message', 'artikel berhasil diupdate');
        }
    }

    //Registrasi

    public function register_form()
    {
        return view('login');
    }

    public function register_action (Request $request) 
    {   
        //validate Registrasi
       $regist = $request->validate([
            'username' => ['required', 'min:3', 'max:255','string','unique:users'],
            'password' => ['required', 'min:5'],
            'token' => ['Nullable']
        ]);

        $regist['password'] = Hash::make($regist['password']);
        Users::create($regist);
       
        if($regist) {
            //Gk tau kenapa merah padahal udh berfungsi sweet alert nya
            Alert::success('Anda Berhasil Register', 'Silahkan Login Kembali');
            return view('login');
        }else {
            return redirect('login')->with('error', 'Gagal registrasi');
        }
    }

    public function article_show_form ()
    {
        return view('dashboard/tambah');
    }
}
