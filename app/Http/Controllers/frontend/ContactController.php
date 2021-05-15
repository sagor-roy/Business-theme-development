<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\ContactMesssage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // CONTACT MESAGE STORE
    public function store(Request $request) {
        try {
            $store = new ContactMesssage();
            $store->name = $request->name;
            $store->email = $request->email;
            $store->sub = $request->sub;
            $store->message = $request->message;
            $store->save();
            session()->flash('message','Thank you for your message');
            return redirect()->back();
        } catch (\Exception $error) {
            session()->flash('errorMessage',$error->getMessage());
            return redirect()->back();
        }
    }
}
