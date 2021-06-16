@extends('layouts.admin-layout')
@section('content')
<table class="table table-hover">
                <tr style="background: #99FFCC;">
                    <td>Name</td>
                    <td>Email</td>
                    <td>Delete</td>
                </tr>
               @foreach ($listUser as $res)
                <tr>
                    <td>
                        {{ $res->name }}
                    </td>
                    <td>{{ $res->email }}</td>
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
                {{ $listUser->links() }}
@endsection