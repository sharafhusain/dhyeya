<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Post;
use App\Models\Seofield;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SeederController extends Controller
{
    function seedPages()
    {
        $editablePageBelongsToPost = include("pageSeedDetails.php");

        foreach ($editablePageBelongsToPost as $pageAndPost) {

            if (isset($pageAndPost["post_id"])){
                $pageAndPost["post_id"]["slug"] = Str::slug($pageAndPost["post_id"]["slug"]);
                $post = Post::create($pageAndPost["post_id"]);
                unset($pageAndPost["post_id"]);
            }

//            Only To Create A single Post To Attach Attachments only
            if (isset($pageAndPost["only_post"])){
                $pageAndPost["only_post"]["slug"] = Str::slug($pageAndPost["only_post"]["slug"]);
                $post = Post::create($pageAndPost["only_post"]);
                continue;
            }

            $pageAndPost["slug"] = Str::slug($pageAndPost["slug"]);
            $page = new Page();
            $page = $page->fill($pageAndPost);

            if (isset($post)){

                $post->page()->save($page);
                $seo = new Seofield();
                $seo->fill($pageAndPost);
                $page->seofield()->save($seo);
            }
            else{
                $seo = new Seofield();
                $seo->fill($pageAndPost);
                $page->save();
                $page->seofield()->save($seo);
            }
        }

        return redirect()->route("dashboard")->with("status", "Pages And Current Affairs have been seeded successfully");
    }
}
