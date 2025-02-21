<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
 
class ListContactsController extends Controller
{
    /**
     * Show all application contactss.
     */
    public function index(): View
    {
        return view('contacts.index', [
            'contacts' => DB::table('contacts')->paginate(10)
        ]);
    }
}