<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Excel;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = DB::select('select * from users');
    ob_end_clean();
    ob_start();
       Excel::create('UserReport', function($excel)use($users) {
                $excel->sheet('UserReport', function($sheet)use($users) {

                    $displayArray   = array();
                    $count          = 0;
                    if(isset($users) && count($users) > 0){
                        foreach($users as $user){
                            $count++;
                            $displayArray[$user->id]['User_No']           = $user->id;
                            $displayArray[$user->id]['name'] = $user->name;
                             
                            
                            $displayArray[$user->id]['Address']  = $user->Address;
                            $displayArray[$user->id]['Phone']  = $user->phone;
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
                 
                    $sheet->cells('A'.$count.':D'.$count, function($cells) {
                        $cells->setBackground('#67c54a');
                        $cells->setFontColor('#ffffff');
                    });
                  
                });
                
            })->download('xls');

            ob_flush();
            return Redirect();
            return view('report.index');
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
