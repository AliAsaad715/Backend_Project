<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Stichoza\GoogleTranslate\GoogleTranslate;

class StoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $translator = new GoogleTranslate(app()->getLocale());
        return [
            'id' => $this->id,
            'name' => $translator->translate($this->name),
            'image' => $this->image
        ];
    }
}