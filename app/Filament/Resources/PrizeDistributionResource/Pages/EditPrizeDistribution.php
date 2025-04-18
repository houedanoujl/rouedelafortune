<?php

namespace App\Filament\Resources\PrizeDistributionResource\Pages;

use App\Filament\Resources\PrizeDistributionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPrizeDistribution extends EditRecord
{
    protected static string $resource = PrizeDistributionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
