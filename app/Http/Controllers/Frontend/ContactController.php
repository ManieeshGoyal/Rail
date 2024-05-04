<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use function redirect;
use App\Mail\Contactus;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {

    public function __construct() {
        $this->viewPrefix = 'frontend.contact.';
        $this->routePrefix = 'contact.';
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view($this->viewPrefix . 'index');
    }

    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => [
                'required',
                'string',
            ],
            'email' => [
                'required',
                'email',
            ],
            'message' => [
                'required',
            ],
            'quote' => [
                'required',
            ],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'errors' => $validator->errors(),
            ]);
        }

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->phone = $request->phone;
        $contact->quote = $request->quote;
        
        if ($request->has('attachments')) {
            $file = $request->file('attachments');
            $fileLoc = $file->store('/attachments');
            $contact->attachments = $fileLoc;
        }

        if ($request->has('attachments2')) {
            $file = $request->file('attachments2');
            $fileLoc = $file->store('/attachments');
            $contact->attachments = $fileLoc;
        }
        $contact->save();
        
        $dochtml = isset($contact->attachments)? '<td><a href="'.url('/storage/'.$contact->attachments).'" target="_blank">Download</a></td>':'<td>-</td>';
        
        // Message
        $statement = '
          <table border="0" style>
            <tr>
              <th>Candidate: </th>
              <td>'.$request->name.'</td>
            </tr>
            <tr>
              <th>Phone: </th>
              <td>'.$request->phone.'</td>
            </tr>
            <tr>
              <th>Email: </th>
              <td>'.$request->email.'</td>
            </tr>
            <tr>
              <th>Message: </th>
              <td>'.$request->message.'</td>
            </tr>
            <tr>
              <th>Document: </th>
              '.$dochtml.'
            </tr>
          </table>
        ';
        
        $to = 'ajay.shrivas@lewebexy.com';
        if($request->quote=='City Compost'){
            $to = 'ajay.lewebexy@gmail.com';
        }else if($request->quote=='Open Power Tariff'){
            $to = 'ajay.clix@gmail.com';
        }else{
            $to = 'ajay.shrivas7@gmail.com';
        }
        $cc = 'hello@lewebexy.com';
        $to = 'abha.gahlot@lewebexy.com';
        $cc = 'ajay.lewebexy@gmail.com';
        Mail::to($to)->cc($cc)->send(new Contactus($statement, TRUE));
        
        return response()->json(['suucess' => 'Thank you, Form Submited Successfully!!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
}
