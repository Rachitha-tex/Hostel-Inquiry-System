<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\CarouselImage;
use App\Models\Hostel;
use App\Models\Complain;

class AdminController extends Controller
{
    public function user(){
      $data=User::all();
        return view("admin.users",compact("data"));
    }
    public function deleteuser($id){
        $data=User::find($id);
        $data->delete();
        return redirect()->back();
      }
      public function carouselimage(){
        $data=carouselimage::all();
          return view("admin.carouselimage",compact("data"));
      }
      public function uploadcarousel(Request $request){
        $data=new CarouselImage;
        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('carouselpic',$imagename);
        $data->image=$imagename;
        $data->save();
        return redirect()->back();
    }
    public function deletecarousel($id){
      $data=CarouselImage::find($id);
      $data->delete();
      return redirect()->back();
    }



    public function hostels(){
      $data=Hostel::all();

      return view("admin.hostels",compact('data'));
    }
    public function uploadhostel(Request $request){
      $data=new Hostel;
      $image=$request->image;
      $imagename=time().'.'.$image->getClientOriginalExtension();
      $request->image->move('hostel',$imagename);
      $data->image=$imagename;

      $data->name=$request->name;
      $data->description=$request->description;
      $data->save();
      return redirect()->back();
  }
  public function deletehostel($id){
    $data=Hostel::find($id);
    $data->delete();
    return redirect()->back();
  }
  public function updatehostel($id){
    $data=Hostel::find($id);
    return view('admin.updatehostel',compact('data'));
  }
  public function update(Request $request,$id){
    $data=Hostel::find($id);
    $image=$request->image;
      $imagename=time().'.'.$image->getClientOriginalExtension();
      $request->image->move('hostel',$imagename);
      $data->image=$imagename;

      $data->name=$request->name;
      $data->description=$request->description;
      $data->save();
      return redirect()->back();
  }


  public function complain(Request $request){
    $data=new Complain;
    $data->name=$request->name;
    $data->email=$request->email;
    $data->hostelname=$request->hostelname;
    $data->floornumber=$request->floornumber;
    $data->roomnumber=$request->roomnumber;
    $data->date=$request->date;
    $data->message=$request->message;
  
    if($request->hasfile('image')){
      $file=$request->file('image');
      $extension=$file->getClientOriginalExtension();
      $filename=time().'.'.$extension;
      $file->move('uploads/student/',$filename);
      $data->image=$filename;
    }else{
      return $request;
      $data->image='';
    }

  $data->save();
  return redirect()->back();
}

public function viewcomplaints(){
  $data=Complain::all();
  return view('admin.admincompaints',compact('data'));
}

}
