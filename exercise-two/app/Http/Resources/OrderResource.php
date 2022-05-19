<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OrderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        return [
            'CustomerId'=>$this->CustomerId,
            'EmployeeId'=>$this->EmployeeId,
            'OrderDate'=>$this->OrderDate,
            'RequiredDate'=>$this->RequiredDate,
            'ShippedDate'=>$this->ShippedDate,
            'ShipVia'=>$this->ShipVia,
            'Freight'=>$this->Freight,
            'ShipName'=>$this->ShipName,
            'ShipAddress'=>$this->ShipAddress,
            'ShipCity'=>$this->ShipCity,
            'ShipRegion'=>$this->ShipRegion,
            'ShipPostalCode'=>$this->ShipPostalCode,
            'ShipCountry'=>$this->ShipCountry,
            'order_details'=>$this->order_details,
        ];
    }
}
