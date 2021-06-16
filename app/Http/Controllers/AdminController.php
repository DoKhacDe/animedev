<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\Movie;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dashboard');
    }
    public function login() 
    {
        return view('admin.loginAdmin');
    }
    public function checkLogin(Request $request) 
    {   
        $name = $request->name;
        $password = $request->password;
        if($name == 'admin' && $password == '123456'){
            return redirect()->route('admin');
        } else { 
            return back()->with('fail', 'Incorrect password');
        }
    }
    public function logout() 
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    public function user(){
        $listUser = User::paginate(4);
        return view('admin.user', compact('listUser'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
    public function movie(Request $request)
    {
        if (empty($request->search)) {
            $listMovie = Movie::paginate(10);
        return view('admin.movie', compact('listMovie'));
        } else {
            $search = $request->search; 
            $listMovie = Movie::where('name_movie', 'LIKE', '%'.$search.'%')
                                ->paginate(10);
            return view('admin.movie', compact('listMovie', 'search'));
        }
    }
    public function action()
    {
        $listMovie = Movie::where('id_cate', 1)->paginate(10);
        return view('admin.movie', compact('listMovie'));
    }
    public function school()
    {
        $listMovie = Movie::where('id_cate', 2)->paginate(10);
        return view('admin.movie', compact('listMovie'));
    }
    public function sad()
    {
        $listMovie = Movie::where('id_cate', 3)->paginate(10);
        return view('admin.movie', compact('listMovie'));
    }
    public function honnor()
    {
        $listMovie = Movie::where('id_cate', 4)->paginate(10);
        return view('admin.movie', compact('listMovie'));
    }
    public function fiction()
    {
        $listMovie = Movie::where('id_cate', 5)->paginate(10);
        return view('admin.movie', compact('listMovie'));
    }
    public function addnew()
    {
        return view('admin.addnew');
    }

    
    public function newAdd(Request $request) 
    {  
        $request->validate([
            'file' => 'required|mimes:png,jpg,jpeg,csv,txt,pdf,mp4|max:2048'
          ]); 
              if($request->file('file')) {
                  $file = $request->file('file');
                  $filename = $file->getClientOriginalName();
                  $location = 'video';
                  $file->move($location,$filename);
              }

              if($request->file('file1')) {
                $file = $request->file('file1');
                $filename = $file->getClientOriginalName();
         
                // File upload location
                $location = 'img/img-movie';
         
                // Upload file
                $file->move($location,$filename);
             }
         
        $admin = new Admin;
        $admin->name_movie = $request->NameMovie;
        $admin->image = $request->file1;
        $admin->video = $request->file;
        $admin->description = $request->description;
        $admin->name_cate = $request->name_cate;
        $admin->runtime = $request->RunTime;
        $admin->release_year = $request->ReleaseYear;
        $save = $admin->save();
        if($save){
            return back()->with('success','New User has been successfully added to database'); 
        }else{
           return back()->with('fail','Something went wrong, try again later'); 
        }
    }
}
