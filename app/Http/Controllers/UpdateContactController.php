<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactsRequest;
use App\Models\Contact;
use Illuminate\Http\JsonResponse;

class UpdateContactController extends Controller
{
    public function __invoke(ContactsRequest $contactsRequest, $id): JsonResponse
    {
        $contact = Contact::find($id);

        if (!$contact) {
            return response()->json([
                'message' => 'Contact not found',
            ], 404);
        }

        $data = $contactsRequest->validated();
       
        $contact->update($data);
        
        return response()->json([
            'message' => 'Contact updated successfully',
        ], 200);
    }
}