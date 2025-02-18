<?php

namespace App\Filament\Resources\PatientResource\Pages;

use App\Filament\Resources\PatientResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;
use Filament\Infolists;
use Filament\Infolists\Infolist;

class ViewPatient extends ViewRecord
{
    protected static string $resource = PatientResource::class;

    protected function getActions(): array
    {
        return [];
    }
   
}
