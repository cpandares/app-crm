<?php

namespace App\Console\Commands;

use App\Models\CustomerApiItaly;
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

        $cliente_key_italy = env('CLIENTE_SECRET_WOOCOMERCE_ITALY');
        $secret_key_italy = env('kEY_SECRET_WOOCOMERCE_ITALY');

        $woocommerce_italy = new Client(
            'https://disnight.com/it',
            $cliente_key_italy,
            $secret_key_italy,
            [
                'wp_api' => true,
                'version' => 'wc/v3',
                'timeout' => 400,
                'verify_ssl' => false,

            ]
        );
        

       
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
            $results = $woocommerce->get('customers', ['role' => 'all', 'per_page' => 100, 'page' => $page]);
            $results = array_chunk($results, 100);
            $orders = array_merge($orders, $results);
           /*  dd($orders); */
            $page++;
        } while(count($results) > 0);


        $clienteApi = new \App\Models\CustomersApi();
        $clienteApi->truncate();
        foreach($orders as $order_api){
            foreach($order_api as $order){
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
                    'id_customer' => $order->id,
                    'origin' => 'es'
                    
                ]);
            }
        }



        $page = 1;
        $orders_ital = [];

        do {
            $results_ita = $woocommerce_italy->get('customers', ['role' => 'all', 'per_page' => 100, 'page' => $page]);
            $results_ita = array_chunk($results_ita, 100);
            $orders_ital = array_merge($orders_ital, $results_ita);
            /*  dd($orders); */
            $page++;
        } while (count($results_ita) > 0);

        $ordersItalyApi = new CustomerApiItaly();

        /* delete table orderApi and create all new */
          $ordersItalyApi->truncate();

        foreach ($orders_ital as $key => $value) {

            foreach ($value as $key2 => $value2) {
                //var_dump($value2->id); exit;
                $ordersItalyApi->create([
                    'id' => $value2->id,
                    'date_created' => $value2->date_created,
                    'date_created_gmt' => $value2->date_created_gmt,
                    'date_modified' => $value2->date_modified,
                    'date_modified_gmt' => $value2->date_modified_gmt,
                    'email' => $value2->email,
                    'first_name' => $value2->first_name,
                    'last_name' => $value2->last_name,
                    'role' => $value2->role,
                    'username' => $value2->username,
                    'billing' => json_encode($value2->billing),
                    'shipping' => json_encode($value2->shipping),
                    'is_paying_customer' => $value2->is_paying_customer,
                    'avatar_url' => $value2->avatar_url,
                    'meta_data' => json_encode($value2->meta_data),
                    'links' => json_encode($value2->_links),
                    'id_customer' => $value2->id,
                    'origin' => 'it'
                ]);
            }
        }



    }
}
