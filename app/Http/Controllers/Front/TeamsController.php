<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Controllers\SubjectController;
use App\Models\Subject;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamsController extends Controller
{
    public function index(){
        $title_front = __('homepage.team');
        return view('front.team.index', compact('title_front'));
    }

    public function directors(){
        $title_front = '<span style="color: #000!important;"><a href="'.route('front-teams').'" class="text-decoration-none">'.__('homepage.team').'</a> > </span>'.__('homepage.directors');
        $directors = Team::whereRelation('teamCategories', 'team_category',"Director")->get();
//        dd($directors->toArray());
        return view('front.team.layouts.directors', compact('title_front', 'directors'));
    }

    public function advisory(){
        $title_front = '<span style="color: #000!important;"><a href="'.route('front-teams').'" class="text-decoration-none">'.__('homepage.team').'</a> > </span>'.__('homepage.advisory_board');
        $advisors = Team::whereRelation('teamCategories', 'team_category',"Advisory Board")->get();
        return view('front.team.layouts.advisory', compact('title_front', 'advisors'));
    }

    public function administration(){
        $title_front = '<span style="color: #000!important;"><a href="'.route('front-teams').'" class="text-decoration-none">'.__('homepage.team').'</a> > </span>'.__('homepage.administration');
        $administrators = Team::whereRelation('teamCategories', 'team_category',"Administrator")->get();
        return view('front.team.layouts.administration', compact('title_front', 'administrators'));
    }

    public function faculty(){
        $title_front = '<span style="color: #000!important;"><a href="'.route('front-teams').'" class="text-decoration-none">'.__('homepage.team').'</a> > </span>'.__('homepage.faculty');
        $subjectGroups = Subject::with("team")->get()->groupBy('subject_type');
//        dd($subjects->toArray());
        return view('front.team.layouts.faculty', compact('title_front', 'subjectGroups'));
    }

    public function panelist(){
        $title_front = '<span style="color: #000!important;"><a href="'.route('front-teams').'" class="text-decoration-none">'.__('homepage.team').'</a> > </span>'.__('homepage.mock_interview_panelist');
        $panelists = Team::whereRelation('teamCategories', 'team_category',"Mock Interview Panelist")->get();
        return view('front.team.layouts.panelist', compact('title_front','panelists'));
    }

}
