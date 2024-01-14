<?php

namespace App\Controllers;

use CodeIgniter\API\ResponseTrait;

class BookingTiketController extends RestfulController
{
    use ResponseTrait;

    protected $modelName = 'App\Models\BookingTiketModel';

    protected $format = 'json';

    public function index()
    {
        return $this->respond($this->model->findAll(), 200);
    }

    public function show($id = null)
    {
        $data = $this->model->find($id);
        return $this->respond($data ?? ['message' => 'Booking Tiket not found'], $data ? 200 : 404);
    }

    public function create()
    {
        $data = $this->request->getJSON();
        if ($this->model->insert($data)) {
            return $this->respondCreated(['message' => 'Booking Tiket created successfully']);
        } else {
            return $this->fail($this->model->errors());
        }
    }

    public function update($id = null)
    {
        $data = $this->request->getJSON();
        if ($this->model->update($id, $data)) {
            return $this->respond(['message' => 'Booking Tiket updated successfully']);
        } else {
            return $this->fail($this->model->errors());
        }
    }

    public function delete($id = null)
    {
        if ($this->model->delete($id)) {
            return $this->respond(['message' => 'Booking Tiket deleted successfully']);
        } else {
            return $this->fail($this->model->errors());
        }
    }
}
