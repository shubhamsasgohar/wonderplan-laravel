<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Kreait\Firebase\Auth as FirebaseAuth;
use Kreait\Firebase\Exception\AuthException;
use Kreait\Firebase\Exception\FirebaseException;
use Kreait\Firebase\Factory;
class UserController extends Controller
{
    protected $auth;

    public function __construct()
    {
//        $this->middleware('auth');
        // Initialize Firebase Auth with the Factory class
        dump(env('FIREBASE_CREDENTIALS'));
        dd(env('FIREBASE_PROJECT_ID'));
        $factory = (new Factory)
            ->withServiceAccount(env('FIREBASE_CREDENTIALS'))
            ->withProjectId(env('FIREBASE_PROJECT_ID'));

        $this->auth = $factory->createAuth();

    }


    // Method to list all Firebase users
    public function listUsers1()
    {

        try {
            $users = $this->auth->listUsers(); // Returns an iterable list of users
            $userList = [];
            foreach ($users as $user) {
                $userList[] = [
                    'uid' => $user->uid,
                    'email' => $user->email,
                    'displayName' => $user->displayName,
                    'createdAt' => $user->metadata->createdAt,
                ];
            }

            dd($userList);

            return view('admin.userList', ['users' => $userList]);

        } catch (FirebaseException $e) {
            dd('sfsf');
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function listUsers(Request $request)
    {
        try {
//            $offset = 0;
//            $limit = 20;
//
//            // Query Firebase for users
            $userQuery = FirebaseAuth\UserQuery::all()->withOffset(0)->withLimit(1000);
            $users = $this->auth->queryUsers($userQuery);
//            $users = $this->auth->listUsers();
//            dump($users['00iw6cRcTfYwM9C2krDSYZnf9PK2']);
//            die;
            // Convert the generator to an array to pass to the view
            $userList = [];
            foreach ($users as $user) {
                $userList[] = [
                    'uid' => $user->uid,
                    'email' => $user->email,
                    'displayName' => $user->displayName,
                    'createdAt' => $user->metadata->createdAt->format('Y-m-d H:i:s'),
                ];
            }

            // Return the view with the list of users
            return view('user.index', [
                'users' => $userList, // Pass the user data to the view
                'offset' => 0,  // Offset for pagination (if needed)
            ]);

        } catch (FirebaseException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }


    // Create a new user
    public function createUser(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        try {
            $user = $this->auth->createUser([
                'email' => $request->input('email'),
                'password' => $request->input('password'),
            ]);

            return response()->json($user, 201);
        } catch (FirebaseException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        } catch (AuthException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // Get user details by UID
    public function getUser($uid)
    {
        try {
            $user = $this->auth->getUser($uid);
            return response()->json($user, 200);
        } catch (FirebaseException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        } catch (AuthException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // Delete a user
    public function deleteUser($uid)
    {
        try {
            $this->auth->deleteUser($uid);
            return response()->json(['message' => 'User deleted successfully'], 200);
        } catch (FirebaseException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        } catch (AuthException $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    public function makeTableClass()
    {
        return 'table table-bordered table-hover';
    }
}
