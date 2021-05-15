<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\ChooseUs;
use App\Models\backend\HomeSection;
use App\Models\backend\HomeSectionStatus;
use App\Models\backend\OfferSection;
use App\Models\backend\Product;
use App\Models\backend\Staff;
use Exception;
use Illuminate\Http\Request;
use Image;

class HomePageController extends Controller
{
    // CHOOSE SECTION
    public function choose(Request $request) {
        if($request->status == 1) {
            $status = 'active';
        }else{
            $status = 'inactive';
        }
        // STATUS UPDATE
        $check = HomeSectionStatus::find(1);
        $check->choose = $status;
        $check->update();
        return response()->json(['success' => 'Status changes successfull']);
    }

    // OFFER SECTION
    public function offer(Request $request) {
        if($request->status == 1) {
            $status = 'active';
        }else{
            $status = 'inactive';
        }
        // STATUS UPDATE
        $check = HomeSectionStatus::find(1);
        $check->offer = $status;
        $check->update();
        return response()->json(['success' => 'Status changes successfull']);
    }

    // PRODUCT SECTION
    public function product(Request $request) {
        if($request->status == 1) {
            $status = 'active';
        }else{
            $status = 'inactive';
        }
        // STATUS UPDATE
        $check = HomeSectionStatus::find(1);
        $check->product = $status;
        $check->update();
        return response()->json(['success' => 'Status changes successfull']);
    }

    // STAFF SECTION
    public function staff(Request $request) {
        if($request->status == 1) {
            $status = 'active';
        }else{
            $status = 'inactive';
        }
        // STATUS UPDATE
        $check = HomeSectionStatus::find(1);
        $check->staff = $status;
        $check->update();
        return response()->json(['success' => 'Status changes successfull']);
    }

    // WORK SECTION
    public function work(Request $request) {
        if($request->status == 1) {
            $status = 'active';
        }else{
            $status = 'inactive';
        }
        // STATUS UPDATE
        $check = HomeSectionStatus::find(1);
        $check->work = $status;
        $check->update();
        return response()->json(['success' => 'Status changes successfull']);
    }

    // CLIENT SECTION
    public function client(Request $request) {
        if($request->status == 1) {
            $status = 'active';
        }else{
            $status = 'inactive';
        }
        // STATUS UPDATE
        $check = HomeSectionStatus::find(1);
        $check->client = $status;
        $check->update();
        return response()->json(['success' => 'Status changes successfull']);
    }

    // CENTER IMG SECTION
    public function centerImg(Request $request) {
        if($request->status == 1) {
            $status = 'active';
        }else{
            $status = 'inactive';
        }
        // STATUS UPDATE
        $check = HomeSectionStatus::find(1);
        $check->center_img = $status;
        $check->update();
        return response()->json(['success' => 'Status changes successfull']);
    }

    // FEEDBACK SECTION
    public function feedback(Request $request) {
        if($request->status == 1) {
            $status = 'active';
        }else{
            $status = 'inactive';
        }
        // STATUS UPDATE
        $check = HomeSectionStatus::find(1);
        $check->feedback = $status;
        $check->update();
        return response()->json(['success' => 'Status changes successfull']);
    }

    // PARTNER SECTION
    public function partner(Request $request) {
        if($request->status == 1) {
            $status = 'active';
        }else{
            $status = 'inactive';
        }
        // STATUS UPDATE
        $check = HomeSectionStatus::find(1);
        $check->partner = $status;
        $check->update();
        return response()->json(['success' => 'Status changes successfull']);
    }

    // BLOG SECTION
    public function blogSection(Request $request) {
        if($request->status == 1) {
            $status = 'active';
        }else{
            $status = 'inactive';
        }
        // STATUS UPDATE
        $check = HomeSectionStatus::find(1);
        $check->blog = $status;
        $check->update();
        return response()->json(['success' => 'Status changes successfull']);
    }

    // CLICK SECTION
    public function click(Request $request) {
        if($request->status == 1) {
            $status = 'active';
        }else{
            $status = 'inactive';
        }
        // STATUS UPDATE
        $check = HomeSectionStatus::find(1);
        $check->click = $status;
        $check->update();
        return response()->json(['success' => 'Status changes successfull']);
    }

    // HOME SECTION
    public function homeImg(Request $request) {
        // Image Validation
        $request->validate([
            'img' => 'image|mimes:jpg,png,jpeg,webp|max:600',
        ]);

        try {
            $home = HomeSection::find(1);
        if($request->file('img') == null) {
            $home->color = $request->color;
            $home->position = $request->position;
            $home->text = $request->text;
            $home->head = $request->head;
            $home->btn = $request->btn;
            $home->update();
            session()->flash('homeMessage','Update Successfull');
            return redirect()->back();
        }else{
            // Imge Intervention
            $img = $request->file('img');
            $img_name = substr(md5(time()),0,10).'.'.$img->getClientOriginalExtension();
            Image::make($img)->save('uploads/homepage/'.$img_name);
            $output = 'uploads/homepage/'.$img_name;
            // img Update
            if ($home->img == null) {
            }else{
                if (file_exists(public_path($folder = $home->img))) {
                    unlink(public_path($folder));
                }
            }
            $home->img = $output;
            $home->position = $request->position;
            $home->color = $request->color;
            $home->text = $request->text;
            $home->head = $request->head;
            $home->btn = $request->btn;
            $home->update();
            session()->flash('homeMessage','Update Successfull');
            return redirect()->back();
        }
        } catch (Exception $error) {
            session()->flash('errorMessage', $error->getMessage());
            return redirect()->back();
        }
    }

    // CHOOSE HEAD
    public function chooseHead(Request $request) {
        try {
            $check = ChooseUs::find(1);
            $check->head = $request->head;
            $check->text = $request->text;
            $check->update();
            session()->flash('chooseMessage','Update Successfull');
            return redirect()->back();
        }catch (Exception $error) {
            session()->flash('chooseMessage',$error->getMessage());
            return redirect()->back();
        }
    }

    //CHOOSE UPDATE
    public function chooseEdit(Request $request, $id) {
        try {
            $check = ChooseUs::find($id);
            if ($request->file('img') == null) {
                $check->head = $request->head;
                $check->text = $request->text;
                $check->update();
                session()->flash('editMessage','Update Successfull');
                return redirect()->back();
            }else{
                // Imge Intervention
                $img = $request->file('img');
                $img_name = substr(md5(time()),0,10).'.'.$img->getClientOriginalExtension();
                Image::make($img)->save('uploads/choose/'.$img_name);
                $output = 'uploads/choose/'.$img_name;
                // img Update
                if ($check->img == null) {
                }else{
                    if (file_exists(public_path($folder = $check->img))) {
                        unlink(public_path($folder));
                    }
                }
                $check->img = $output;
                $check->head = $request->head;
                $check->text = $request->text;
                $check->update();
                session()->flash('editMessage','Update Successfull');
                return redirect()->back();
            }
        } catch (Exception $error) {
            session()->flash('editMessage',$error->getMessage());
            return redirect()->back();
        }
    }

    // OFFER SECTION
    public function offerUpdate(Request $request) {
        // Image Validation
        $request->validate([
            'img' => 'image|mimes:png,jpg,jpeg,webp|max:500',
        ]);

        try {
            $offer = OfferSection::find(1);
            if($request->file('img') == null) {
                $offer->head = $request->head;
                $offer->text = $request->text;
                $offer->sub_head = $request->subhead;
                $offer->update();
                session()->flash('offerMessage','Update Successfull');
                return redirect()->back();
            }else{
                $img = $request->file('img');
                $img_name = substr(md5(time()),0,10).'.'.$img->getClientOriginalExtension();
                Image::make($img)->save('uploads/homepage/offer/'.$img_name);
                $output = 'uploads/homepage/offer/'.$img_name;
                if ($offer->img == null) {
                    return redirect()->back();
                }else{
                    if (file_exists(public_path($folder = $offer->img))) {
                        unlink(public_path($folder));
                    }
                }
                $offer->img = $output;
                $offer->head = $request->head;
                $offer->text = $request->text;
                $offer->sub_head = $request->subhead;
                $offer->update();
                session()->flash('offerMessage','Update Successfull');
                return redirect()->back();
            }
        } catch (Exception $error) {
            session()->flash('errorMessage',$error->getMessage());
            return redirect()->back();
        }
    }

    //OFFER EDIT
    public function offerEdit(Request $request, $id) {
        try {
            $check = OfferSection::find($id);
            $check->icon = $request->name;
            $check->content = $request->text;
            $check->update();
            session()->flash('editMessage','Update Successfull');
            return redirect()->back();
        } catch (Exception $error) {
            session()->flash('errorMessage',$error->getMessage());
            return redirect()->back();
        }
    }

    // PRODUCT SECTION
    public function proHead(Request $request) {
        try {
            $head = Product::where('id','1')->find(1);
            $head->head = $request->head;
            $head->text = $request->text;
            $head->update();
            session()->flash('headMessage','Update Successfull');
            return redirect()->back();
        } catch (\Exception $error) {
            session()->flash('errorMessage',$error->getMessage());
            return redirect()->back();
        }
    }

    // PRODUCT STORE
    public function proStore(Request $request) {
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg,webp|max:500',
            'title' => 'required|min:10|unique:products,title',
            'body' => 'required|min:20'
        ]);

        try {
            $img = $request->file('image');
            $img_name = substr(md5(time()),0,10).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(500,350)->save('uploads/homepage/product/'.$img_name);
            $output = ('uploads/homepage/product/'.$img_name);
            $store = new Product();
            $store->title = $request->title;
            $store->slug = strtolower(str_replace(' ','-',$request->title));
            $store->content = $request->body;
            $store->img = $output;
            $store->save();
            session()->flash('headMessage','Data Inserted Successfull');
            return redirect()->back();
        } catch (\Exception $error) {
            session()->flash('errorMessage',$error->getMessage());
            return redirect()->back();
        }
    }

    // PRODUCT UPDATE
    public function proUpdate(Request $request, $id) {
        try {
           $check =  Product::find($id);
           if ($request->file('img') == null) {
               $check->title = $request->title;
               $check->content = $request->text;
               $check->update();
               session()->flash('proUpMessage','Update Successfull');
               return redirect()->back();
           }else{
               $img = $request->file('img');
               $img_name = substr(md5(time()),0,10).'.'.$img->getClientOriginalExtension();
               Image::make($img)->resize(500,350)->save('uploads/homepage/product/'.$img_name);
               $output = ('uploads/homepage/product/'.$img_name);
               if ($check->img == null) {
                   return redirect()->back();
               }else{
                   if (file_exists(public_path($folder = $check->img))) {
                       unlink(public_path($folder));
                   }
               }
               $check->img = $output;
               $check->title = $request->title;
               $check->content = $request->text;
               $check->update();
               session()->flash('proUpMessage','Update Successfull');
               return redirect()->back();
           }
        } catch (Exception $error) {
            session()->flash('errorMessage',$error->getMessage());
            return redirect()->back();
        }
    }

    // PRODUCT DELETE
    public function proDelete($id) {
        $delete = Product::find($id);
        if ($delete->img == null) {
            return redirect()->back();
        }else{
            if (file_exists(public_path($folder = $delete->img))) {
                unlink(public_path($folder));
            }
        }
        Product::where('id',$id)->delete();
        return redirect()->back();
    }

    // STAFF SECTION
    public function staffHead(Request $request) {
        try {
            $check = Staff::find(1);
            $check->head = $request->head;
            $check->text = $request->text;
            $check->update();
            session()->flash('staffMessage','Update Successfull');
            return redirect()->back();
        } catch (Exception $error) {
            session()->flash('$errorMessage',$error->getMessage());
            return redirect()->back();
        }
    }

    // STAFF STORE
    public function staffStore(Request $request) {
        $request->validate([
            'img' => 'required|image|mimes:png,jpg,jpeg,webp|max:500',
            'name' => 'required|max:20',
            'profession' => 'required|max:50',
        ]);

        try {
            $img = $request->file('img');
            $img_name = substr(md5(time()),0,10).'.'.$img->getClientOriginalExtension();
            Image::make($img)->resize(300,300)->save('uploads/homepage/staff/'.$img_name);
            $output = ('uploads/homepage/staff/'.$img_name);
            $store = new Staff();
            $store->name = $request->name;
            $store->prof = $request->profession;
            $store->img = $output;
            $store->fb = $request->fb;
            $store->insta = $request->insta;
            $store->link = $request->link;
            $store->twit = $request->twit;
            $store->you = $request->you;
            $store->pin = $request->pin;
            $store->save();
            session()->flash('staffMessage','Data Inserted Successfull');
            return redirect()->back();
        } catch (Exception $error) {
            session()->flash('$errorMessage',$error->getMessage());
            return redirect()->back();
        }
    }
}
