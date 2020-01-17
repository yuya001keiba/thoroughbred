<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
 
use App\SaleHorse;

//useしないと 自動的にnamespaceのパスが付与されるのでuse
use SplFileObject;

class SaleHorsesController extends Controller
{
    
    protected $C = null;
 
     public function __construct(salehorse $salehorse)
    {
        $this->salehorse = $salehorse;
    }
 
 
    public function index()
    {
        return view('insert.sale_horses');
    }
    
    
    /**
     * CSVインポート
     *
     * @param  Request
     * @return \Illuminate\Http\Response
     */
    public function import(Request $request)
    {
 
    //全件削除
    salehorse::truncate();
 
    // ロケールを設定(日本語に設定)
    setlocale(LC_ALL, 'ja_JP.UTF-8');
 
    // アップロードしたファイルを取得
    // 'csv_file' はビューの inputタグのname属性
    $uploaded_file = $request->file('csv_file');
 
    // アップロードしたファイルの絶対パスを取得
    $file_path = $request->file('csv_file')->path($uploaded_file);
 
    //SplFileObjectを生成
    $file = new SplFileObject($file_path);
 
    //SplFileObject::READ_CSV が最速らしい
    $file->setFlags(SplFileObject::READ_CSV);
 
 
    $row_count = 1;
    
    //取得したオブジェクトを読み込み
    foreach ($file as $row)
    {
        // 最終行の処理(最終行が空っぽの場合の対策
        if ($row === [null]) continue; 
        
        // 1行目のヘッダーは取り込まない
        if ($row_count > 0)
        {
            // CSVの文字コードがSJISなのでUTF-8に変更
            $breed_id = mb_convert_encoding($row[1], 'UTF-8', 'SJIS');
            $horse_name = $row[2];
            $category_id = mb_convert_encoding($row[3], 'UTF-8', 'SJIS');
            $price = mb_convert_encoding($row[4], 'UTF-8', 'SJIS');
            $applicant = $row[5];
            $tel = mb_convert_encoding($row[6], 'UTF-8', 'SJIS');
            $video = mb_convert_encoding($row[7], 'UTF-8', 'SJIS');
            $point = $row[8];
            
            //1件ずつインポート
                salehorse::insert(array(
                    'breed_id' => $breed_id, 
                    'horse_name' => $horse_name, 
                    'category_id' => $category_id, 
                    'price' => $price,
                    'applicant' => $applicant,
                    'tel' => $tel,
                    'video' => $video,
                    'point' => $point
                    
                ));
        }
        $row_count++;
    }
    
    return view('insert.sale_horses');
 
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
