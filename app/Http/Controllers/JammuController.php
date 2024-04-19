<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jammu;
use Illuminate\Support\Facades\DB;
use App\Models\JammuModule;
use  PDF;

use Illuminate\Http\Response;


class JammuController extends Controller
{
    public function index(Request $request)
    {
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        $data['vendors'] = DB::table('vendors')->get();

        return view('jammu.add-jk-registration', $data);
    }
    public function create(Request $request)
    {
        $jammu = new Jammu();
        $jammu->lot_no = $request->lot_no;
        $jammu->f_customer_no = $request->f_customer_no;
        $jammu->f_app_no = $request->f_app_no;
        $jammu->f_farmer_name = $request->f_farmer_name;
        $jammu->f_father_name = $request->f_father_name;
        $jammu->f_pin = $request->f_pin;
        $jammu->p_pump_capacity = $request->p_pump_capacity;
        $jammu->p_pump_type = $request->p_pump_type;
        $jammu->p_pump_subtype = $request->p_pump_subtype;
        $jammu->p_pump_head = $request->p_pump_head;
        $jammu->c_contractor_name = $request->c_contractor_name;
        $jammu->c_firm = $request->c_firm;
        $jammu->c_contact = $request->c_contact;
        $jammu->c_email = $request->email;
        $jammu->s_survey_done = $request->s_survey_done;
        $jammu->s_latitude = $request->s_latitude;
        $jammu->s_longitude = $request->s_longitude;
        $jammu->s_recieved = $request->s_recieved;
        $jammu->s_date = $request->s_date;
        $jammu->m_pump = $request->m_pump;
        $jammu->m_structure = $request->m_structure;
        $jammu->m_modules = $request->m_modules;
        $jammu->m_bos = $request->m_bos;
        $jammu->m_date = $request->m_date;
        $jammu->jcr_found = $request->jcr_found;
        $jammu->jcr_found_date = $request->jcr_found_date;
        $jammu->jcr_structure = $request->jcr_structure;
        $jammu->jcr_structure_date = $request->jcr_structure_date;
        $jammu->jcr_module = $request->jcr_module;
        $jammu->jcr_module_date = $request->jcr_module_date;
        $jammu->jcr_pump = $request->jcr_pump;
        $jammu->jcr_pump_date = $request->jcr_pump_date;
        $jammu->jcr_hoc = $request->jcr_hoc;
        $jammu->jcr_hoc_date = $request->jcr_hoc_date;
        $jammu->jcr_photo = $request->jcr_photo;
        $jammu->jcr_photo_date = $request->jcr_photo_date;
        $jammu->f_file_submit = $request->f_file_submit;
        $jammu->f_file_submit_date = $request->f_file_submit_date;
        $jammu->f_inspect = $request->f_inspect;
        $jammu->f_inspect_date = $request->f_inspect_date;
        $jammu->klk_pay_90 = $request->klk_pay_90;
        $jammu->klk_pay_90_date = $request->klk_pay_90_date;
        $jammu->klk_pay_10 = $request->klk_pay_10;
        $jammu->klk_pay_10_date = $request->klk_pay_10_date;
        $jammu->contractor_pay = $request->contractor_pay;
        $jammu->contractor_pay_date = $request->contractor_pay_date;
        $jammu->mt_pump_no = $request->mt_pump_no;
        $jammu->mt_motor_no = $request->mt_motor_no;
        $jammu->mt_controller_no = $request->mt_controller_no;
        $jammu->mt_rmsid = $request->mt_rmsid;
        $jammu->mt_imei = $request->mt_imei;
        $jammu->jcr_insurance = $request->jcr_insurance;
        $jammu->jcr_insurance_date = $request->jcr_insurance_date;
        $jammu->mt_module_watt = $request->mt_module_watt;
        $jammu->monitering = $request->monitering;
        $jammu->benifiecery = $request->benifiecery;
        $jammu->save();
        if ($jammu) {
            if ($request->has('modules') && is_array($request->modules)) {
                foreach ($request->modules as $key => $value) {
                    $modules = [
                        'sr_no' => $request->modules[$key],

                    ];
                    $jammu->jammuModulee()->create($modules);
                }
            }
            return redirect()->back()->with('status', 'Data Saved Successfully !!!');
        }
    }
    public function view_jk(Request $request)
    {
        $data['jks'] = Jammu::with('jammuModulee')->get();
        $data['role'] = $request->session()->get('role');
        $data['state'] = $request->session()->get('state');
        return view('jammu.view-Jk-registration', $data);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function edit(Request $request, $id)
    {
        $data['jk'] = Jammu::find($id);

        return view('jammu.update-jk-registration', $data);
    }

    public function update_jk(Request $request)
    {
        $id = $request->jid;
        $jammu = Jammu::findOrFail($id);
        $jammu->lot_no = $request->lot_no;
        $jammu->f_customer_no = $request->f_customer_no;
        $jammu->f_app_no = $request->f_app_no;
        $jammu->f_farmer_name = $request->f_farmer_name;
        $jammu->f_father_name = $request->f_father_name;
        $jammu->f_pin = $request->f_pin;
        $jammu->p_pump_capacity = $request->p_pump_capacity;
        $jammu->p_pump_type = $request->p_pump_type;
        $jammu->p_pump_subtype = $request->p_pump_subtype;
        $jammu->p_pump_head = $request->p_pump_head;
        $jammu->c_contractor_name = $request->c_contractor_name;
        $jammu->c_firm = $request->c_firm;
        $jammu->c_contact = $request->c_contact;
        $jammu->c_email = $request->email;
        $jammu->s_survey_done = $request->s_survey_done;
        $jammu->s_latitude = $request->s_latitude;
        $jammu->s_longitude = $request->s_longitude;
        $jammu->s_recieved = $request->s_recieved;
        $jammu->s_date = $request->s_date;
        $jammu->m_pump = $request->m_pump;
        $jammu->m_structure = $request->m_structure;
        $jammu->m_modules = $request->m_modules;
        $jammu->m_bos = $request->m_bos;
        $jammu->m_date = $request->m_date;
        $jammu->jcr_found = $request->jcr_found;
        $jammu->jcr_found_date = $request->jcr_found_date;
        $jammu->jcr_structure = $request->jcr_structure;
        $jammu->jcr_structure_date = $request->jcr_structure_date;
        $jammu->jcr_module = $request->jcr_module;
        $jammu->jcr_module_date = $request->jcr_module_date;
        $jammu->jcr_pump = $request->jcr_pump;
        $jammu->jcr_pump_date = $request->jcr_pump_date;
        $jammu->jcr_hoc = $request->jcr_hoc;
        $jammu->jcr_hoc_date = $request->jcr_hoc_date;
        $jammu->jcr_photo = $request->jcr_photo;
        $jammu->jcr_photo_date = $request->jcr_photo_date;
        $jammu->f_file_submit = $request->f_file_submit;
        $jammu->f_file_submit_date = $request->f_file_submit_date;
        $jammu->f_inspect = $request->f_inspect;
        $jammu->f_inspect_date = $request->f_inspect_date;
        $jammu->klk_pay_90 = $request->klk_pay_90;
        $jammu->klk_pay_90_date = $request->klk_pay_90_date;
        $jammu->klk_pay_10 = $request->klk_pay_10;
        $jammu->klk_pay_10_date = $request->klk_pay_10_date;
        $jammu->contractor_pay = $request->contractor_pay;
        $jammu->contractor_pay_date = $request->contractor_pay_date;
        $jammu->mt_pump_no = $request->mt_pump_no;
        $jammu->mt_motor_no = $request->mt_motor_no;
        $jammu->mt_controller_no = $request->mt_controller_no;
        $jammu->mt_rmsid = $request->mt_rmsid;
        $jammu->mt_imei = $request->mt_imei;
        $jammu->jcr_insurance = $request->jcr_insurance;
        $jammu->jcr_insurance_date = $request->jcr_insurance_date;
        $jammu->mt_module_watt = $request->mt_module_watt;
        $jammu->monitering = $request->monitering;
        $jammu->benifiecery = $request->benifiecery;
        $jammu->save();


        if ($jammu) {
            $jammu->jammuModulee()->delete();

            if ($request->has('modules') && is_array($request->modules)) {
                foreach ($request->modules as $moduleId => $moduleValue) {
                    $module = JammuModule::find($moduleId);
                    if ($module) {
                        $module->update(['sr_no' => $moduleValue]);
                    } else {
                        $jammu->jammuModulee()->create(['sr_no' => $moduleValue]);
                    }
                }
            }
            return redirect()->back()->with('status', 'Jammu updated successfully!');
        }
    }

    public function destroy($id)
    {
        $site = Jammu::find($id);
        $site->delete();
        return redirect(route("view-site-survey"))->with('status', 'Site  Survey  Data Deleted Successfully!!');
    }
    public function getModules(Request $request)
    {
        $id = $request->jammu_id;
        $modules = JammuModule::where('jammu_id', $id)->pluck('sr_no')->toArray();
        return response()->json(['jammu_id' => $id, 'modules' => $modules]);
    }

    public function getVendorDetails(Request $request)
    {
        $name = $request->vid;

        $details = DB::table('vendors')
            ->select('email', 'mobile', 'firm')
            ->where('name', $name)
            ->first();

        return response()->json([
            'email' => $details->email,
            'mobile' => $details->mobile,
            'firm' => $details->firm,
        ]);
    }



    public function print(Request $request, $id)
    {

        $jammus = DB::table('jammus')->where('id', $id)->get();

        $data = [

            'jammus' => $jammus,
        ];

        // Generate the PDF
        $pdf = PDF::loadView('jammu.pdf', $data);

        // Return PDF as response
        return new Response($pdf->output(), 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'inline; filename="hoC.pdf"',
        ]);
    }
}
