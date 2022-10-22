<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Http\Request;
use App\Models\Post;
use Validator;

class PostController extends BaseController
{

    public function index($id)
    {
        $posts = Post::where("category_id",$id)->get();
        return $this->sendResponse($posts->toArray(), 'Posts retrieved successfully.');
    }
}
