<?php

namespace App\Http\Controllers;

use App\model\crud;
use Illuminate\Http\Request;
use App\model\Variant;

use App\lib\CrudLib;

class CrudController extends Controller
{
//varient table data
    public function varientdata(){



        $data=new Variant();
        $data=$data->getData();

        return view('varianttable', ['showdata' => $data]);



    }







    // function for bootstarp menu
    public function lekrajMenu()
    {

        return view('lekrajMenu');


    }

    public function satpalMenu()
    {

        return view('satpalMenu');


    }
//laravel all  temp test
    public function laraveTest()
    {

        $myData = crud::get()->toArray();

        return View('test', compact('myData'));

    }

//  Form View
    public function formView()
    {

        return view('CrudForm');

    }
//store the varient data





// Store the data to database request from form
    public function store(request $request)
    {
//        $this->validate(request(), [
//
//            'fname' => 'required|max:5',
//            'lname' => 'required',
//
//
//        ]);
        $saveMyData = new crud;

        $saveMyData->fname = $request->fname;
        $saveMyData->lname = $request->lname;
        $saveMyData->email = $request->email;
        $saveMyData->mobile = $request->mobile;

        $saveMyData->save();

        if ($saveMyData) {

            return redirect('/display_data');

        }
    }

// Get data from database
    public function getData()
    {

        $get_temp = new CrudLib();

        $get_data = $get_temp->fetchData();


        return view('display_data', compact('get_data'));

    }


}
