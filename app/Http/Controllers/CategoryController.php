<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use function PHPUnit\Framework\isNull;

class CategoryController extends Controller
{
    use HasImageUploading;
    public function index($level = 1,$categoryP = null){

        $query = Category::where("category_type","post")->where("level",$level)->orderBy("id", "desc");

        if ($categoryP != null){
            $query->where("category_id",$categoryP);
            $categoryP = Category::find($categoryP);
        }
        $categories = $query->paginate(12);
        $level += 1;
        return view('category.index', compact('categories',"level","categoryP"));
    }

    public function store(Request $request,$level,$categoryP = null){
        makeRequestSlug("category_slug");
        $rules = RuleFactory::make([
            '%category_name%' => 'required|unique:category_translations,category_name',
            '%description%' => 'nullable',
            '%image%' => 'nullable',
            'category_slug' => 'required|unique:categories,category_slug'
        ]);

        $validated = $request->validate($rules);
        $validated["category_type"] = "post";

        if ($categoryP != null) $validated["category_id"] = $categoryP;

        $validated["level"] = $level;

        $category = new Category();
        $category->fill($validated)->save();
        return redirect()->route('category',[$level,$categoryP])->with('status', 'Category has been created successfully');
    }

    public function update(Request $request,$level, Category $category){
        makeRequestSlug("category_slug");
        $rules = RuleFactory::make([
            '%category_name%' => 'required',
            '%description%' => 'nullable',
            '%image%' => 'nullable',
            'category_slug' => 'required|unique:categories,category_slug,'.$category->id,
        ]);
        $validated = $request->validate($rules);

        $category->fill($validated)->save();

        $categoryP = $category->parent;

        return redirect()->route('category',[$level,$categoryP??""])->with('status', 'Category has been updated successfully');
    }

    public function destroy($level,Category $category){
        if ($category->children()->count()){
            return redirect()->back()->withErrors('Category has sub category.. ');
        }
        try {
            if ($category->translations["en"]->image ?? null)
                $this->deleteImage($category->translations["en"]->image);
            if ($category->translations["hi"]->image ?? null)
                $this->deleteImage($category->translations["hi"]->image);

            $category->delete();
            return redirect()->back()->with('status', 'Category has been deleted successfully');
        }catch (\Exception $exception){
            return redirect()->back()->withErrors('Category is being used somewhere!');
        }
    }
}
