<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ForwardPermohonanResource extends JsonResource
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
            'id_ppid_permohonan' => $this->id_ppid_permohonan,
            'forward_by' => $this->forward_by,
            'forward_to' => $this->forward_to,
            'keterangan' => $this->keterangan,
            'nota_dinas' => $this->nota_dinas,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}
