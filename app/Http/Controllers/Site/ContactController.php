<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StoreRequest;
use App\Model\Contact;
use App\Services\ContactService;

class ContactController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    //public function __construct(){
     //   $this->middleware('auth', ['except' => ['index','send']]);
    //}

    public function index()
    {
        return view('site.contact');
    }

    public function contactsend(StoreRequest $request)
    {
        $contact = ContactService::setContactValues($request);

        ContactService::newEmailTocontact($request);

        return response()->json($contact, 200);
    }
}
