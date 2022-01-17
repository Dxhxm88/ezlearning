<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectController extends Controller
{
    public function showSubject()
    {
        $subjects = Subject::all();

        return view('pages.subject.view', compact('subjects'));
    }

    public function showAddSubject()
    {
        return view('pages.subject.add');
    }

    public function addSubject(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $subject = Subject::create([
            'name' => $request->name,
        ]);

        return redirect()->route('subject.list');
    }

    public function delete($id)
    {
        $subject = Subject::find($id);

        $subject->delete();
        return redirect()->route('subject.list');
    }

    public function showEdit($id)
    {
        $subject = Subject::find($id);

        return view('pages.subject.edit', compact('subject'));
    }

    public function edit($id, Request $request)
    {
        $subject = Subject::find($id);

        $request->validate([
            'name' => 'required',
        ]);

        $subject->name = $request->name;

        $subject->save();

        return redirect()->route('subject.list');
    }
}
