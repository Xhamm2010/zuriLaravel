<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Student::get();
       
        return view('users',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createUsers()
    {
       return view('addusers');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeUsers(Request $request)
    {
       $request->validate(
        [
            'name' => 'required',
            'email' => 'required | email',
            'phone' => 'required',
        ]
        );
       $name = $request->input('name');
       $email = $request->input('email');
       $phone = $request->input('phone');

       $data = new Student();
       $data->name = $name;
       $data->email = $email;
       $data->phone = $phone;
       $data->save();
       return redirect()->back()->with('success','Student Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function editUsers(Student $student, $id)
    {
        $data = Student::where('id',$id)->first();
        return view('editusers',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function updateUsers(Request $request, Student $student)
    {
        $request->validate(
            [
               'name' => 'required',
               'email' => 'required | email',
               'phone' => 'required', 
            ]
            );
            $id = $request->id;
            $name = $request->name;
            $email = $request->email;
            $phone = $request->phone;
            Student::where('id',$id)->update(
                [
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                ]
            );
            return redirect()->back()->with('success','User Updated Sucessfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user  $user
     * @return \Illuminate\Http\Response
     */
    public function destroyUsers(Student $student,$id)
    {
     Student::where('id',$id)->delete();
     return redirect()->back()->with('success', 'User Deleted Successfully');
    }
}
