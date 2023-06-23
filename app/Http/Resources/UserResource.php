<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;



class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
   

    public function toArray($request)
    {
        return [
                'id' => $this->id,
                'name' => $this->name,
                'email_id' => $this->email,
                'created_at' => $this->created_at,
                'updated_at' => $this->updated_at,
        ];
    }
   /**
     * Get additional data that should be returned with the resource array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    // public function with($request)
    // {
    //     return [
    //         'meta' => [
    //             'key' => 'value',
    //         ],
    //     ];
    // }
    
}
