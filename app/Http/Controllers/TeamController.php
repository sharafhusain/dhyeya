<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\TeamCategory;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TeamController extends Controller
{
    use HasImageUploading;

    public function index(): View
    {
        $teams = Team::orderBy("id", "desc")->paginate(12);
        return view('team.index', compact('teams'));
    }

    public function create(): View
    {
        $teamCategories = TeamCategory::all();
        return view('team.create', compact('teamCategories'));
    }

    public function store(Request $request): RedirectResponse
    {
        $rules = RuleFactory::make([
            'image' => 'required|image|max:10240',
            '%name%' => 'required',
//            '%last_name%' => 'required',
            '%description%' => 'nullable',
            '%position%' => 'required',
            'team_category' => 'required'
        ]);
        $validated = $request->validate($rules);

        if ($request->hasFile('image')) {
            $validated['image'] = $this->uploadImage($request->file('image'));
        }

        $teams = new Team();
        $teams->fill($validated)->save();
        $teams->teamCategories()->sync($validated['team_category']);
        return redirect()->route('team')->with('status', 'Team member has been created successfully');
    }

    public function edit(Team $team): View
    {
        $teamCategories = TeamCategory::all();
        $selected_teamCat_id = $team->teamCategories()->get()->pluck("id")->toArray();
//        dd($selected_teamCat_id);
        return view('team.edit', compact('team', 'teamCategories', 'selected_teamCat_id'));
    }

    public function update(Request $request, Team $team): RedirectResponse
    {
//        dd($team->teamCategories->toArray());
//        dd($request->toArray());
        $rules = RuleFactory::make([
            'image' => 'nullable|image|max:10240',
            '%name%' => 'required',
//            '%last_name%' => 'required',
            '%description%' => 'nullable',
            '%position%' => 'required',
            'team_category' => 'required'
        ]);
        $validated = $request->validate($rules);
//        dd($validated['team_category']);

        if ($request->hasFile('image')){
            $validated['image'] = $this->uploadImage($request->file('image'));
            if (!empty($team->image)){
                $this->deleteImage($team->image);
            }
        }
        $team->fill($validated)->save();
        $team->teamCategories()->sync($validated['team_category']);
        return redirect()->route('team')->with('status', 'Team member has been updated successfully');
    }

    Public function destroy(Team $team): RedirectResponse
    {
        if ($team->image){
            $this->deleteImage($team->image);
        }
        $team->delete();
        return redirect()->back()->with('status', 'Team member has been deleted successfully');
    }

}
