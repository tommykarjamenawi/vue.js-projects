<?php

namespace Controllers;

use Exception;
use Services\UserService;
use Firebase\JWT\JWT;
use FireBase\JWT\Key;


class UserController extends Controller
{
    private $service;

    // initialize services
    function __construct()
    {
        $this->service = new UserService();
    }

    public function login() {
        $postedUser = $this->createObjectFromPostedJson('Models\User');
        $user = $this->service->checkUsernamePassword($postedUser->username, $postedUser->password);
        if (!$user) {
            $this->respondWithError(403, 'Invalid username or password');
            return;
        }

        $data = [
            'username' => $user->username,
            "email" => $user->email
        ];
        $issuer = "http://localhost";
        $audiance = "http://localhost";
        $issuedAt = time();
        $notBefore = $issuedAt + 10;
        $expires = $notBefore + 3600;
        $payload = [
            "iss" => $issuer,
            "aud" => $audiance,
            "iat" => $issuedAt,
            "nbf" => $notBefore,
            "exp" => $expires,
            "data" => $data
        ];
         $jwt = JWT::encode($payload, getenv("SECRET", "HS256"));

         $response = [
             "message" => "Login successful",
             "timestamp" => $issuedAt,
             "JWT" => $jwt,
             "key" => getenv("SECRET")
         ];
    }
}