<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\ListItem;

class TodoListController extends Controller
{
    
    // Return all the values from the table 
    public function index() {
        return view('welcome', ['listItems' => ListItem::all()]);
    }


    public function saveItem(Request $request) {
        //info(json_encode($request->all()));
        
        $newListItem = new ListItem;
        $newListItem->name = $request->listItem;
        $newListItem->is_complete = 0;
        $newListItem->save();


        //return view('welcome',  ['listItems' => ListItem::all()]);
        return redirect('/');

    }

}
