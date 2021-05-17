<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\backend\Address;
use App\Models\backend\CentralImage;
use App\Models\backend\ChooseUs;
use App\Models\backend\ClientComment;
use App\Models\backend\Copyright;
use App\Models\backend\Feedback;
use App\Models\backend\HomeSection;
use App\Models\backend\HomeSectionStatus;
use App\Models\backend\HowItWork;
use App\Models\backend\Logo;
use App\Models\backend\OfferSection;
use App\Models\backend\Partner;
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
        $choose1 = ChooseUs::where('id','!=','1')->get();
        $offer = OfferSection::where('id','1')->get();
        $icon1 = OfferSection::where('id','!=','1')->get();
        $product = Product::where('id','1')->get();
        $show = Product::where('id','!=','1')->latest()->get();
        $staffHead = Staff::where('id','1')->get();
        $staff = Staff::where('id','!=','1')->get();
        $messageCount = ContactMesssage::get();
        $message = ContactMesssage::latest()->limit(4)->get();
        $work = HowItWork::where('id','1')->get();
        $workContent = HowItWork::where('id','!=','1')->get();
        $comment = ClientComment::get();
        $img = CentralImage::where('id','1')->get();
        $feedback = Feedback::where('id','!=','1')->get();
        $feedHead = Feedback::where('id','1')->get();
        $partnerHead = Partner::where('id','1')->get();
        $partner = Partner::where('id','!=','1')->get();
        return view('backend.home.home',compact('sectionStatus','homeSec','choose','choose1','offer','icon1','product','show','staffHead','staff','message','messageCount','work','workContent','comment','img','feedback','feedHead','partnerHead','partner'));
    }

    // CHOOSE SHOW
    public function chooseUpdate($id) {
        $messageCount = ContactMesssage::get();
        $message = ContactMesssage::latest()->limit(4)->get();
        $choose1 = ChooseUs::where('id',$id)->get();
        return view('backend.home.choose_edit',compact('choose1','messageCount','message'));
    }

    public function icon1($id) {
        $messageCount = ContactMesssage::get();
        $message = ContactMesssage::latest()->limit(4)->get();
        $offer = OfferSection::where('id',$id)->get();
        return view('backend.home.offer_edit',compact('offer','messageCount','message'));
    }

    // PRODUCT EDIT
    public function proEdit($id) {
        $messageCount = ContactMesssage::get();
        $message = ContactMesssage::latest()->limit(4)->get();
        $proEdit = Product::where('id',$id)->get();
        return view('backend.home.product_edit',compact('proEdit','message','messageCount'));
    }

    // CONTACT DETAIL INFORM
    public function conMessage($id) {
        $messageCount = ContactMesssage::get();
        $message = ContactMesssage::latest()->limit(4)->get();
        $show = ContactMesssage::where('id',$id)->get();
        return view('backend.contact.contact_detail_inform',compact('show','messageCount','message'));
    }

    // HOW IT WORK
    public function workEdit($id) {
        $messageCount = ContactMesssage::get();
        $message = ContactMesssage::latest()->limit(4)->get();
        $workEdit = HowItWork::where('id',$id)->get();
        return view('backend.home.work_edit',compact('workEdit','message','messageCount'));
    }

    // STAFF SECTION
    public function staffEdit($id) {
        $messageCount = ContactMesssage::get();
        $message = ContactMesssage::latest()->limit(4)->get();
        $show = Staff::where('id',$id)->get();
        return view('backend.home.staff_edit',compact('messageCount','message','show'));
    }


}
