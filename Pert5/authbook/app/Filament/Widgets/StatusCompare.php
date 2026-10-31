<?php

namespace App\Filament\Widgets;

use App\Models\Book;
use Filament\Widgets\ChartWidget;

class StatusCompare extends ChartWidget
{
    protected int | string | array $columnSpan = 'full';
    protected static ?int $sort = 1;
    protected static ?string $heading = 'Chart';
    protected static ?string $maxHeight = "300px";

    protected function getData(): array
    {
        return [
            "datasets" => [
                [
                    'label' => 'Books Status',
                    'data' => [
                        Book::where('status', 'available')->count(),
                        Book::where('status', 'borrowed')->count()
                    ],
                    'backgroundColor' => ['#10b981', '#ef4444'],
                ],
            ],
            'labels' => ['Avilable', "Borrowed"]
        ];
    }

    protected function getType(): string
    {
        return 'doughnut';
    }
}
