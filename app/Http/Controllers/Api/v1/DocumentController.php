<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Document\addDocumentRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Facades\Document;

class DocumentController extends Controller
{

    public function add(addDocumentRequest $request): JsonResponse
    {
    Document::setProject($request->input('projectId'))
        ->add($request->input('documents'));

        return responceOk();
    }

}
