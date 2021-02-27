<?php

namespace App\Http\Controllers\CandidateApi;

use Validator;
use App\Models\Candidate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BaseController;

// use Auth;

class AuthController extends BaseController
{
    /**
     * Register api
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|string|email|max:255|unique:candidates',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);
   
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
   
        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = Candidate::create($input);
        $success['token'] =  $user->createToken('MyApp')->accessToken;
        $success['name'] =  $user->name;
   
        return $this->sendResponse($success, 'User register successfully.');
    }
   
    /**
     * Login api
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all()]);
        }

        $credentials = ['email' => $request->email, 'password' => $request->password];

        if (auth()->guard('candidate')->attempt($credentials)) {
            config(['auth.guards.api.provider' => 'candidate']);
            
            $user = auth('candidate')->user();
            $success['token'] =  $user->createToken('MyApp')-> accessToken;
            $success['name'] =  $user->name;

            return $this->sendResponse($success, 'User login successfully.');
        } else {
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }
    }

    /**
     * Candidate info api
     *
     * @return void
     */
    public function getCandidateInfo()
    {
        $candidate = auth('api-candidate')->user();

        return $this->sendResponse($candidate, 'Candidate info');
    }
}
