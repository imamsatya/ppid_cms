<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RejectPermohonanResource extends JsonResource
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
            'id_template_reject' => $this->id_template_reject,
            'file' => $this->file,
            'rejected_by' => $this->rejected_by,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}
