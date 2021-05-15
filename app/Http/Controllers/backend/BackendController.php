<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Address;
use App\Models\backend\ChooseUs;
use App\Models\backend\Copyright;
use App\Models\backend\HomeSection;
use App\Models\backend\HomeSectionStatus;
use App\Models\backend\Logo;
use App\Models\backend\OfferSection;
use App\Models\backend\Product;
use App\Models\backend\SeenMessage;
use App\Models\backend\Social;
use App\Models\backend\Staff;
use App\Models\frontend\ContactMesssage;

class BackendController extends Controller
{
    // Admin Profile
    public function admin() {
        $messageCount = ContactMesssage::get();
        $message = ContactMesssage::latest()->limit(4)->get();
        return view('backend.admin.profile',compact('message','messageCount'));
    }

    // Admin Dashboard
    public function dashboard() {
        $messageCount = ContactMesssage::get();
        $message = ContactMesssage::latest()->limit(4)->get();
        $seen = SeenMessage::latest()->limit(4)->get();
        return view('backend.home.dashboard',compact('message','messageCount','seen'));
    }

    public function head() {
        $view = Logo::get();
        $link = Social::get();
        $add = Address::get();
        $copy = Copyright::get();
        $messageCount = ContactMesssage::get();
        $message = ContactMesssage::latest()->limit(4)->get();
        return view('backend.home.head',compact('view','link','add','copy','message','messageCount'));
    }

    // Home Page
    public function home() {
        $sectionStatus = HomeSectionStatus::get();
        $homeSec = HomeSection::get();
        $choose = ChooseUs::where('id','1')->get();
        $choose1 = ChooseUs::where('id','2')->get();
        $choose2 = ChooseUs::where('id','3')->get();
        $choose3 = ChooseUs::where('id','4')->get();
        $choose4 = ChooseUs::where('id','5')->get();
        $offer = OfferSection::where('id','1')->get();
        $icon1 = OfferSection::where('id','2')->get();
        $icon2 = OfferSection::where('id','3')->get();
        $icon3 = OfferSection::where('id','4')->get();
        $icon4 = OfferSection::where('id','5')->get();
        $product = Product::where('id','1')->get();
        $show = Product::where('id','!=','1')->latest()->get();
        $staffHead = Staff::where('id','1')->get();
        $staff = Staff::where('id','!=','1')->get();
        $messageCount = ContactMesssage::get();
        $message = ContactMesssage::latest()->limit(4)->get();
        return view('backend.home.home',compact('sectionStatus','homeSec','choose','choose1','choose2','choose3','choose4','offer','icon1','icon2','icon3','icon4','product','show','staffHead','staff','message','messageCount'));
    }

    // CHOOSE SHOW
    public function chooseUpdate($id) {
        $choose1 = ChooseUs::where('id',$id)->get();
        return view('backend.home.choose_edit',compact('choose1'));
    }

    public function icon1($id) {
        $offer = OfferSection::where('id',$id)->get();
        return view('backend.home.offer_edit',compact('offer'));
    }

    public function icon2($id) {
        $offer = OfferSection::where('id',$id)->get();
        return view('backend.home.offer_edit',compact('offer'));
    }

    public function icon3($id) {
        $offer = OfferSection::where('id',$id)->get();
        return view('backend.home.offer_edit',compact('offer'));
    }

    public function icon4($id) {
        $offer = OfferSection::where('id',$id)->get();
        return view('backend.home.offer_edit',compact('offer'));
    }

    // PRODUCT EDIT
    public function proEdit($id) {
        $proEdit = Product::where('id',$id)->get();
        return view('backend.home.product_edit',compact('proEdit'));
    }

    // CONTACT DETAIL INFORM
    public function conMessage($id) {
        $output = ContactMesssage::find($id);
        $store = new SeenMessage();
        $store->cont_id = $output->id;
        $store->name = $output->name;
        $store->email = $output->email;
        $store->sub = $output->sub;
        $store->message = $output->message;
        $store->save();

        ContactMesssage::where('id',$id)->delete();

        $messageCount = ContactMesssage::get();
        $message = ContactMesssage::latest()->limit(4)->get();
        $show = SeenMessage::where('cont_id',$id)->get();
        return view('backend.contact.contact_detail_inform',compact('show','messageCount','message'));
    }


}
