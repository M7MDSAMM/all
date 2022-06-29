<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $data = Category::all();
        $data = Category::get();
        foreach ($data as $category){
            echo "$category->id - Name : $category->name" .'/br';
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Query Builder
        // $status = DB::table('categories')->insert([
        //     'category_name' => 'test_1',
        //     'category_info' => 'test_test_test_test',
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);


        //ELEQUENT
        // $status = $category = new Category();
        // $category->category_name = 'Cars';
        // $category->category_info = 'Cars Info';
        // $category->category_visible = true;
        // $category->save();

        // echo $status ? 'Created Sucess' : 'Failed';

        //Native Sql
        // $status = DB::insert(
        //     'insert into categories (category_name, category_info, category_visible) values (?, ?, ?)', ['phones', 'phones info', true]
        // );

        // echo $status ? 'Created Sucess' : 'Failed';
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
