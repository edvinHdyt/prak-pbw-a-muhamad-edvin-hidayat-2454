<?php

namespace App\Filament\Widgets;

use App\Models\Book;
use App\Models\Books;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TotalBooks extends BaseWidget
{
    protected static ?int $sort = -1;
    protected static ?string $maxWidth="100%";
    protected int | string | array $columnStart = [1];

    protected static bool $isLazy = false;

    protected function getStats(): array
    {
        return [
            Stat::make('Total Books', Book::count())
                ->description('Total buku yang terdaftar')
        ];
    }
}
