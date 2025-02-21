<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class DeleteContactController extends Controller
{
    public function __invoke(Request $request, $id): JsonResponse
    {
        $contact = Contact::find($id);

        if (!$contact) {
            return response()->json([
                'message' => 'Contact not found',
            ], 404);
        }
        $contact->delete();
        return response()->json([
            'message' => 'Contact deleted successfully',
        ], 200);
    }
}