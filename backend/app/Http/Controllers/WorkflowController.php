<?php

namespace App\Http\Controllers;

use App\Models\Workflow;
use Illuminate\Http\Request;

class WorkflowController extends Controller
{
    public function index()
    {
        return Workflow::all();
    }

    public function store(Request $request)
    {
        return Workflow::create($request->validate([
            'name' => 'required|string',
            'stages' => 'required|array'
        ]));
    }
}

use App\Http\Requests\WorkflowRequest;

public function store(WorkflowRequest $request)
{
    return Workflow::create($request->validated());
}