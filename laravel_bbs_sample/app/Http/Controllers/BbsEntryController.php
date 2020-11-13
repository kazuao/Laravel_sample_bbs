<?php

namespace App\Http\Controllers;

use App\BbsEntry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BbsEntryController extends Controller
{
    public function index()
    {
        $item_list = BbsEntry::orderBy('id', 'desc')->padinate(10);
        return view('bbs_entry_list', [
            'item_list' => $item_list,
        ]);
    }

    public function create(Request $request)
    {
        $input = $request->only('author', 'title', 'body');

        $validator = Validator::make($input, [
            'author' => 'required|string|max:30',
            'title' => 'required|string|max:30',
            'body' => 'required|string|max:30',
        ]);

        if ($validator->fails()) {
            return redirect('/')->withErrors($validator);
        }

        $entry = new BbsEntry();
        $entry->author = $input['author'];
        $entry->title = $input['title'];
        $entry->body = $input['body'];
        $entry->save();

        return redirect('/');
    }
}
