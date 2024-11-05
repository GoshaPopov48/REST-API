<?php

use Illuminate\Http\JsonResponse;

function responceOk(): JsonResponse
{
    return response()->json([
        'status' => 'success'
    ]);
}

function authUserId(): ?int
{
    return auth()->id();
}
