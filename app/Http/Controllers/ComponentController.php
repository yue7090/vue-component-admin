<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Component;

class ComponentController extends Controller
{
    public function index()
    {
        $component = Component::paginate(10);
        return view('component.index', compact(
            'component'
        ));
    }

    public function create()
    {
        return view('component.create');
    }

    public function store(Request $request)
    {
        $component = new Component();
        $component->name = $request->name;
        $component->enname = $request->enname;
        $component->class = $request->class;
        $component->version = $request->version;
        $component->dependent = $request->dependent;
        $component->parameter = $request->parameter;
        $component->datasource = $request->datasource;
        $component->introduction = $request->introduction;
        $component->example = \htmlspecialchars($_POST['example']);
        $component->code = \htmlspecialchars($_POST['code']);
        if($component->save())
        {
            return redirect('/component');
        }else{
            echo '添加失败';
        }
    }

    public function edit($id)
    {
        $component = Component::find($id);
        return view('component.edit', compact(
            'component',
            'id'
        ));
    }

    public function update(Request $request, $id)
    {
        $component = Component::find($id);
        $component->name = $request->name;
        $component->enname = $request->enname;
        $component->class = $request->class;
        $component->version = $request->version;
        $component->dependent = $request->dependent;
        $component->parameter = $request->parameter;
        $component->datasource = $request->datasource;
        $component->introduction = $request->introduction;
        $component->example = \htmlspecialchars($_POST['example']);
        $component->code = \htmlspecialchars($_POST['code']);
        if($component->save())
        {
            return redirect('/component');
        }else{
            echo '更新失败';
        }
    }
}