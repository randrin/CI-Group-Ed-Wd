<?php

namespace App\Services;

use App\Http\Requests\ContactRequest;
use App\Model\Contact;
use App\Jobs\ContactJob;

class ContactService
{

    public static function setContactValues($request)
    {
        $contact = Contact::create($request->all());

        return $contact;
    }

    public static function newEmailTocontact($request)
    {
        $fromFullnameUser = $request->get('name');
        $fromEmailUser = $request->get('email');
        $fromSubjectUser = $request->get('subject');
        $fromMessageUser = $request->get('message');

        $emailToUser = (new ContactJob($fromFullnameUser,$fromEmailUser,$fromSubjectUser,$fromMessageUser));

        dispatch($emailToUser);
    }

}
