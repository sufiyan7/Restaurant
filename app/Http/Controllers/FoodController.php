<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Food;
use Session;

class FoodController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      //
      $foods = Food::all();
      return view('admin.food.index')->with('foods',$foods);
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      //
      return view('admin.food.create');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //store the data
    $food = new Food;
    $food->title = $request->title;
    $food->price = $request->price;
    $food->save();
    return redirect()->route('admin.food.index')->with('success','Item created successfully');


  }

  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {

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
      $food = Food::find($id);
      return view('admin.food.edit')->with('food',$food);
      // return view('admin.food.edit',compact('food'));
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
    //store the data

    $food = Food::find($id);
    $food->title = $request->input('title');
    $food->price = $request->input('price');
    $food->save();

    return redirect()->route('admin.food.index')->with('success','Item Updated successfully');
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    $food = Food::find($id);
    $food->delete();
    return redirect()->route('admin.food.index')->with('success','Item Deleted successfully');;

  }
}
