<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StudentsModel;
use App\Models\DefaultModel;
use App\Models\UsersModel;
use PDF;

Class StudentsController extends Controller
{
    public function __construct() {
        $this->StudentsModel = new StudentsModel();
        $this->DefaultModel = new DefaultModel();
        $this->UsersModel = new UsersModel();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'students' => $this->StudentsModel->allData()
        ];
        return view('admin.students.v_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'classes' => $this->DefaultModel->getData()
        ];
        return view('admin.students.v_add', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Request()->validate([
            'fk_classes' => 'required',
            'nis' => 'required|min:4|max:16|unique:tb_students,nis',
            'name' => 'required|min:5|max:100',
            'phone_number' => 'required|min:11|max:20|unique:tb_students,phone_number',
            'email_address' => 'required|min:5|max:50|unique:tb_students,email_address',
            'place_birth' => 'required|min:5|max:100',
            'gender' => 'required',
            'date_birth' => 'required',
            'address' => 'required'
        ]);
        $data = [
            'fk_classes' => Request()->fk_classes,
            'nis' => Request()->nis,
            'name' => Request()->name,
            'phone_number' => Request()->phone_number,
            'email_address' => Request()->email_address,
            'place_birth' => Request()->place_birth,
            'gender' => Request()->gender,
            'date_birth' => Request()->date_birth,
            'address' => Request()->address,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $data_users = [
            'username' => Request()->nis,
            'name' => Request()->name,
            'password' => Request()->nis,
            'level' => "Student",
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->StudentsModel->addData($data);
        $this->UsersModel->addData($data_users);
        return redirect()->route('students')->with('message', 'Successfully added data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$this->StudentsModel->detailData($id)) {
            abort(404);
        }
        $data = [
            'students' => $this->StudentsModel->detailData($id)
        ];
        return view('admin.students.v_detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$this->StudentsModel->detailData($id)) {
            abort(404);
        }
        $data = [
            'students' => $this->StudentsModel->detailData($id),
            'classes' => $this->DefaultModel->getData()
        ];
        return view('admin.students.v_edit', $data);
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
        Request()->validate([
            'fk_classes' => 'required',
            'nis' => 'required|min:4|max:16|unique:tb_students,nis,'.$id.',id_students',
            'name' => 'required|min:5|max:100',
            'phone_number' => 'required|min:11|max:20|unique:tb_students,phone_number,'.$id.',id_students',
            'email_address' => 'required|min:5|max:50|unique:tb_students,email_address,'.$id.',id_students',
            'place_birth' => 'required|min:5|max:100',
            'gender' => 'required',
            'date_birth' => 'required',
            'address' => 'required'
        ]);
        $data = [
            'fk_classes' => Request()->fk_classes,
            'nis' => Request()->nis,
            'name' => Request()->name,
            'phone_number' => Request()->phone_number,
            'email_address' => Request()->email_address,
            'place_birth' => Request()->place_birth,
            'gender' => Request()->gender,
            'date_birth' => Request()->date_birth,
            'address' => Request()->address,
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $data_users = [
            'username' => Request()->nis,
            'name' => Request()->name,
            'password' => Request()->nis,
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->StudentsModel->updateData($id, $data);
        $this->UsersModel->updateData2(Request()->old_nis, $data_users);
        return redirect()->route('students')->with('message', 'Successfully changed data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->StudentsModel->deleteData($id);
        $this->UsersModel->deleteData2($id);
        return redirect()->route('students')->with('message', 'Successfully deleted data');   
    }

    /**
     * Print a list of resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function print() {
        $data = [
            'students' => $this->StudentsModel->allData()
        ];

        $view = \View::make('admin.students.v_print', $data);
        $html_content = $view->render();

        PDF::SetAuthor('My School');
        PDF::SetTitle('Student Report');
        PDF::SetSubject('Student');
        PDF::SetKeywords('TCPDF, PDF, Student, Report');
        PDF::SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
        PDF::setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        PDF::setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
        PDF::SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
        PDF::SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        PDF::SetHeaderMargin(PDF_MARGIN_HEADER);
        PDF::SetFooterMargin(PDF_MARGIN_FOOTER);
        PDF::SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
        PDF::setImageScale(PDF_IMAGE_SCALE_RATIO);


        PDF::SetFont('helvetica', 'B', 20);
        PDF::AddPage();
        PDF::Write(0, 'Student Report', '', 0, 'C', true, 0, false, false, 0);
        PDF::SetFont('helvetica', '', 15);
        PDF::SetFont('helvetica', '', 10);

        PDF::writeHTML($html_content, true, false, true, false, '');

        $tbl2 = '<br><br><table border="0px" cellpadding="2" cellspacing="0">
        <tr style="text-align:center;" nobr="true">
        <td style="width:60%;"></td>
        <td style="width:40%;">
        Kota Malang, '.date('d F Y').'<br><br><br><br><u><b>Admin</b></u>
        </td>
        </tr>
        </table>';

        PDF::writeHTML($tbl2, true, false, false, false, '');

        PDF::Output(uniqid().'_student_report.pdf');
    }
}
