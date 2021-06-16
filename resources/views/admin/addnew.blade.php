@extends('layouts.admin-layout')
@section('content')

<h1 style="padding-top: 20px;padding-left:20px;">Add New</h1>
<div class="container" style="padding-top: 20px;padding-bottom:100px; max-width:700px">
    <form action="{{ route('admin.addnew') }}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
        <div class="form-group" style="width:82%">
            <label for="NameMovie">Name Movie:</label>
            <input type="text" class="form-control" placeholder="Name Movie" name="NameMovie" id="NameMovie">
        </div>
        <div class="form-group" >
            <span>Image:</span>
            <div class="row">
                <div class="col-md-10">
                    <input type="file" name="file1" class="form-control" style="height:43px">
                </div>              
            </div>
        </div>
        <div class="form-group">
            <span>Video:</span>
            <div class="row">
                <div class="col-md-10">
                    <input type="file" name="file" class="form-control" style="height:43px">
                </div>              
            </div>
        </div>
        <div class="form-group">
            <span>Description:</span><br>
            <textarea name="description" cols="70" rows="3"></textarea>
        </div>
        <div class="form-group">
            <span>Category:</span>
            <select name="name_cate" id="name_cate">
                <option value="1">ACTION</option>
                <option value="2">SCHOOL</option>
                <option value="3">SAD</option>
                <option value="4">HONNOR</option>
                <option value="5">FICTION</option>
            </select>
        </div>
        <div class="form-group" style="max-width:150px; min-width:50px">
            <span>Run Time:</span><br>
            <input type="text" class="form-control" placeholder="Run Time" id="RunTime" name="RunTime">
        </div>
        <div class="form-group" style="max-width:150px; min-width:50px">
            <span>Release Year:</span><br>
            <input type="text" class="form-control" placeholder="Release Year" id="ReleaseYear" name="ReleaseYear">
        </div>
        <button type="submit" class="btn btn-block btn-primary" style="width:83%">Add New</button>
    </form>
    
</div>
@endsection