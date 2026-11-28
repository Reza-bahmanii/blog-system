<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function show()
    {
        return view('admin/dashboard');
    }

    public function posts(){
        $posts = Post::with(['user' , 'category' , 'tags'])->orderby('id' , 'asc')->get();
        return view('admin/post/posts', compact('posts'));
    }

    public function users()
    {
        $users = User::orderby('id', 'asc')->get();
        return view('admin/user/users', compact('users'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('admin/user/edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $validateUser = $request->validate([
            'name' => ['required' , 'min:3', 'max:255'],
            'email' => ['required' , 'unique:users,email,' . $id],
            'role' => ['required']
        ]);

        $user->update($validateUser);

        return redirect()->route('dashboard.users')->with('success', 'یوزر آپدیت شد');

    }

    public function delete($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('dashboard.users');
    }

    public function test(){
        $posts = Post::find(11);
        $tags = $posts->tags;
        dd($tags);
    }

    public function tags(){
        return view('admin.tags');
    }

    public function storeTag(Request $request){
        $validateTags = $request->validate([
            'name' => ['required','min:3','max:255'],
            'slug'=> ['required','min:3','max:255' , 'unique:tags,slug'],
        ]);

        Tag::create($validateTags);

        return redirect()->route('admin.tags')->with('success' , 'تگ با موفقیت ساخته شد');
    }
}
