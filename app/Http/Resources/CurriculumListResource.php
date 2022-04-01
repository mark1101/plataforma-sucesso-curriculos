<?php

namespace App\Http\Resources;

use App\Models\ProfessionalExperience;
use Illuminate\Http\Resources\Json\JsonResource;

class CurriculumListResource extends JsonResource
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
            'experience' => $this->getExperience($this->id),
            'schooling_level' => $this->schooling_level,
            'formation' => $this->formation, 
            'desired_salary' => $this->desired_salary,
            'city' => $this->city, 
            'state' => $this->state,
            'gender' => $this->gender, 
            'age' => $this->age, 
            'hiring_type' => $this->hiring_type, 
            'cnh' => $this->cnh,
            'is_handicapped' => $this->is_handicapped, 
            'is_employed' => $this->is_employed
        ];
    }

    public function getExperience($curriculum_id)
    {
        $experience = ProfessionalExperience::where('curriculum_id', $curriculum_id)
            ->get();
        return $experience;
    }
}
