<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Contact;

use Excel;

use Session;


class ContactController extends Controller
{

  public function __construct()
  {
      // $this->middleware('auth');
      $this->middleware('auth', ['except' => [
            'store',
        ]]);
  }

    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contacts = Contact::all();
        return view('admin.contact.index')->with('contacts',$contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
      $contact = new Contact;
      $contact->name = $request->name;
      $contact->email = $request->email;
      $contact->phone = $request->phone;
      $contact->message = $request->message;
      $contact->save();

      return back()->with('success','Message Sent Successfully');;

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $contact = Contact::find($id);
      return view('admin.contact.show')->with('contact',$contact);
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

      return redirect()->route('admin.index')->with('success','Item Updated successfully');
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
      return redirect()->route('admin.index')->with('success','Item Deleted successfully');;

    }


    public function downloadExcel($type)
    {

      $contact = Contact::get()->toArray();

      return Excel::create('contact_messages', function($excel) use ($contact) {

        $excel->sheet('mySheet', function($sheet) use ($contact)

            {

          $sheet->fromArray($contact);

            });

      })->download($type);

    }

    public function getAdmin(){
      return view('admin.index');
    }
}
