<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'name' => $this->name,
            'description' => $this->details,
            'price' => $this->price,
            'discount' => $this->discount,
            'stock' => $this->stock == 0 ? 'Out of Stock' : $this->stock,
            'ratings' => $this->reviews->count() > 0 ? round($this->reviews->sum('star')/$this->reviews->count(),2) : 'No ratings', 
            'href' => [
                'review' => route('reviews.index', $this->id)
            ]
        ];
    }
}
