<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use PhpParser\Node\Stmt\TryCatch;
use Illuminate\Support\Facades\Session;

class ApiController extends Controller
{
    public function users(Request $request): JsonResponse
    {
        try {

            // geting the api perams for fillterations of data...
            $id     = $request->input('id');
            $email  = $request->input('email');
            $phone  = $request->input('phone');
            $status = $request->input('status');

            //making the query for fetching the records from db...
            $users  = User::orderBy('id', 'DESC');
            if ($id) {
                $users->where('id', $id);
            }

            if ($email) {
                $users->where('email', $email);
            }

            if ($phone) {
                $users->where('phone', $phone);
            }

            if ($status) {
                $users->where('status', $status);
            }
            $users = $users->get();

            // returning the responce to the request ...
            if ($users->isEmpty()) {
                return response()->json(['status' => 'empty', 'message' => 'No user found created yet!', 'data' => NULL, 404]);
            } else {
                $user = User::first();
                $token = $user->createToken('my_token')->plainTextToken;
                session(['bearer_token' => $token]);
                return response()->json(['status' => 'sccuess', 'message' => 'Users retrived successfully', 'token' => $token, 'data' => $users]);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error in retriving users', 'error' => $e->getMessage()], 505);
        }
    }

    public function storeUser(Request $request): JsonResponse
    {
        try {
            // storing user in db...
            $user = User::updateOrInsert(
                ['id' => $request->id],
                $request->all(),
            );
            if ($user) {
                return response()->json(['status' => 'sccuess', 'message' => 'Users added successfully',  'data' => $user]);
            }
        } catch (\Exception $e) {
            return response()->json(['status' => 'error', 'message' => 'Error in retriving users', 'error' => $e->getMessage()], 505);
        }
    }
}
