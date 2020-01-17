<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Horse;
use App\SaleHorse;
use App\Category;
use DB;

class SearchController extends Controller
{
        public function search(Request $request)
    {
        $horses = Horse::where('horse_name', 'LIKE', "%{$request->horse}%")->get();
        $data = ['horses'=>$horses,];
        
        // dd($data);
        
        return view('search.result', $data);
    }
    
    public function weanling(){

    	$horses = Horse::whereYear('birthday', '2019')->get();
        $data = ['horses'=>$horses,];
        
        return view('search.result', $data);

    }
    
    public function yearling(){

    	$horses = Horse::whereYear('birthday', '2018')->get();
        $data = ['horses'=>$horses,];
        
        return view('search.result', $data);

    }
    
    public function juvenile(){

    	$horses = Horse::whereYear('birthday', '2017')->get();
        $data = ['horses'=>$horses,];
        
        return view('search.result', $data);

    }
    
    public function category(Request $request, $id){

    	$horses = DB::select("SELECT * 
                                FROM `sale_horses` as s
                                INNER JOIN
                                    `horses` as h
                                ON s.`breed_id` = h.`breed_id`
                                INNER JOIN
                                    `categories` as c
                                ON s.`category_id` = c.`id`
                                WHERE category_id = $id;");
                                
    // 	dd($horses);
        $data = ['horses'=>$horses,];
        
        return view('search.result', $data);

    }
    
    public function auction(Request $request, $id){

    	$horses = DB::select("SELECT * 
                                FROM `horses` as h
                                LEFT OUTER JOIN
                                    `sale_horses` as s
                                ON h.`breed_id` = s.`breed_id`
                                INNER JOIN
                                    `auction_horses` as a
                                ON h.`breed_id` = a.`breed_id` 
                                WHERE auction_id = $id;");
                                
                                
     	  //dd($horses);
        $data = ['horses'=>$horses,];
        
        return view('search.result', $data);

    }
    
    public function sire()
    {
        $horses = Horse::where('sire', 'LIKE', "ア%")
                        ->orWhere('sire', 'LIKE', "イ%")
                        ->orWhere('sire', 'LIKE', "ウ%")
                        ->orWhere('sire', 'LIKE', "エ%")
                        ->orWhere('sire', 'LIKE', "オ%")
                        ->groupBy('sire')
                        ->select(DB::raw('count(*) as sire_count, sire'))
                        ->orderBy('sire', 'asc')
                        ->get();

       // dd($horses);                
         
        $data = ['horses'=>$horses,];
        
        //  dd($data);
        
        return view('search.sire-name', $data);
    }
    
        public function siresearch(Request $request)
    {
        $horses = Horse::where('sire',  "$request->sire")->get();
        $data = ['horses'=>$horses,];
        
        // dd($data);
        
        return view('search.result', $data);
    }
}
