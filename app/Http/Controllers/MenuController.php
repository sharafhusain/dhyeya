<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\MenuLocation;
use App\Models\Post;
use Astrotomic\Translatable\Validation\RuleFactory;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function get_posts_ajax_query(Request $request){
        if ($request->types!= null){
            $types = explode("-",$request->types);
            $post = Post::whereTranslationLike("title","%".$request->keywords."%","en")->where("post_type",$types[0])->get()->transform(function($item){
            return ["id" => $item->id, "data" => $item->title, "type" => $item->post_type];
        });
        return $post->toArray();
        }




        $post = Post::whereTranslationLike("title","%".$request->keywords."%","en")->get()->transform(function($item){
            return ["id"=>$item->id,"data"=>$item->title,"type"=>$item->post_type];
        });

//        dd($post->toArray());
        return $post->toArray();
    }

    public function index(){
        $menuLocation = MenuLocation::all();
        $menus = Menu::all();
        return view('menu.index', compact('menuLocation',"menus"));
    }

    public function store(Request $request){

        $rules = RuleFactory::make([
            'location_id' => 'required',
            'menu_items' => 'nullable',
            'new_menu_items' => 'nullable',
        ]);

        $validated = $request->validate($rules);
        $location = $validated["location_id"];

        if (isset($validated["new_menu_items"])){
         foreach ($validated["new_menu_items"] as $post_id) {
            $post = Post::find($post_id);
            $menu = new Menu();
            $post->menu()->save($menu);
            $validated["menu_items"][] = $menu->id;
            }
        }

//        Delete all the menus
        if (!isset($validated["menu_items"])){
            $location = MenuLocation::find($location);
            $location->menus()->sync([]);
            return redirect()->back()->with("status","Menus Have been updated successfully.")->withInput(["location_id"=>$validated["location_id"]]);
//            return redirect()->back()->withErrors("Menu Can't Be Empty!")->withInput(["location_id"=>$validated["location_id"]]);
        }


        $newItems = [];
        foreach ($validated["menu_items"] as $ind => $menu_id) {
            $newItems[$menu_id] = ["menu_order" => $ind];
        }

        $validated["menu_items"] = $newItems;

        $location = MenuLocation::find($location);
        $location->menus()->sync($validated["menu_items"]);
        return redirect()->back()->with("status","Menus Have been updated successfully.")->withInput(["location_id"=>$validated["location_id"]]);


    }

//    Ajax Handler
    public function locationItems(MenuLocation $location){
        $menus = $location->menus()->with(["objectable" ])->withPivot("menu_order")->orderByPivot("menu_order")->get();
        $output = [];
        foreach($menus as $menu){
            $output[] = [
                'menu_id' => $menu->id,
                'title' => $menu->objectable->title,
                'order' => $menu->pivot->menu_order,
                'type' => $menu->objectable->post_type?$menu->objectable->post_type:"page"
            ];
        }
        return $output;
    }
}
