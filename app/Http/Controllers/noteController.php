<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\note;
use App\page;

class noteController extends Controller
{
    public function create(Request $request , page $page)
    {
        $this->validate($request,[
            'note' => 'required|min:5|max:30'
        ]);
        $note = new note;
        $note->note = $request->note;
        $page->notes()->save($note);
        return back();
    }

    public function edit(note $note)
    {
        return view('notes/edit' , compact('note'));
    }

    public function update(Request $request , note $note)
    {
        $this->validate($request,[
            'note' => 'required|min:5|max:30'
        ]);
        $note->update($request->all());
        return redirect('pages/' . $note->page_id );
    }

    public function delete(note $note)
    {
        $note->delete();
        return back();
    }
}
