<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DataPermohonanResource extends JsonResource
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
            'id_ppid_pendaftar' => $this->id_ppid_pendaftar,
            'ticket_permohonan' => $this->ticket_permohonan,
            'jenis_kanal' => $this->jenis_kanal,
            'informasi_diminta' => $this->informasi_diminta,
            'tujuan_informasi' => $this->tujuan_informasi,
            'id_cara' => $this->id_cara,
            'id_mendapatkan' => $this->id_mendapatkan,
            'file_identitas' => $this->file_identitas,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
        ];
    }
}
