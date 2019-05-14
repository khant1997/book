<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Category::all();
        
        return view('category.index')
        ->with('testobj', $category);
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('category.create');   //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        $Category_Name = $request->input('Category_Name');        
        $Description = $request->input('Description');        
        // DB::insert('insert into category (name) values(?)',[$name]);        
        // DB::insert('insert into category (description) values(?)',[$description]); 

        // // Create / Insert new category
        $category = new Category;
        $category->Category_Name =  $Category_Name;
        $category->Description = $Description;
        $category->save();       
        // echo "Record inserted successfully.<br/>";       
        // echo '<a href="/category/create">Click Here</a> to go back.'; 

         return redirect()->route('category'); //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category= Category::where('id',$id)->get();
        return view('category.edit',['category'=>$category]);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Category_Name = $request->input('Category_Name');
        $Description = $request->input('Description');
        
        $updated_at = date("Y-m-d H:i:s");
      

        
        $category=Category::find($id);
        $category->Category_Name= $Category_Name;
        $category->Description=$Description;
        
        $category->updated_at =$updated_at;
        $category->save();

       


        $successmessage = ' category updated successfully ...!';
        $request->session()->flash('success', $successmessage);

        return redirect()->route('category');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   $category= Category::find($id);
        $category->delete();
       
        echo "Record deleted successfully.<br/>";
        echo '<a href="/category">Click Here</a> to go back.'; //
    }
}
