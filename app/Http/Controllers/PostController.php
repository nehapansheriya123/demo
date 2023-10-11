<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;
use App\Repository\IPostRepository;
use DB;

class PostController extends Controller
{   
    protected $post;

    public function __construct(IPostRepository $post)
    {
        $this->post = $post;
    }

    public function index()
    {   
        $posts=Post::where('user_id',auth()->user()->id)->get();
        return view('manage',compact('posts'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {   
        $data = $request->validate([
            'company_name' => 'required',
            'job_title' => 'required',
            'job_loaction' => 'required',
            'email' => 'required',
            'website' => 'required',
            'tags' => 'required',
            'job_description' => 'required',
        ]);

        $this->post->storeOrUpdate($id = null, $data,$request);
        return redirect()->route('post.index')->with('message','Post added Successfully');
    }

    public function show($id)
    {   
        $post = $this->post->findById($id);
        return view('show',compact('post'));
    }

    public function edit($id)
    {   
        $post = $this->post->findById($id);
        return view('edit',compact('post'));
    }

    public function update(Request $request, $id)
    {   
        $data = $request->validate([
            'company_name' => 'required',
            'job_title' => 'required',
            'job_loaction' => 'required',
            'email' => 'required',
            'website' => 'required',
            'tags' => 'required',
            'job_description' => 'required',     
        ]);

        $this->post->storeOrUpdate($id, $data,$request);
        return redirect()->route('post.index')->with('message','Post Updated Successfully');
    }

    public function destroy($id)
    {   
        $this->post->destroyById($id);
        return redirect()->route('post.index')->with('message','Post deleted Successfully');
    }
        public function search(Request $request)
        {
            if($request->ajax())
        {
            $output="";
            $posts=DB::table('posts')->orwhere('user_id',auth()->user()->id)->Where('company_name','LIKE','%'.$request->search."%")->get();
            if($posts)
        {
            foreach ($posts as $key => $post) {
            $output.='<tr class="border-gray-300">'.
            '<td class="px-4 py-8 border-t border-b border-gray-300 text-lg">
        '.$post->id.'</td>'.
            '<td class="px-4 py-8 border-t border-b border-gray-300 text-lg">'.$post->company_name.'</td>'.
            '<td class="px-4 py-8 border-t border-b border-gray-300 text-lg">'.$post->job_title.'</td>'.
            '<td class="px-4 py-8 border-t border-b border-gray-300 text-lg">'.$post->job_loaction.'</td>'.
            '<td class="px-4 py-8 border-t border-b border-gray-300 text-lg">'.$post->email.'</td>'.
            '<td class="px-4 py-8 border-t border-b border-gray-300 text-lg">'.$post->website.'</td>'.
            '<td class="px-4 py-8 border-t border-b border-gray-300 text-lg"></td>'.
            '</tr>';
            }
            return Response($output);
        }
        }
        }

}
