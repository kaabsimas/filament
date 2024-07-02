<?php

namespace App\Filament\Admin\Resources\PatientResource\Pages;

use App\Filament\Admin\Resources\PatientResource;
use App\Models\Patient;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;

class EditPatient extends EditRecord
{
    protected static string $resource = PatientResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Action::make('To Upper Case Name')
                ->action(function (Patient $patient) {
                    $patient->name = strtoupper($patient->name);
                    $patient->save();

                    $this->refreshFormData([
                        'name'
                    ]);
                })
        ];
    }
}
