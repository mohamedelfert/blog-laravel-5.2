<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use DB;
use App\page;

class pageController extends Controller
{
    public function show()
    {
        $pages = DB::table('pages')->get();
        return view('pages/show' , compact('pages'));
    }

    public function page_note(page $page)
    {
        return view('pages/page_note' , compact('page'));
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:5|max:30'
        ],
        [
            'title.required' => 'This Field Is Required' /*This Message Input By Me*/
        ]
        );
        $page = new page;
        $page->title = $request->title;
        $page->save();
        return back();
    }

    public function edit(page $page)
    {
        return view('pages.edit' , compact('page'));
    }

    public function update(Request $request , page $page)
    {
        $this->validate($request,[
            'title' => 'required|min:5|max:30'
        ]);
        $page->update($request->all());
        return redirect('pages');
    }

    public function delete(page $page)
    {
        $page->delete();
        return back();
    }
}
