@extends('master')

@section('content')
    <span><p>All Pages</p></span>
    <div class="table data">
        <div class="error">
            @if(count($errors))
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>
        <table>
            <tr>
                <td>Id</td>
                <td>Title</td>
                <td>Control</td>
            </tr>
            @foreach($pages as $page)
                <tr>
                    <td> {{ $page->id }} </td>
                    <td><a href="pages/{{$page->id}}"> {{ $page->title }} </a></td>
                    <td class="bt">
                        <div class="bt_edit"><a href="pages/{{$page->id}}/edit" class="btn btn-default pull-right">Edit</a></div>
                        <div class="bt_delete"><a href="pages/{{$page->id}}/delete" class="btn btn-danger pull-right float-left">Delete</a></div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="row list-group-item">
        <form method="post" action="page_create">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" name="title" id="title" value="{{ old('title') }}" class="form-control" placeholder="Add Page ....">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Add</button>
                </span>
            </div>
        </form>
    </div>
@stop

@section('home')
    <a href="/">Home</a>
@stop