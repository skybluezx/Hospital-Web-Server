<?php
/**
 * Created by PhpStorm.
 * User: zhaixiao
 * Date: 2018/5/26
 * Time: 下午9:22
 */

namespace App\Http\Controllers\Patient;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class Information extends Controller {

    public function __construct() {

    }

    public function process(Request $request, $action)
    {
        if ($action === "get")
        {
            

            $patientID = $request->input('patient_id');
            $patientList = DB::select('SELECT * FROM patient WHERE patient_id=' . $patientID);

            if (count($patientList) == 1) {
                $patientInfo = $patientList[0];
                return json_encode($patientInfo);
            } else {
                return "";
            }
        }
    }
}