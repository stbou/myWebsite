<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\ListItem;

class TodoListController extends Controller
{
    
    //Return all the values from the table 
    // public function index() {
    //     return view('welcome', ['listItems' => ListItem::where('is_complete', 0)->get()]);
    // }

    // public function markComplete($id) {
    //     $listItem = ListItem::find($id);
    //     $listItem->is_complete = 1;
    //     $listItem->save();
    //     return redirect('/');
    // }

    public function saveItem(Request $request) {
        
        $newListItem = new ListItem;
        $newListItem->name = $request->listItem;
        $newListItem->password = $request->listPassword;
        $newListItem->mail = $request->listMail;
        $newListItem->is_subscribe = 1;
        $newListItem->save();

        return view('welcome',  ['listItems' => ListItem::all()]);
    }

    // function to get the number of click on each media logo 
    public function saveClick(Request $request) {

        //$newListClick = new ListClick;

    }


}
