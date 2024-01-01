<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class VacanciesController extends Controller
{
    public function index(): View
    {
        $vacancies = Vacancy::paginate(12);
//        $vacancies = Vacancy::all();
//        dd($vacancies->pluck('job_category'));
        return view('vacancy.index', compact('vacancies'));
    }

    public function create(): View
    {
        return view('vacancy.create');
    }

    public function store(Request $request): RedirectResponse
    {
        $rules = RuleFactory::make([
            'job_category' => 'required',
            '%title%' => 'required',
            '%location%' => 'nullable',
            '%skill_qualification%' => 'nullable',
            '%role_description%' => 'nullable',
            'job_type' => 'required',
            'no_of_openings' => 'nullable',
            'salary' => 'nullable',
            'how_to_apply' => 'nullable',
        ]);
        $validated = $request->validate($rules);

        $vacancies = new Vacancy();
        $vacancies->fill($validated)->save();
        return redirect()->route('vacancies')->with('status', 'Job has been created successfully');
    }


    public function edit(Vacancy $vacancies): View
    {
        return view('vacancy.edit', compact('vacancies'));
    }

    public function update(Request $request, Vacancy $vacancies): RedirectResponse
    {
        $rules = RuleFactory::make([
            'job_category' => 'required',
            '%title%' => 'required',
            '%location%' => 'nullable',
            '%skill_qualification%' => 'nullable',
            '%role_description%' => 'nullable',
            'job_type' => 'required',
            'no_of_openings' => 'nullable',
            'salary' => 'nullable',
            'how_to_apply' => 'nullable',
        ]);
        $validated = $request->validate($rules);

        $vacancies->fill($validated)->save();
        return redirect()->route('vacancies')->with('status', 'Job has been updated successfully');
    }

    public function destroy(Vacancy $vacancies): RedirectResponse
    {
        $vacancies->delete();
        return redirect()->back()->with('status', 'Job has been deleted successfully');
    }

}
