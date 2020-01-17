<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Imports\HorsesImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Horse;
use App\SaleHorse;
use App\Category;
use DB;

class HorsesController extends Controller
{
    
    public function index(){
        
        $horses = DB::table('sale_horses')
                    ->latest()
                    ->limit(4)
                    ->get();
                    
        // dd($horses);
                    

        $data = ['horses'=>$horses,];

    	return view('index', $data);

    }
    
    public function show($id){
        
        $horses = Horse::find($id);
        $salehorses = SaleHorse::where('breed_id', $id)->first();

                  
        $data = ['horses'=>$horses,'salehorses'=>$salehorses,];
        

        

    	return view('horses.show', $data);

    }  
    

    public function store(Request $request){

		$file = $request->file('file');

		Excel::import(new HorsesImport, $file);

    }
    
    
    public function import(Request $request)
   {
        $file = $request->file('file');
        Excel::import(new HorsesImport, $file);
   }
   


}
