<?php

namespace App\Controllers;

use App\Models\TeleponModels;
use CodeIgniter\RESTful\ResourceController;

class Telepon extends ResourceController
{
    protected $modelName = 'App\Models\TeleponModels';
    protected $format    = 'json';

    public function index()
    {
        helper('api');
        $api = $_GET["api_key"];

        if (isInputValid($api)) {
            return $this->respond($this->model->findAll());
        } else {
            $response = [
                'status'   => 401,
                'code'     => '321a',
                'messages' => 'Invalid API Key!'
            ];
            return $this->respondCreated($response);
        }
    }

    public function show($id = NULL)
    {
        helper('api');
        $api = $_GET["api_key"];

        if (isInputValid($api)) {
            return $this->respond($this->model->find($id));
        } else {
            $response = [
                'status'   => 401,
                'code'     => '321a',
                'messages' => 'Invalid API Key!'
            ];
            return $this->respondCreated($response);
        }
    }

    public function delete($id = null)
    {
        helper('api');
        $api = $_GET["api_key"];

        if (isInputValid($api)) {
            return $this->respond($this->model->delete($id));
        } else {
            $response = [
                'status'   => 401,
                'code'     => '321a',
                'messages' => [
                    'Invalid API Key!'
                ]
            ];
            return $this->respondCreated($response);
        }
    }

    public function create()
    {
        helper('api');
        $api = $_GET["api_key"];

        if (isInputValid($api)) {
            $data = array(
                'nama'  => $this->request->getPost('nama'),
                'nomor' => $this->request->getPost('nomor'),
            );

            $this->model->insert($data);
            $response = [
                'status'   => 201,
                'error'    => null,
                'messages' => [
                    'success' => 'Data Saved'
                ]
            ];
            return $this->respondCreated($data, 201);
        } else {
            $response = [
                'status'   => 401,
                'code'     => '321a',
                'messages' => 'Invalid API Key!'
            ];
            return $this->respondCreated($response);
        }
    }
}
