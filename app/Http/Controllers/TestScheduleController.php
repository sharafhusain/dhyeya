<?php

namespace App\Http\Controllers;

use App\Models\Test;
use App\Models\TestPaper;
use App\Models\TestSchedule;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TestScheduleController extends Controller
{
    public function index(Test $test, TestPaper $paper): View
    {
        $schedules = $paper->schedules()->paginate();
        return view('test.test_papers.test_schedule.index', compact("test","paper","schedules"));
    }
    public function create(Test $test, TestPaper $paper){
        return view('test.test_papers.test_schedule.create', compact("test","paper"));
    }

    public function store(Request $request, Test $test, TestPaper $paper){
        $rules = RuleFactory::make([
            '%subject%' => 'required',
        ]);
        $validated = $request->validate($rules);
        $schedule = new TestSchedule();
        $schedule->fill($validated);
        $paper->schedules()->save($schedule);
        return redirect()->route('schedule', [$test->id,$paper->id])->with('status','Schedule has been created successfully');
    }


    public function edit(Test $test, TestPaper $paper,TestSchedule $schedule){
        return view('test.test_papers.test_schedule.edit', compact('test', 'paper', "schedule"));
    }

    public function update(Request $request,Test $test, TestPaper $paper, TestSchedule $schedule){
        $rules = RuleFactory::make([
            '%subject%' => 'required',
        ]);
        $validated = $request->validate($rules);
        $schedule->fill($validated);
        $schedule->save();
        return redirect()->route('schedule', [$test->id,$paper->id])->with('status','Schedule has been updated successfully');
    }

    public function delete($test, $paper,TestSchedule $schedule): RedirectResponse
    {
        $schedule->delete();
        return redirect()->back()->with('status','Schedule has been Deleted successfully');
    }
}
