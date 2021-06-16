@extends('layouts.admin-layout')
@section('content')
<nav class="navbar navbar-expand-sm bg-light navbar-dark">
    <form class="form-inline" method="get" action="{{ route('admin.movie') }}">
        @csrf
        <input class="form-control mr-sm-2"  type="search" name="search" placeholder="Search" aria-label="Search" >
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <div class="dropdown">
        <a style="margin-left:20px; text-decoration: none" class="dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" v-pre>Category</a>
        <div class="dropdown-menu">
            <a class="dropdown-item" href="{{ route('admin.movie1') }}">Action</a>
            <a class="dropdown-item" href="{{ route('admin.movie2') }}">School</a>
            <a class="dropdown-item" href="{{ route('admin.movie3') }}">Sad</a>
            <a class="dropdown-item" href="{{ route('admin.movie4') }}">Honner</a>
            <a class="dropdown-item" href="{{ route('admin.movie5') }}">Fiction</a>
        </div>
    </div>
    @if (isset($search))
    <span style="margin-left:30px; width:200px">Result: {{ $search }}...</span>
    @endif
    <a id="detail"  href="{{ route('admin.addnew') }}" style="margin-left:10%" >Add new</a>
</nav>
<table class="table table-hover">
                <tr style="background: #99FFCC;">
                    <td>Name Movie</td>
                    <td>Image</td>
                    <td>Id Cate</td>
                    <td>Release year</td>
                    <td>Detail</td>
                    <td>Delete</td>
                </tr>
               @foreach ($listMovie as $res)
                <tr>
                    <td>
                        <p style="width:250px; height:auto">{{ $res->name_movie }}</p>
                    </td>
                    <td>
                        <img class="rounded" style="width:100px; height:130px; " src="{{ asset('img/img-movie/' . $res->image) }}">
                     </td>
                     <td>{{ $res->id_cate }}</td>
                     <td>{{ $res->release_year }}</td>
                     <td>
                        <form action="" method="POST">
                            @csrf
                            <button id="detail" class="btn btn-warning">Detail</button>
                        </form>
                    </td>
                    <td>
                        <form action="" method="POST">
                            @csrf
                            @method('DELETE')
                            <button id="deleteTask" class="btn btn-danger" onclick="confirm('Are you sure you want to delete this?')">Delete</button>
                        </form>
                    </td>
                </tr>
               @endforeach
            </table>
                {{ $listMovie->links() }}
@endsection