<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Automattic\WooCommerce\Client;

class FetchClients extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'woocommerce:customers';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get customers from WooCommerce';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $client_key = env('CLIENTE_SECRET_WOOCOMERCE_ESP');
        $secre_key = env('CLIENTE_KEY_WOOCOMERCE_ESP');
        

       
        $woocommerce = new Client('https://shop.ninesdeonil.com',
        $client_key,
         $secre_key,
         [
            'wp_api' => true, 
            'version' => 'wc/v3',
            'timeout' => 400,
            'verify_ssl'=> false,
         
        ]);
      /*   $clients = $woocommerce->get('customers'); */

        $page = 1;
        $orders = [];
        
        do {
            $results = $woocommerce->get('customers', ['per_page' => 100, 'page' => $page]);
            $results = array_chunk($results, 100);
            $orders = array_merge($orders, $results);
           /*  dd($orders); */
            $page++;
        } while(count($results) > 0);


        $clienteApi = new \App\Models\CustomersApi();
        $clienteApi->truncate();
        foreach($orders[0] as $order){
            $clienteApi->create([
                'id' => $order->id,
                'date_created' => $order->date_created,
                'date_created_gmt' => $order->date_created_gmt,
                'date_modified' => $order->date_modified,
                'date_modified_gmt' => $order->date_modified_gmt,
                'email' => $order->email,
                'first_name' => $order->first_name,
                'last_name' => $order->last_name,
                'role' => $order->role,
                'username' => $order->username,
                'billing' => json_encode($order->billing),
                'shipping' => json_encode($order->shipping),
                'is_paying_customer' => $order->is_paying_customer,
                'avatar_url' => $order->avatar_url,
                'meta_data' => json_encode($order->meta_data),
                'links' => json_encode($order->_links),


            ]);
        }
    }
}
