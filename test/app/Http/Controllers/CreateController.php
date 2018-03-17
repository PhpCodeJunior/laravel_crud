<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Staff;
class CreateController extends Controller
{
    public function index(){
        return view("index");
    }
    public function show(){
        $staff = Staff::all();
        return view("index",["staff"=>$staff]);
    }
    public function create(Request $request){
        $this->validate($request,[
            "tittle"=>'required',
            "descriptions"=>'required'
        ]);
        $staff = new Staff();
        $staff->tittle = $request->input("tittle");
        $staff->descriptions = $request->input("descriptions");
        $staff->save();
        return redirect("/")->with("info","POST IS SAVED SUCCESSFULLY");
    }

    public function update($id){
        $staff = Staff::find($id);
        return view('pages/update',["staff"=>$staff]);

    }
    public function edit(Request $request,$id){
        $this->validate($request,[
            "tittle"=>'required',
            "descriptions"=>'required'
        ]);
        $data = array(
            "tittle" => $request->input("tittle"),
        "descriptions" =>$request->input("descriptions")
        );
        Staff::where("id",$id)->update($data);
        return redirect("/")->with("info","POST IS UPDATE SUCCESSFULLY");
    }
    public function read($id){
        $staff = Staff::find($id);
        return view("pages/read",["staff"=>$staff]);
    }
    public function delete($id){
        Staff::where("id",$id)->delete();
        return redirect("/")->with("info","RECORD DELETED");
    }
}
