<?php

namespace App\Http\Controllers;
use App\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    public function getList(){
        $slides = Slide::where('active', 1)->get();
        return view('admin.slide.list')->with(['slides' => $slides]);
    }

    public function getAdd(){
        $slides = Slide::where('active', 1)->get();
        return view('admin.slide.add')->with(['slides' => $slides]);
    }

    public function postAdd(Request $request){
        $this->validate($request,
            [
                'name' => 'required',
                'image' => 'required|mimes:jpg,jpeg,png|max:2048'
            ],
            [
                'name.required' => 'Your must fill out the name of slide',
                'image.mimes' => 'The format of image of slide is not correct',
                'image.required' => 'The image of slide must be fill out',
                'image.max' => 'Only upload the image size below 2MB'
            ]
        );
        $slide = new Slide();
        $slide->name = changeTitle($request->name);
        $dbSlides = Slide::where('priority', 1)->get();
        if($request->priority == 1){
            foreach($dbSlides as $dbSlide){
                $dbSlide->priority = 0;
                $dbSlide->save();
            }
        }
        $slide->priority = $request->priority;
        $file = $request->file('image');
        $extens = $file->getClientOriginalExtension();
        $slide->image = "slide".getRandomStringNumber(3).".".$extens;
        $DBslide = Slide::where('image', $slide->image)->get();
        while(!$DBslide->isEmpty()){
            $slide->image = "slide".getRandomStringNumber(3).".".$extens;
        }
        $file->move('images/slide', $slide->image);
        $slide->save();
        return redirect('admin/slide/add')->with('success', 'New slide is created success');
    }

    public function getDelete($id){
        $slide = Slide::find($id);
        $slide->active = 0;
        $slide->save();
        return redirect('admin/slide/list')->with('alert', 'Delete success');
    }

    public function getUpdate($id){
        $slide = Slide::find($id);
        return view('admin.slide.update')->with(['slide' => $slide]);
    }

    public function postUpdate(Request $request, $id){
        $this->validate($request,
            [
                'name' => 'required',
                'image' => 'required|mimes:jpg,jpeg,png|max:2048'
            ],
            [
                'name.required' => 'Your must fill out the name of slide',
                'image.mimes' => 'The format of image of slide is not correct',
                'image.required' => 'The image of slide must be fill out',
                'image.max' => 'Only upload the image size below 2MB'
            ]
        );
        $slide = Slide::find($id);
        $slide->name = $request->name;
        $dbSlides = Slide::where('priority', 1)->get();
        if($request->priority == 1){
            foreach($dbSlides as $dbSlide){
                $dbSlide->priority = 0;
                $dbSlide->save();
            }
        }
        $slide->priority = $request->priority;
        if($request->checkImg == 1){
            $this->validate($request,
                [
                    'image' => 'required|mimes:jpg,jpeg,png|max:2048'
                ],
                [
                    'image.mimes' => 'The format of image of slide is not correct',
                    'image.required' => 'The image of slide must be fill out',
                    'image.max' => 'Only upload the image size below 2MB'
                ]
            );
            unlink('images/slide/'.$slide->image);
            $newfile = $request->file('image');
            $newfile->move('images/slide', $slide->image);
        }
        $slide->save();
        return redirect('admin/slide/list')->with('alert', 'Slide is updated success');
    }
}
