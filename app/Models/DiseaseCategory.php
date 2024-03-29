<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class DiseaseCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'code',
        'name',
        'disease_id'
    ];

    /**
     * Get the disease associated with the DiseaseCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function disease(): HasOne
    {
        return $this->hasOne(Disease::class, 'disease_id');
    }

    /**
     * Get all of the symptom for the DiseaseCategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function symptom_disease_categories(): HasMany
    {
        return $this->hasMany(SymptomDiseaseCategory::class);
    }
}
