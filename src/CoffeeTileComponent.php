<?php

namespace Spatie\CoffeeTile;

use Illuminate\Support\Collection;
use Livewire\Component;
use Spatie\CoffeeTile\Models\Coffee;

class CoffeeTileComponent extends Component
{
    /** @var string */
    public $position;

    /** @var int */
    public $totalOffset;

    public function mount(string $position, int $totalOffset = 19_520)
    {
        $this->position = $position;
        $this->totalOffset = $totalOffset;
    }

    public function render()
    {
        $days = $this->getCoffeesPerDay();

        return view('dashboard-coffee-tile::tile', [
            'today' => Coffee::query()->whereDate('created_at', today())->count(),
            'thisWeek' => Coffee::query()
                ->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])
                ->count(),
            'total' => Coffee::query()->count() + $this->totalOffset,
            'days' => $days,
            'daysMax' => $days->max(),
        ]);
    }

    /** @return array<int,int>|Collection */
    protected function getCoffeesPerDay(): Collection
    {
        $dayCounts = Coffee::query()
            ->selectRaw('count(*) as count, date(created_at) as date')
            ->whereDate('created_at', '>=', now()->subDays(14))
            ->groupBy('date')
            ->get()
            ->pluck('count', 'date');

        return collect(range(13, 0))
            ->map(fn (int $day) => now()->subDays($day)->format('Y-m-d'))
            ->map(fn (string $date) => $dayCounts[$date] ?? 0);
    }
}
