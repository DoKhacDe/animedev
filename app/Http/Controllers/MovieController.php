<?php

namespace App\Http\Controllers;
use App\Models\Movie;
use App\Models\CateMovie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller
{
    public function index()
    {
        $action = DB::table('movies')->join('cate_movies', 'movies.id_Cate', '=', 'cate_movies.id_cate')
                                    ->select('movies.name_movie as NameMovie', 'cate_movies.name_cate as CateName', 'movies.image as Image')
                                    ->where('movies.id_cate', '=', 1)
                                    ->simplePaginate(8);
        $school = DB::table('movies')->join('cate_movies', 'movies.id_Cate', '=', 'cate_movies.id_cate')
                                    ->select('movies.name_movie as NameMovie', 'cate_movies.name_cate as CateName', 'movies.image as Image')
                                    ->where('movies.id_cate', '=', 2)
                                    ->simplePaginate(8);
        $sad = DB::table('movies')->join('cate_movies', 'movies.id_Cate', '=', 'cate_movies.id_cate')
                                    ->select('movies.name_movie as NameMovie', 'cate_movies.name_cate as CateName', 'movies.image as Image')
                                    ->where('movies.id_cate', '=', 3)
                                    ->simplePaginate(8);
        $honnor = DB::table('movies')->join('cate_movies', 'movies.id_Cate', '=', 'cate_movies.id_cate')
                                    ->select('movies.name_movie as NameMovie', 'cate_movies.name_cate as CateName', 'movies.image as Image')
                                    ->where('movies.id_cate', '=', 4)
                                    ->simplePaginate(8);
        $fiction = DB::table('movies')->join('cate_movies', 'movies.id_Cate', '=', 'cate_movies.id_cate')
                                    ->select('movies.name_movie as NameMovie', 'cate_movies.name_cate as CateName', 'movies.image as Image')
                                    ->where('movies.id_cate', '=', 5)
                                    ->simplePaginate(8);
        return view('home', compact('action', 'school', 'sad', 'honnor', 'fiction'));
    }

    public function action() 
    {
        $listmovie = Movie::where('id_cate', 1)->get();
        return view('home.action', compact('listmovie'));
    }

    public function school() 
    {
        $listmovie = Movie::where('id_cate', 2)->get();
        return view('home.school', compact('listmovie'));
    }

    public function sad() 
    {
        $listmovie = Movie::where('id_cate', 3)->get();
        return view('home.sad', compact('listmovie'));
    }

    public function honnor() 
    {
        $listmovie = Movie::where('id_cate', 4)->get();
        return view('home.honnor', compact('listmovie'));
    }

    public function fiction() 
    {
        $listmovie = Movie::where('id_cate', 5)->get();
        return view('home.fiction', compact('listmovie'));
    }
}
