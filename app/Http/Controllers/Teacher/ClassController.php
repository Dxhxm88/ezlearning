<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Classs;
use App\Models\Subject;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function showClass()
    {
        $classes = Classs::all();
        return view('pages.class.view', compact('classes'));
    }

    public function showAddClass()
    {
        $subjects = Subject::all();
        return view('pages.class.add', compact('subjects'));
    }

    public function showEdit()
    {
        return view('pages.class.edit');
    }

    public function showDetail($id)
    {
        $classes = Classs::find($id)->students;
        return view('pages.class.viewdetail', compact('classes'));
    }

    public function delete($id)
    {
        $class = Classs::find($id);

        $class->delete();

        return redirect()->route('class.list');
    }
}
