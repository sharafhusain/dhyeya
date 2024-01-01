<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Astrotomic\Translatable\Validation\RuleFactory;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryForExamController extends Controller
{
    use HasImageUploading;

    public function index($level = 1, $categoryP = null)
    {
        $query = Category::where("category_type","exam")->where("level", $level);
        if ($categoryP != null) {
            $query->where("category_id", $categoryP);
            $categoryP = Category::find($categoryP);
        }
        $categories = $query->paginate(12);
        $level += 1;

        return view('exam.category.index', compact('categories', "level", "categoryP"));
    }

    public function store(Request $request, $level, $categoryP = null )
    {
        makeRequestSlug("category_slug");
        $rules = RuleFactory::make([
            '%category_name%' => 'required|unique:category_translations,category_name',
            '%description%' => 'nullable',
            '%image%' => 'nullable',
            'category_slug' => 'required|unique:categories,category_slug',
        ]);
        $validated = $request->validate($rules);
        $validated["category_type"] = "exam";
        $validated["level"] = $level;

        if (isset($validated["hi"]["image"])) {
            if ($validated["hi"]["image"])
                $validated["hi"]["image"] = $this->uploadImage($request->file('hi.image'));
        }

        if (isset($validated["en"]["image"])) {
            if ($validated["en"]["image"])
                $validated["en"]["image"] = $this->uploadImage($request->file('en.image'));
        }

        if ($categoryP != null) $validated["category_id"] = $categoryP;
        $category = new Category();
        $category->fill($validated)->save();
        return redirect()->route('exam-category', [$level, $categoryP])->with('status', 'Exam Category has been created successfully');
    }

    public function update(Request $request, $level, Category $category)
    {
        makeRequestSlug("category_slug");
        $rules = RuleFactory::make([
            '%category_name%' => 'required',
            '%description%' => 'nullable',
            '%image%' => 'nullable',
            'category_slug' => 'required|unique:categories,category_slug,' . $category->id,
        ]);

        $validated = $request->validate($rules);

        if (isset($validated["hi"]["image"]))
            $validated["hi"]["image"] = $this->uploadImage($request->file('hi.image'));
        if (isset($validated["en"]["image"]))
            $validated["en"]["image"] = $this->uploadImage($request->file('en.image'));
        $categoryP = $category->parent;
        $category->fill($validated)->save();
        return redirect()->route('exam-category', [$level, $categoryP ? $categoryP : ""])->with('status', 'Exam Category has been updated successfully');
    }
}