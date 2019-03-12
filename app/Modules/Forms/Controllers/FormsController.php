<?php

namespace App\Modules\Forms\Controllers;

use Illuminate\Http\Request;
use App\Modules\Forms\Models\Forms;
use App\Http\Controllers\Controller;

class FormsController extends Controller
{
    private $page = "form";
    public function __construct(Forms $forms){
        $this->forms = $forms;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function questionList()
    {
        $page = "questionnaire";
        $data = $this->forms->paginate(10);
        return view("Forms::index", compact('page','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createQuestionnaire()
    {
        $page = "questionnaire";
        $action = "create";
        return view('Forms::create_questionnaire', compact('page','action'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeQuestionnaire(Request $request)
    {
        $data = $request->only('question','ques_type');
        if($request->has('id')){
            $find = $this->forms->find($id);
            $find->update($data);
        }else{
            $this->forms->create($data);
        }
        
        return redirect(route('questionnaire.create'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editQuestionnaire($id)
    {
        $page = "questionnaire";
        $action = "edit";
        $data = $this->forms->find($id);
        return view('Forms::create_questionnaire', compact('page','action','data'));
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
