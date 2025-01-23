<?php

namespace App\Repositories;

use App\Models\AssrPin;

class AssrPinRepository
{
    /**
     * Get all pins.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getAll()
    {
        return AssrPin::all();
    }

    /**
     * Create a new record.
     */
    public function create(array $data)
    {
        return AssrPin::create($data);
    }

    /**
     * Retrieve a single record by ID.
     */
    public function findById($id)
    {
        return AssrPin::findOrFail($id);
    }

    /**
     * Update an existing record by ID.
     */
    public function update($id, array $data)
    {
        $record = AssrPin::findOrFail($id);
        $record->update($data);
        return $record;
    }

    /**
     * Delete a record by ID.
     */
    public function delete($id)
    {
        $record = AssrPin::findOrFail($id);
        return $record->delete();
    }
}
