<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TeachersModel;
use PDF;

Class TeachersController extends Controller
{
    public function __construct() {
        $this->TeachersModel = new TeachersModel();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'teachers' => $this->TeachersModel->allData()
        ];
        return view('admin.teachers.v_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.teachers.v_add');
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
            'nip' => 'required|min:12|max:16|unique:tb_teachers,nip',
            'name' => 'required|min:3|max:100|unique:tb_teachers,phone_number',
            'phone_number' => 'required|min:11|max:13',
            'place_birth' => 'required|min:5|max:100',
            'gender' => 'required',
            'date_birth' => 'required',
            'address' => 'required'
        ]);
        $data = [
            'nip' => Request()->nip,
            'name' => Request()->name,
            'phone_number' => Request()->phone_number,
            'place_birth' => Request()->place_birth,
            'gender' => Request()->gender,
            'date_birth' => Request()->date_birth,
            'address' => Request()->address,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->TeachersModel->addData($data);
        return redirect()->route('teachers')->with('message', 'Successfully added data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$this->TeachersModel->detailData($id)) {
            abort(404);
        }
        $data = [
            'teachers' => $this->TeachersModel->detailData($id)
        ];
        return view('admin.teachers.v_detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$this->TeachersModel->detailData($id)) {
            abort(404);
        }
        $data = [
            'teachers' => $this->TeachersModel->detailData($id)
        ];
        return view('admin.teachers.v_edit', $data);
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
            'nip' => 'required|min:12|max:16|unique:tb_teachers,nip,'.$id.',id_teachers',
            'name' => 'required|min:3|max:100|unique:tb_teachers,phone_number,'.$id.',id_teachers',
            'phone_number' => 'required|min:11|max:13',
            'place_birth' => 'required|min:5|max:100',
            'gender' => 'required',
            'date_birth' => 'required',
            'address' => 'required'
        ]);
        $data = [
            'nip' => Request()->nip,
            'name' => Request()->name,
            'phone_number' => Request()->phone_number,
            'place_birth' => Request()->place_birth,
            'gender' => Request()->gender,
            'date_birth' => Request()->date_birth,
            'address' => Request()->address,
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->TeachersModel->updateData($id, $data);
        return redirect()->route('teachers')->with('message', 'Successfully changed data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->TeachersModel->deleteData($id);
        return redirect()->route('teachers')->with('message', 'Successfully deleted data');   
    }

    /**
     * Print a list of resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function print() {
        $data = [
            'teachers' => $this->TeachersModel->allData()
        ];

        $view = \View::make('admin.teachers.v_print', $data);
        $html_content = $view->render();

        PDF::SetAuthor('My School');
        PDF::SetTitle('Teacher Report');
        PDF::SetSubject('Teacher');
        PDF::SetKeywords('TCPDF, PDF, Teacher, Report');
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
        PDF::Write(0, 'Teacher Report', '', 0, 'C', true, 0, false, false, 0);
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

        PDF::Output(uniqid().'_teacher_report.pdf');
    }
}
