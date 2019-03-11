<?php

namespace App\Modules\Jobs\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Jobs\Repository\IJobs;

class JobsController extends Controller
{

    protected $model;

    public function __construct(IJobs $model)
    {
        //$this->middleware('auth');
        $this->model = $model;
    }

    public function getData()
    {
        
        $data = $this->model->paginate(10);
        
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

    public function store(Request $request)
    {       
        if ($this->model->create($request->all())) {
            $response = "success";
        } else {
            $response = "failed";
        }
        return response()->json($response);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->model->find($id);
        return response()->json($data);
    }
    //update
    public function update(Request $request, $id)
    {
        $data = $request->except('_token');
      
        if ($this->model->update($id, $data)) {
            $response = "success";
        } else {
            $response = "failed";
        }
        return response()->json($response);
    }

      public function show($id)
    {
        $data  = $this->model->find($id);


        return view('Jobs::show', compact('data'));
    }
    //deleting the table
    public function destroy($id)
    {
        if ($this->model->delete($id)) {
            $response = "success";
        } else {
            $response = "failed";
        }
        return response()->json($response);
    }
}
