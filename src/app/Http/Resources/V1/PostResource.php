<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Carbon;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "title" => $this->title,
            "CategoryName" => $this->category->title,
            //carbon - библиотека для работы с датами
            "content" => $this->when(Route::currentRouteName() == 'posts.show', $this->content),
            "created" => Carbon::parse($this->created_at)->format('d.m.Y'),
        ];
    }
}
