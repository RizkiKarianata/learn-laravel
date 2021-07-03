<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LessonsModel;
use PDF;

class LessonsController extends Controller
{
    public function __construct() {
        $this->LessonsModel = new LessonsModel();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'lessons' => $this->LessonsModel->allData()
        ];
        return view('admin.lessons.v_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lessons.v_add');
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
            'name' => 'required|min:5|max:100'
        ]);
        $data = [
            'name' => Request()->name,
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->LessonsModel->addData($data);
        return redirect()->route('lessons')->with('message', 'Successfully added data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(!$this->LessonsModel->detailData($id)) {
            abort(404);
        }
        $data = [
            'lessons' => $this->LessonsModel->detailData($id)
        ];
        return view('admin.lessons.v_detail', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$this->LessonsModel->detailData($id)) {
            abort(404);
        }
        $data = [
            'lessons' => $this->LessonsModel->detailData($id)
        ];
        return view('admin.lessons.v_edit', $data);
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
            'name' => 'required|min:5|max:100'
        ]);
        $data = [
            'name' => Request()->name,
            'updated_at' => date('Y-m-d H:i:s')
        ];
        $this->LessonsModel->updateData($id, $data);
        return redirect()->route('lessons')->with('message', 'Successfully changed data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->LessonsModel->deleteData($id);
        return redirect()->route('lessons')->with('message', 'Successfully deleted data');   
    }

    /**
     * Print a list of resources.
     *
     * @return \Illuminate\Http\Response
     */
    public function print() {
        $data = [
            'lessons' => $this->LessonsModel->allData()
        ];

        $view = \View::make('admin.lessons.v_print', $data);
        $html_content = $view->render();

        PDF::SetAuthor('My School');
        PDF::SetTitle('Lesson Report');
        PDF::SetSubject('Lesson');
        PDF::SetKeywords('TCPDF, PDF, Lesson, Report');
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
        PDF::Write(0, 'Lesson Report', '', 0, 'C', true, 0, false, false, 0);
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

        PDF::Output(uniqid().'_lesson_report.pdf');
    }
}
