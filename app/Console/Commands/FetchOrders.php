<?php

namespace App\Console\Commands;

use App\Models\OrderItalyApi;
use Illuminate\Console\Command;
use Automattic\WooCommerce\Client;
use App\Models\OrdersApi;

class FetchOrders extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'woocommerce:orders';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get orders from WooCommerce';

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

        $woocommerce = new Client(
            'https://shop.ninesdeonil.com',
            $client_key,
            $secre_key,
            [
                'wp_api' => true,
                'version' => 'wc/v3',
                'timeout' => 400,
                'verify_ssl' => false,

            ]
        );
       
        $page = 1;
        $orders = [];

        do {
            $results = $woocommerce->get('orders', ['per_page' => 100, 'page' => $page]);
            $results = array_chunk($results, 100);
            $orders = array_merge($orders, $results);
            /*  dd($orders); */
            $page++;
        } while (count($results) > 0);

        $ordersApi = new OrdersApi();

        /* delete table orderApi and create all new */
        /*   $ordersApi->truncate(); */
        $ordersApi->truncate();
        foreach ($orders as $key => $value) {

            foreach ($value as $key2 => $value2) {
                //var_dump($value2->id); exit;
                $ordersApi->create([
                    'id' => $value2->id,
                    'parent_id' => $value2->parent_id,
                    'number' => $value2->number,
                    'order_key' => $value2->order_key,
                    'created_via' => $value2->created_via,
                    'version' => $value2->version,
                    'status' => $value2->status,
                    'currency' => $value2->currency,
                    'date_created' => $value2->date_created,
                    'date_created_gmt' => $value2->date_created_gmt,
                    'date_modified' => $value2->date_modified,
                    'date_modified_gmt' => $value2->date_modified_gmt,
                    'discount_total' => $value2->discount_total,
                    'discount_tax' => $value2->discount_tax,
                    'shipping_total' => $value2->shipping_total,
                    'shipping_tax' => $value2->shipping_tax,
                    'cart_tax' => $value2->cart_tax,
                    'total' => $value2->total,
                    'total_tax' => $value2->total_tax,
                    'prices_include_tax' => $value2->prices_include_tax,
                    'customer_id' => $value2->customer_id,
                    'customer_ip_address' => $value2->customer_ip_address,
                    'customer_user_agent' => $value2->customer_user_agent,
                    'customer_note' => $value2->customer_note,
                    'billing' => json_encode($value2->billing),
                    'shipping' => json_encode($value2->shipping),
                    'payment_method' => $value2->payment_method,
                    'payment_method_title' => $value2->payment_method_title,
                    'transaction_id' => $value2->transaction_id,
                    'date_paid' => $value2->date_paid,
                    'date_paid_gmt' => $value2->date_paid_gmt,
                    'date_completed' => $value2->date_completed,
                    'date_completed_gmt' => $value2->date_completed_gmt,
                    'cart_hash' => $value2->cart_hash,
                    'meta_data' => json_encode($value2->meta_data),
                    'line_items' => json_encode($value2->line_items),
                    'origin' => 'es'
                ]);
            }
        }

        $page = 1;
        $orders_ital = [];

        do {
            $results_ita = $woocommerce_italy->get('orders', ['per_page' => 100, 'page' => $page]);
            $results_ita = array_chunk($results_ita, 100);
            $orders_ital = array_merge($orders_ital, $results_ita);
            /*  dd($orders); */
            $page++;
        } while (count($results_ita) > 0);

        $ordersItalyApi = new OrderItalyApi();

        /* delete table orderApi and create all new */
        /*   $ordersApi->truncate(); */
        $ordersItalyApi->truncate();

        foreach ($orders_ital as $key => $value) {

            foreach ($value as $key2 => $value2) {
                //var_dump($value2->id); exit;
                $ordersItalyApi->create([
                    'id' => $value2->id,
                    'parent_id' => $value2->parent_id,
                    'number' => $value2->number,
                    'order_key' => $value2->order_key,
                    'created_via' => $value2->created_via,
                    'version' => $value2->version,
                    'status' => $value2->status,
                    'currency' => $value2->currency,
                    'date_created' => $value2->date_created,
                    'date_created_gmt' => $value2->date_created_gmt,
                    'date_modified' => $value2->date_modified,
                    'date_modified_gmt' => $value2->date_modified_gmt,
                    'discount_total' => $value2->discount_total,
                    'discount_tax' => $value2->discount_tax,
                    'shipping_total' => $value2->shipping_total,
                    'shipping_tax' => $value2->shipping_tax,
                    'cart_tax' => $value2->cart_tax,
                    'total' => $value2->total,
                    'total_tax' => $value2->total_tax,
                    'prices_include_tax' => $value2->prices_include_tax,
                    'customer_id' => $value2->customer_id,
                    'customer_ip_address' => $value2->customer_ip_address,
                    'customer_user_agent' => $value2->customer_user_agent,
                    'customer_note' => $value2->customer_note,
                    'billing' => json_encode($value2->billing),
                    'shipping' => json_encode($value2->shipping),
                    'payment_method' => $value2->payment_method,
                    'payment_method_title' => $value2->payment_method_title,
                    'transaction_id' => $value2->transaction_id,
                    'date_paid' => $value2->date_paid,
                    'date_paid_gmt' => $value2->date_paid_gmt,
                    'date_completed' => $value2->date_completed,
                    'date_completed_gmt' => $value2->date_completed_gmt,
                    'cart_hash' => $value2->cart_hash,
                    'meta_data' => json_encode($value2->meta_data),
                    'line_items' => json_encode($value2->line_items),
                    'origin' => 'it'
                ]);
            }
        }



    }
}
