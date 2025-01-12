<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class CategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //перечисляем, что будет возвращено в ответе на апи
        return [
            "id" => $this->id,
            "title" => $this->title,
            //carbon - библиотека для работы с датами
            "created" => Carbon::parse($this->created_at)->format('d.m.Y'),
        ];
    }
}
