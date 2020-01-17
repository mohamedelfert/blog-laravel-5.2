@extends('master')

@section('content')
    <span><a href="../pages"> Go Bake To Pages List </a></span>
    <div class="table data">
        <span><p>{{ $page->title }}</p></span>
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
                <td>Note</td>
                <td>Control</td>
            </tr>
            @foreach($page->notes as $note)
                <tr>
                    <td>{{ $note->id }}</td>
                    <td>{{ $note->note }}</td>
                    <td class="bt">
                        <div class="bt_edit"><a href="../notes/{{ $note->id }}/edit" class="btn btn-default pull-right">Edit</a></div>
                        <div class="bt_delete"><a href="../notes/{{ $note->id }}/delete" class="btn btn-danger pull-right">Delete</a></div>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

    <div class="row list-group-item">
        <form method="post" action="../pages/{{ $page->id }}/note_create">
            {{ csrf_field() }}
            <div class="input-group">
                <input type="text" name="note" id="note" value="{{ old('note') }}" class="form-control" placeholder="Add Note ....">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="submit">Add</button>
                </span>
            </div>
        </form>
    </div>
@stop