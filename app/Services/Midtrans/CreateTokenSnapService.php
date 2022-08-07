<?php
 
namespace App\Services\Midtrans;
 
use Midtrans\Snap;
 
class CreateTokenSnapService extends Midtrans
{
    protected $order;
 
    public function __construct($order)
    {
        parent::__construct();
 
        $this->order = $order;
    }
 
    public function getSnapToken($item_details, $customer_details)
    {
        $params = [
            'transaction_details' => [
                'order_id' => $this->order->kode_transaksi,
                'gross_amount' => $this->order->total_harga,
            ],
            'item_details' => $item_details,
            'customer_details' => $customer_details
        ];
        // dd($params);
        $snapToken = Snap::getSnapToken($params);
 
        return $snapToken;
    }
}