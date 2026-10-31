<?php

namespace App\Filament\Pages;

use Filament\Pages\Dashboard as BaseDashboard;
use Override;

class Dashboard extends BaseDashboard
{
    protected int | string | array $columnSpan = "full";

    #[Override]
    public function getColumns(): int|string|array
    {
        return 2;
    }
}
