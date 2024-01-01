<?php

namespace App\Http\Controllers;

use App\Models\FeeDetail;
use App\Models\Post;
use App\Models\Test;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\View\View;

class FeeDetailController extends Controller
{
    public function index(Test $test){
        $feeDetails = $test->feeDetails()->paginate(12);
        return view('test.fee_details.index', compact('test', 'feeDetails'));
    }

    public function ajaxindex(Test $test){
        $feeDetails = $test->feeDetails;
        return $feeDetails;
    }

    public function create(Test $test){
        return view('test.fee_details.create',compact("test"));
    }

    public function store(Request $request, Test $test): RedirectResponse
    {
        $rules = RuleFactory::make([
            'student_type' => 'required',
            'mode' => 'required',
            'amount' => 'required|numeric',
        ]);
        $validated = $request->validate($rules);

        $feeDetail = new FeeDetail();
        $feeDetail->fill($validated);
        $test->feeDetails()->save($feeDetail);

        return redirect()->route('fee-detail', $test->id)->with('status', 'Fee Details has been created successfully');
    }
    public function ajaxcreate(Request $request, Test $test)
    {
        $rules = RuleFactory::make([
            'student_type' => 'required',
            'mode' => 'required',
            'amount' => 'required|numeric',
        ]);
        $validated = $request->validate($rules);

        $feeDetail = new FeeDetail();
        $feeDetail->fill($validated);
        $test->feeDetails()->save($feeDetail);

        return $feeDetail;
    }

    public function edit(Test $test, FeeDetail $fee_detail): View{
        return view('test.fee_details.edit', compact("test","fee_detail"));
    }

    public function update(Request $request, Test $test, FeeDetail $feeDetail): RedirectResponse
    {
            $rules = RuleFactory::make([
                'student_type' => 'required',
                'mode' => 'required',
                'amount' => 'required|numeric',
            ]);
            $validated = $request->validate($rules);
            $feeDetail->fill($validated);
            $feeDetail->save();
            return redirect()->route('fee-detail', $test->id)->with('status', 'Fee Details has been Updated successfully');
        }
    public function updateajax(Request $request, $test="", FeeDetail $id)
    {
            $rules = RuleFactory::make([
                'student_type' => 'required',
                'mode' => 'required',
                'amount' => 'required|numeric',
            ]);
            $validated = $request->validate($rules);
            $id->fill($validated);
            $id->save();
            return $id;
        }

    public function destroy(Test $test, FeeDetail $fee_detail): RedirectResponse
    {
        $fee_detail->delete();
        return redirect()->back()->with('status', 'Fee Detail has been deleted successfully ...');
    }

    public function ajaxdelete($test = "", FeeDetail $id)
    {
        $id->delete();
        return json_encode(array(
            "statusCode"=>200
        ));
    }
}
