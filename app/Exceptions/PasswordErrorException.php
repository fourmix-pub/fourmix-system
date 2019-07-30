<?php


namespace App\Exceptions;


class PasswordErrorException extends \Exception
{
    public function render($request)
    {
        return response()->json([
            'message' => 'PasswordErrorException',
            'errors' => [
                'old_password' => [
                    '現在のパスワードが誤っています'
                ]
            ]
        ], 422);
    }
}