<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JawabPermohonanResource extends JsonResource
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
            'ket_jawaban' => $this->ket_jawaban,
            'file_jawaban' => $this->file_jawaban,
            'jawab_by' => $this->jawab_by,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}
