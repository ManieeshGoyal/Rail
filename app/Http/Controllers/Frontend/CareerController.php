<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\JobPosting;
use Illuminate\Http\Request;
use function redirect;
use App\Mail\Job;
use Illuminate\Support\Facades\Mail;

class CareerController extends Controller {

    public function __construct() {
        $this->viewPrefix = 'frontend.career.';
        $this->routePrefix = 'career.';
    }

    /**
     * Display a listing of the resource.
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $jobPostings = JobPosting::latest()->paginate(20);

        return view($this->viewPrefix . 'index', [
            'jobPostings' => $jobPostings,
        ]);
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
        $this->validate($request, [
            'name' => [
                'required',
            ],
            'email' => [
                'required',
            ],
            'phone' => [
                'required',
            ],
            'resume' => [
                'required',
            ],
        ]);

        $candidate = new Candidate();
        $candidate->name = $request->name;
        $candidate->email = $request->email;
        $candidate->phone = $request->phone;
        $candidate->job_posting_id = $request->job_posting_id;
        
        
        if ($request->has('resume')) {
            $file = $request->file('resume');
            $fileLoc = $file->store('/resume');
            $candidate->resume = $fileLoc;
        }
        $candidate->save();
        $dochtml = isset($candidate->resume)? '<td><a href="'.url('/storage/'.$candidate->resume).'" target="_blank">Download</a></td>':'<td>-</td>';
        
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
              <th>Resume: </th>
              '.$dochtml.'
            </tr>
          </table>
        ';
        
        $to = 'ajay.shrivas@lewebexy.com';
        $cc = ['ajay.lewebexy@gmail.com','ajay.clix@gmail.com'];

        Mail::to($to)->cc($cc)->send(new Job($statement, TRUE));
        return redirect()->back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($slug) {
        return view($this->viewPrefix . 'show', [
            'jobPosting' => JobPosting::where('slug', $slug)->firstOrFail(),
        ]);
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
