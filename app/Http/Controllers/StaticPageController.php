<?php

namespace App\Http\Controllers;

use App\Models\StaticPage;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class StaticPageController extends Controller
{
    public function index()
    {
        $staticPage = StaticPage::paginate(10);
//        dd($staticPage->toArray());
        return view('static_page.index', compact('staticPage'));
    }

    public function create()
    {
        return view('static_page.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'slug' => 'required|unique:static_pages,slug',
            'keywords' => 'required',
            'content' => 'required'
        ]);

        $validated['slug'] = Str::slug($request->slug);
//        dd($validated);

        $staticPage = new StaticPage();
        $staticPage->fill($validated)->save();
        return redirect()->route('static-pages')->with('status', 'Static page has been created successfully');
    }

    public function edit(StaticPage $staticPage)
    {
            return view('static_page.edit',compact('staticPage'));
    }

    public function update(Request $request,StaticPage $staticPage)
    {
        $validated = $request->validate([
//            'slug' => 'required|unique:static_pages,slug,'.$staticPage->id,
            'keywords' => 'required',
            'content' => 'required'
        ]);

        $staticPage->fill($validated)->save();
        return redirect()->route('static-pages')->with('status', 'Static page '.$staticPage->id.' has been updated successfully');
    }

    public function destroy(StaticPage $staticPage)
    {
        $staticPage->delete();
        return redirect()->back()->with('status','Static page '.$staticPage->id.' has been deleted successfully');
    }
}
