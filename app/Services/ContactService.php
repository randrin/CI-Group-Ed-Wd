<?php

namespace App\Services;

use App\Http\Requests\ContactRequest;
use App\Model\Contact;

class ContactService
{

    public static function setContactValues(ContactRequest $request, Contact $contact)
    {
        $contact->name = $request->contact_name;
        $contact->phone = $request->contact_phone;
        $contact->email = $request->contact_email;
        $contact->subject = $request->contact_subject;
        $contact->msg = $request->contact_message;
        return $contact;
    }
}
