<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\PostAttachment;
use App\Models\Test;
use App\Models\TestPaper;
use Astrotomic\Translatable\Validation\RuleFactory;
use Exception;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class TestPaperController extends Controller
{
    use HasImageUploading;
    public function index(Test $test)
    {
        $papers = $test->papers()->paginate(12);
        return view('test.test_papers.index', compact('test', 'papers'));
    }

    public function uploadFile(Request $request, TestPaper $test)
    {
        $rules = RuleFactory::make([
            'filename' => 'required||mimes:pdf',
        ]);
        $validated = $request->validate($rules);

        if ($request->hasFile('filename')) {

            if ($test->filename) {
                $this->deleteImage($test->filename);
            }
            $validated['filename'] = $this->uploadImage($request->file('filename'));
            $test->fill($validated)->save();
        }
        return redirect()->back()->with('status', 'File has been uploaded successfully');
    }

    public function create(Test $test)
    {
        return view('test.test_papers.create', compact('test'));
    }

    public function store(Request $request, Test $test)
    {
        $rules = RuleFactory::make([
            '%test_name%' => 'required',
            'date' => 'required'
        ]);
        $validated = $request->validate($rules);
        $paper = new TestPaper();
        $paper->fill($validated);
        $test->papers()->save($paper);
        return redirect()->route('test-paper', $test->id)->with('status', 'Test Paper has been created successfully');
    }


    public function edit(Test $test, TestPaper $paper)
    {
//        $paper = $test->papers();
//        dd($paper->toArray());
        return view('test.test_papers.edit', compact('test', 'paper'));
    }

    public function update(Request $request, Test $test, TestPaper $paper)
    {
        $rules = RuleFactory::make([
            '%test_name%' => 'required',
            'date' => 'required'
        ]);
        $validated = $request->validate($rules);
        $paper->fill($validated);
        $test->papers()->save($paper);
        return redirect()->route('test-paper', $test->id)->with('status', 'Test Paper has been created successfully');
    }

    public function delete(Test $test, TestPaper $paper): RedirectResponse
    {
        try {
            $paper->delete();
            return redirect()->back()->with('status', 'Test Paper has been Deleted successfully');
        }catch (Exception $exception){
            return redirect()->back()->withErrors('Oops something went wrong Try again....');
        }
    }


}
