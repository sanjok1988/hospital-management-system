<?php

namespace App\Modules\FormTemplate\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\FormTemplate\Models\FormTemplate;

class FormTemplateController extends Controller
{
    protected $template;
    
    public function __construct(FormTemplate $template)
    {
        $this->template = $template;
    }

    public function getTemplates()
    {
        return response()->json($this->template->select('id', 'name')->get());
    }

    public function getData()
    {
        $data = $this->template->paginate(10);
        $response = [
            'pagination' => [
                'total' => $data->total(),
                'per_page' => $data->perPage(),
                'current_page' => $data->currentPage(),
                'last_page' => $data->lastPage(),
                'from' => $data->firstItem(),
                'to' => $data->lastItem()
            ],
            'data' => $data
          

        ];
        return response()->json($response);
    }

    public function create(Request $request)
    {
        $data = $request->all();
       
        
        $json = $data[0]['schema']['fields'][0];
        //  return json_encode($json);
        $name = $data[0]['name'];
        // return $temp;
       
        return $this->template->create(['json_data' =>json_encode($json), 'name'=> $name]);
    }

    public function edit(Request $request, $id)
    {
        $data = $this->template->find($id);
        return response()->json(['name'=>$data->name, 'fields'=>array(json_decode($data->json_data))]);
        
        
    }
}
