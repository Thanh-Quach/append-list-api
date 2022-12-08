<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Billings;


class BillingsController extends Controller
{
    public function index(Request $request, $userId)
    {
        //list all current user billing
        $billings = Billings::find(
            ['UserId' => $userId],
            ['projection' => [
                'UserId' => 1, 
                "ProjectName" => 1 ,
                "Total" => 1, 
                "Paid" => 1,
                "Outstanding" => 1
            ]]
        );

        if ($billings!==null){
            return response()->json([
                'Message'=>'Success',
                'data' => $billings,
            ], 200);
        }else{
            return response()-> json([
                'message'=>"null"
            ], 404);
        }
    }


    public function BillDetail(Request $request, $id)
    {
        //get a specific bill detail
        $bill = Billings::find($id);
        if ($bill!==null){
            return response()->json([
                'Message'=>'Success',
                'BillDetail' => $bill,
            ], 200);
        }else{
            return response()-> json([
                'message'=>"null"
            ], 404);
        }
    }
    
}
