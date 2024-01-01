<?php

namespace App\Http\Controllers;

use App\Models\BatchDetail;
use App\Models\Center;
use App\Models\Test;
use App\Models\Post;
use App\Models\TestPaper;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\View\View;

class TestController extends Controller
{
    public function index()
    {
        $tests = Test::with("post")->paginate(15);
        return view('test.index', compact("tests"));
    }

    public function create()
    {
        return view('test.create');
    }

    public function publish_results(Request $request)
    {
//        Publish is 0 or 1 only
        $status = $request->get("result_published");
        $test = Test::findOrFail($request->get("testid"));

        $test->fill(["result_published" => $status]);
        $test->save();
        return redirect()->back()->with('status',$status == "0"?"Results has been set to Privet!":"Results has been Published!");
    }

    public function store(Request $request): RedirectResponse
    {
//        dd($request->toArray());
        makeRequestSlug("slug");
        $rules = RuleFactory::make([
            '%title%' => 'required',
            '%objective%' => 'required',
            '%analysis%' => 'required',
//            '%test_structure%' => 'required',
            'medium' => 'required',
            'slug' => 'required|unique:posts,slug',
            'mode' => 'required',
            'total_no_of_test' => 'required|numeric',
            "status" => 'required',
            "starting_date" => "required",
            "test_type" => "required",
        ]);
        $validated = $request->validate($rules);

        $validated['post_type'] = "test";
        $validated['user_id'] = auth()->user()->id;

        $post = Post::create($validated);
        $test = new Test();
        $test->fill($validated);
        $post->test()->save($test);

        return redirect()->route('test')->with('status', 'Test Series has been created successfully');
    }

    public function edit(Test $test): View
    {
//        dd($test);
        return view('test.edit', compact("test"));
    }

    public function update(Request $request, Test $test): RedirectResponse
    {
        makeRequestSlug("slug");
        $rules = RuleFactory::make([
            '%title%' => 'required',
            '%objective%' => 'required',
            '%analysis%' => 'required',
//            '%test_structure%' => 'required',
            'medium' => 'required',
            'slug' => 'required|unique:posts,slug,'. $test->post->id,
            'mode' => 'required',
            'total_no_of_test' => 'required|numeric',
            "status" => 'required',
            "starting_date" => "required",
            "test_type" => "required",
        ]);

        $validated = $request->validate($rules);

        $test->fill($validated)->save();
        $test->post->fill($validated)->save();

        return redirect()->route('test')->with('status', 'Test Series has been Updated successfully');
    }

    public function destroy(Test $test): RedirectResponse
    {
        $test->delete();
        $test->post->delete();
        return redirect()->back()->with('status', 'Test Series has been deleted successfully ...');
    }
}
