<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExcelController extends Controller
{
    public function index(){
        return view('admin.Excel.DropDown',[
            'title' => 'Add file Excel'
        ]);
    }
}
