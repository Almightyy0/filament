<?php

namespace App\Filament\Resources\EmployeeResource\Pages;

use App\Filament\Resources\EmployeeResource;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\CreateRecord;

class CreateEmployee extends CreateRecord
{
    protected static string $resource = EmployeeResource::class;

    protected function getCreatedNotificationTitle(): ?string
    {
        return 'Employee Created';
    }

    protected function getCreatedNotification(): ?notification
    {
        return Notification::make()
            ->success()
            ->title('Employee Created')
            ->body('The employee has been created successfully.');
    }

}