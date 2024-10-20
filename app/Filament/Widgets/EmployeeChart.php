<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;

class EmployeeChart extends ChartWidget
{
    protected static ?string $heading = 'Employee Cart';

    protected static ?int $sort = 3;

    protected static string $color = 'success';

    protected function getData(): array
    {
        return [
            'datasets' => [
                [
                    'label' => 'Blog posts created',
                    'data' => [1000, 910, 875, 762, 321, 432, 345, 574, 665, 545, 577, 689],
                ],
            ],
            'labels' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
            
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
