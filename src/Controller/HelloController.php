<?php
namespace App\Controller;

use App\Controller\AppController;

class HelloController extends AppController
{
        public $autoRender = false;
        private $data = [
            ['name' => 'taro', 'mail' => 'taro@yamada', 'tel' => '090-999-999'],
            ['name' => 'hanako', 'mail' => 'hanako@flower', 'tel' => '080-888-888'],
            ['name' => 'sachiko', 'mail' => 'sachiko@happy', 'tel' => '070-777-777']
        ];

        public function index()
        {
            $id = 0;
            if (isset($this->request->query['id'])) {
                $id = $this->request->query['id'];
            }
            echo json_encode($this->data[$id]);
        }
}
