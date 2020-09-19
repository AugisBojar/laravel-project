<?php


namespace App\Services;


use App\Repositories\CoronaStatusRepository;

class CoronaStatusService
{
    private CoronaStatusRepository $coronaStatusRepositories;

    public function __construct(CoronaStatusRepository $coronaStatusRepositories)
    {
        $this->coronaStatusRepositories = $coronaStatusRepositories;
    }

    public function isCountryAffected(string $code): bool
    {
        $coronaStatus = $this->coronaStatusRepositories->findByCode($code);

        if ($coronaStatus === null) {
            return false;
        }

        return $coronaStatus->is_affected;
    }
}
