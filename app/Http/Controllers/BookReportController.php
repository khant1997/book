<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use Maatwebsite\Excel\Facades\Excel;

class BookReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = DB::Select('select * from book');
        ob_end_clean();
        ob_start();
        Excel::create('Book Report', function($excel)use($books) {
                $excel->sheet('UserReport', function($sheet)use($books) {

                    $displayArray   = array();
                    $count          = 0;
                    if(isset($books) && count($books) > 0){
                        foreach($books as $book){
                            $count++;
                            $displayArray[$book->id]['Book Name']           = $book->Book_Name;
                            $displayArray[$book->id]['Author Name'] = $book->Author_Name;
                            $displayArray[$book->id]['Date']  = $book->Date;
                            $displayArray[$book->id]['Summary']  = $book->Summary;
                            $displayArray[$book->id]['Category_ID']  = $book->Category_id;
                            $displayArray[$book->id]['Price']  = $book->Price;
                            $displayArray[$book->id]['Image']  = $book->Image;
                            $displayArray[$book->id]['PDF_Name']  = $book->Pdf_Name;
                            
                            
                            
                            
                            // if($user_role == 1 || $user_role==2){
                            //   $displayArray[$member->id]['Member Team']         = $member->team_name;

                            //  }

                            // $displayArray[$member->id]['Member_Status']         = $member->status;
                            // $displayArray[$member->id]['Registered_Date']     = date('Y-m-d',strtotime($member->created_at));
                        }
                    }
                    
                    $count          = $count +2;
                    $sheet->fromArray($displayArray);
                    $sheet->row(1,function($row){
                        $row->setBackground('#67c54a');
                        $row->setFontSize(13);
                        $row->setFontColor('#ffffff');
                    });
                 
                    $sheet->cells('A'.$count.':H'.$count, function($cells) {
                        $cells->setBackground('#67c54a');
                        $cells->setFontColor('#ffffff');
                    });
                  
                });
                
            })->download('xls');

            ob_flush();
            return Redirect();
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
