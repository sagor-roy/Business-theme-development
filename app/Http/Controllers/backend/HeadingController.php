<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Address;
use App\Models\backend\Copyright;
use App\Models\backend\Logo;
use App\Models\backend\Social;
use App\Models\backend\Status;
use Illuminate\Http\Request;
use Image;

class HeadingController extends Controller
{
//    LOGO METHOD
    public function logoUpdate(Request $request) {
//      Image Validation
        $request->validate([
            'logo' => 'image|mimes:jpg,png,jpeg,webp|max:500',
        ]);

        try {
            if($request->file('logo') == null) {
                session()->flash('message','Logo Update Successfull');
                return redirect()->back();
            }else{
//              Imge Intervention
                $logo = $request->file('logo');
                $logo_name = substr(md5(time()),0,10).'.'.$logo->getClientOriginalExtension();
                Image::make($logo)->save('uploads/logo/'.$logo_name);
                $output = 'uploads/logo/'.$logo_name;
//              Logo Update
                $logo = Logo::find(1);
                if ($logo->img == null) {
                    return redirect()->back();
                }else{
                    if (file_exists(public_path($folder = $logo->img))) {
                        unlink(public_path($folder));
                    }
                }
                $logo->img = $output;
                $logo->update();
                session()->flash('message','Logo Update Successfull');
                return redirect()->back();
            }
        } catch (Exception $error) {
            session()->flash('message',$error->getMessage());
            return redirect()->back();
        }
    }

//  SOCIAL LINK METHOD
    public  function socialUpdate(Request $request) {
        try {
          $link =  Social::find(1);
          $link->f_icon = $request->f_icon;
          $link->f_link = $request->f_link;
          $link->s_icon = $request->s_icon;
          $link->s_link = $request->s_link;
          $link->t_icon = $request->t_icon;
          $link->t_link = $request->t_link;
          $link->fo_icon = $request->fo_icon;
          $link->fo_link = $request->fo_link;
          $link->update();
          session()->flash('socialMessage','Update Successfull');
          return redirect()->back();
        }catch (\Exception $error) {
            session()->flash('socialMessage',$error->getMessage());
            return redirect()->back();
        }
    }

//  ADDRESS METHOD
    public function addressUpdate(Request $request) {
        try {
            $add = Address::find(1);
            $add->name = $request->name;
            $add->email = $request->email;
            //$add->number = $request->number;
            $add->add = $request->add;
            $add->desc = $request->desc;
            $add->update();
            session()->flash('addMessage','Update Successfull');
            return redirect()->back();
        }catch (\Exception $error) {
            session()->flash('addMessage',$error->getMessage());
            return redirect()->back();
        }
    }

//  COPPYRIGHT METHOD
    public function copyRight(Request $request) {
        try {
            $copy = Copyright::find(1);
            $copy->name = $request->name;
            $copy->update();
            session()->flash('copyMessage','Update Successfull');
            return redirect()->back();
        }catch (\Exception $error) {
            session()->flash('copyMessage',$error->getMessage());
            return redirect()->back();
        }
    }
}
