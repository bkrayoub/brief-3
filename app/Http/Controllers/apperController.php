<?php

namespace App\Http\Controllers;

use App\Models\learner;
use Illuminate\Http\Request;

class apperController extends Controller
{
    public function select_apper(){
        $apper = learner::all();
        return view('index', compact('apper'));
    }

    public function addApper(Request $req){
        $promotion = new learner();
        $promotion->firstName = $req->firstName;
        $promotion->lastName = $req->lastName;
        $promotion->email = $req->email;
        $promotion->promo_id = $req->promo_id;
        $promotion->save();
        return redirect('');
    }

    public function editApper($id) {
        $apper = learner::find($id);
        return view('editApperPage', compact('apper'));
    }

    public function updateApper(Request $request ,$id) {
        $promotion = learner::find($id);
        $promotion->firstName = $request->input('firstName');
        $promotion->lastName = $request->input('lastName');
        $promotion->email = $request->input('email');
        $promotion->promo_id = $request->input('promo_id');
        $promotion->update();
        return redirect('');
    }

    public function deleteApper($id) {
        $apper = learner::find($id);
        $apper->delete();
        return redirect('');
    }
}
