<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\backend\ChooseUs;
use App\Models\backend\HomeSection;
use App\Models\backend\HomeSectionStatus;
use App\Models\backend\Logo;
use App\Models\backend\OfferSection;
use App\Models\backend\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     * all page index file
     * @return
     */
    public function index()
    {
        $status  = HomeSectionStatus::get();
        $homeSec = HomeSection::get();
        $logo = Logo::get();
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
        $show = Product::where('id','!=','1')->latest()->limit(4)->get();
        return view('frontend.home',compact('status','homeSec','logo','choose','choose1','choose2','choose3','choose4','offer','icon1','icon2','icon3','icon4','show'));
    }

    public function about() {
        $logo = Logo::get();
        return view('frontend.about',compact('logo'));
    }

    public function price() {
        $logo = Logo::get();
        return view('frontend.pricing',compact('logo'));
    }

    // PRODUCT DETAIL PAGE
    public function proDetail($slug) {
        $detail = Product::where('slug',$slug)->get();
        $other = Product::where('slug','!=',$slug)->limit(2)->get();
        $recent = Product::where('slug','!=',$slug)->limit(10)->latest()->get();
        $logo = Logo::get();
        return view('frontend.product_detail',compact('detail','logo','other','recent'));
    }

    // CONTACT PAGE
    public function contact() {
        $logo = Logo::get();
        return view('frontend.contact',compact('logo'));
    }

}
