<?php

namespace App\Http\Controllers;

use App\BbsEntry;
use Illuminate\Http\Request;

class BbsEntryController extends Controller
{
    public function index()
    {
        $item_list = BbsEntry::orderBy('id', 'desc')->get();
        return view('bbs_entry_list', [
            'item_list' => $item_list,
        ]);
    }

    public function create(Request $request)
    {
        $input = $request->only('author', 'title', 'body');

        $entry = new BbsEntry();
        $entry->author = $input['author'];
        $entry->title = $input['title'];
        $entry->body = $input['body'];
        $entry->save();

        return redirect('/');
    }
}
