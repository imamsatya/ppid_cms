<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class InformasiSertaMertaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'judul_informasi' => $this->judul_informasi,
            'url' => $this->url,
            'file_path' => $this->file_path,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}
