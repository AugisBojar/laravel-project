<?php


namespace App\Repositories;


use App\Models\CoronaStatus;

class CoronaStatusRepository
{
    public function findByCode(string $code): ?CoronaStatus
    {
        return CoronaStatus::where('code', '=', $code)
            ->first();
    }
}
