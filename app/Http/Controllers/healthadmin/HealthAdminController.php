<?php

namespace App\Http\Controllers;

use App\Models\Administrator;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;
use Session;
use Models\Batch as VaccineBatch;
use Models\Vaccine as Vaccine;

class HealthAdminController extends Controller
{
    /**
     * Controller for HealthCare Administrator
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        return view('users.index', ['users' => $model->paginate(15)]);
    }

    public function CreateNewBatch
}
