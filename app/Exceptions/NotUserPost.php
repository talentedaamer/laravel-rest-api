<?php

namespace App\Exceptions;

use Exception;
use Symfony\Component\HttpFoundation\Response;

class NotUserPost extends Exception
{
    public function render()
    {
        return response()->json([
            'error' => 'Post does not belog to the User.'
        ], Response::HTTP_UNAUTHORIZED );
    }
}
