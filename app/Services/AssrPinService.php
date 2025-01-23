<?php

namespace App\Services;

use App\Repositories\AssrPinRepository;

class AssrPinService
{
    protected $repository;

    public function __construct(AssrPinRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getAllPins()
    {
        return $this->repository->getAll();
    }

    /**
     * Create a new pin record.
     */
    public function createPin(array $data)
    {
        return $this->repository->create($data);
    }

    /**
     * Retrieve a single pin by ID.
     */
    public function getPinById($id)
    {
        return $this->repository->findById($id);
    }

    /**
     * Update a pin record by ID.
     */
    public function updatePin($id, array $data)
    {
        return $this->repository->update($id, $data);
    }

    /**
     * Delete a pin record by ID.
     */
    public function deletePin($id)
    {
        return $this->repository->delete($id);
    }
}
