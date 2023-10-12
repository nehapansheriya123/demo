<?php

namespace App\Repository;

use App\Models\Post;
use App\Repository\IPostRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\LengthAwarePaginator;

class PostRepository implements IPostRepository
{   
    protected $post = null;

    public function list() : LengthAwarePaginator 
    {   
        return Post::paginate(10);
    }

    public function findById($id) : Post
    {
        return Post::find($id);
    }
  
    public function storeOrUpdate($id = null, $data = [], $request)
    {   
        if(is_null($id)) {
            $post = new Post;
            $post->company_name = $data['company_name'];
            $post->job_title = $data['job_title'];
            $post->job_loaction = $data['job_loaction'];
            $post->email = $data['email'];
            $post->website = $data['website'];
            $post->tags = $data['tags'];
            $post->job_description = $data['job_description'];
            $post->user_id = auth()->user()->id;
            $post->company_logo=Self::imagestore('company_logo',$request)?? $post->company_logo;
            $post->save();
            return $post;
        }
        $post = Post::find($id);
        $post->company_name = $data['company_name'];
            $post->job_title = $data['job_title'];
            $post->job_loaction = $data['job_loaction'];
            $post->email = $data['email'];
            $post->website = $data['website'];
            $post->tags = $data['tags'];
            $post->job_description = $data['job_description'];
            $post->user_id = auth()->user()->id;
            unlink("theme/".$post->company_logo);       
            $post->company_logo=Self::imagestore('company_logo',$request)?? $post->company_logo;
        $post->save();
        return $post;
    }
    
    public function destroyById($id)
    {
        return Post::find($id)->delete();
    }
    public function imagestore($fieldname,$request)
    {
        $filename="";
        if($request->file($fieldname)){
            $file=$request->file($fieldname);
            $filename=date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('theme'),$filename);
            return $filename;
        }
    }
}