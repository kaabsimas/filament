<?php

namespace App\Filament\Admin\Pages;

use Filament\Actions\Action;
use Filament\Pages\Page;

class Settings extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static string $view = 'filament.admin.pages.settings';

    protected function getHeaderActions(): array
    {
        return [
            Action::make("edit")
                ->url('patients/create'),
            Action::make("delete")
                ->requiresConfirmation()
                ->action(fn () => \Log::debug("FOI")),
        ];
    }
}
