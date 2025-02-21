<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactsRequest;

class CreateContactController extends Controller
{
    public function __invoke(ContactsRequest $contactsRequest)
    {
        $data = $contactsRequest->validated();
        Contact::create($data);
    }
}
