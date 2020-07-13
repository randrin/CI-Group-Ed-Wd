<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
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

    public function send(ContactRequest $request)
    {
        $contact = ContactService::setContactValues($request, new Contact());
        $contact->save();

        toastr()->success('<b>Bénéfice mis à jour.</b>', '<button type="button" class="close" data-dismiss="alert" aria-label="Close">&times;</button>');
    }
}
