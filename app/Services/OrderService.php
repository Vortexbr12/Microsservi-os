<?php

namespace App\Services;

class OrderService
{
    public function createOrder($data)
    {
        return [
            'status' => 'success',
            'message' => 'Pedido recebido com sucesso!',
            'pedido' => $data
        ];
    }
}
