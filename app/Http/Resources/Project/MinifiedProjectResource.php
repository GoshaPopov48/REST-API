<?php

namespace App\Http\Resources\Project;

use App\Http\Resources\Language\LanguageResource;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MinifiedProjectResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'languages' => [
                'source' => new LanguageResource($this->sourceLanguage),
                'target' =>  LanguageResource::collection(
                    $this->targetLanguage())
            ],
            'performersCount' => 0,
            'documentsCount' => 0,
            'usedMachineTranslate' => $this->use_machine_translate,
            'createdAt' => Carbon::parse($this->created_at)->format('d-m-Y H:i')



        ];
    }
}
