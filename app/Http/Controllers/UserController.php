<?php

namespace App\Http\Controllers;

use App\Follower;
use App\Jobs\SendPostEmail;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class UserController extends Controller
{
    public function getSignInAdmin() {
        return view('admin.signin');
    }

    public function postSignInAdmin(Request $request){
        $this->validate($request,
            [
                'email' => 'required|email',
                'password' => 'required|min:6'
            ],
            [
                'email.required' => 'Your must fill out email',
                'email.email' => 'Your email is incorrect format',
                'password.required' => 'Your must fill out password',
                'password.min' => 'Password length is at least 6 characters',
            ]
        );
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $user = Auth::user();
            if($user->level > 1){
                return view('admin.homepage');
            }else{
                return redirect()->back()->withErrors(['You don\'t have permission']);
            }
        }
        else{
            return redirect()->back()->withInput()->withErrors(['Your email or password is not correct']);
        }
    }

    public function getFollower(){
        $followers = Follower::all();
        return view('admin.customer.follower')->with(['followers' => $followers]);;
    }

    public function getsendMail(){
        return view('admin.customer.sendMail');
    }

    public function postsendMail(Request $request){
        $this->validate($request,
            [
                'title' => 'required',
                'body' => 'required'
            ],
            [
                'title.required' => 'Your must fill out title of mail',
                'body.required' => 'Your must fill out body of mail',
            ]
        );
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->save();
        dispatch(new SendPostEmail($post));
        return redirect()->back()->with(['alert' => 'Send mail success!']);
    }

    public function getListCustomer(){
        $customers = User::where([
            ['active', 1],
            ['level', 1]
        ])->get();
        return view('admin.customer.list')->with(['customers' => $customers]);
    }

    public function getListMail(){
        $posts = Post::all();
        return view('admin.customer.listMail')->with(['posts' => $posts]);
    }

    public function SignOutAdmin(){
        if(Auth::check()){
            Auth::logout();
            return redirect('admin/signin');
        }
    }
}
