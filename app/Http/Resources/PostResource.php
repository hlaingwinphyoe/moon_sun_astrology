<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

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
            'id' => $this->id,
            'slug' => $this->slug,
            'title' => $this->title,
            'excerpt' => $this->excerpt,
            'description' => $this->description,
            'category' => $this->whenLoaded('category'),
            'user' => $this->whenLoaded('user'),
            'published_at' => $this->created_at->format('M d, Y'),
            'is_published' => $this->is_published,
            'poster' => $this->media,
        ];
    }
}
