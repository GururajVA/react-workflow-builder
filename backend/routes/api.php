<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkflowController;

Route::apiResource('workflows', WorkflowController::class);