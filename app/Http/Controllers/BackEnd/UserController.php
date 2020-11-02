<?php

namespace App\Http\Controllers\BackEnd;

use App\Http\Requests\BackEnd\Users\Store;
use App\Http\Requests\BackEnd\Users\Update;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class Users extends BackEndController
{
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function store(Store $request){
        $requestArray = $request->all();// Get all of the input and files for the request.convert request to an array 
        $requestArray['password'] =  Hash::make($requestArray['password']);
        $this->model->create($requestArray);

        return redirect()->route('users.index');
    }

    public function update($id , Update $request){
        $row = $this->model->FindOrFail($id);
        $requestArray = $request->all();
        if(isset($requestArray['password']) && $requestArray['password'] != ""){
            $requestArray['password'] =  Hash::make($requestArray['password']);
        }else{
            //if he doesn't update password we will delete it from array
            unset($requestArray['password']);
        }
        $row->update($requestArray);

        return redirect()->route('users.edit' , ['id' => $row->id]);
    }
}