<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class IndikatorChart extends ChartWidget
{
    protected static ?string $heading = 'Chart';
    
    public ?string $filter = 'today';

    protected static ?int $sort = 2;

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Blog posts created',
                    'data' => [0, 10, 5, 2, 21, 32, 45, 74, 65, 45, 77, 89],
                    'backgroundColor' => 'Orange',
                    'borderColor' => 'Orange',
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        ];
    }

    protected function getFilters(): ?array
{
    return [
        'today' => 'Today',
        'week' => 'Last week',
        'month' => 'Last month',
        'year' => 'This year',
    ];
}
    protected function getType(): string
    {
        return 'line';
    }
}
