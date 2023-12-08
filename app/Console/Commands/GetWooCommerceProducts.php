<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Automattic\WooCommerce\Client;

class GetWooCommerceProducts extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'woocommerce:products';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get products from WooCommerce';

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
        /* return 0; */
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

       // $products = $woocommerce->get('products');

      
        $page = 1;
        $orders = [];
        
        do {
            $results = $woocommerce->get('products', ['per_page' => 100, 'page' => $page]);
            $results = array_chunk($results, 100);
            $orders = array_merge($orders, $results);
           /*  dd($orders); */
            $page++;
        } while(count($results) > 0);

        $productsApi = new \App\Models\ProuctsApi();
        $productsApi->truncate();

        foreach($orders as $product){
            foreach ($product as $key => $value) {                
                    try {
                        //code...
                        $productsApi->create([
                            'id' => $value->id,
                            'name' => $value->name,
                            'slug' => $value->slug,
                            'permalink' => $value->permalink,
                            'date_created' => $value->date_created,
                            'date_created_gmt' => $value->date_created_gmt,
                            'date_modified' => $value->date_modified,
                            'date_modified_gmt' => $value->date_modified_gmt,
                            'type' => $value->type,
                            'status' => $value->status,
                            'featured' => $value->featured,
                            'catalog_visibility' => $value->catalog_visibility,
                            'description' => $value->description,
                            'short_description' => json_encode($value->short_description),
                            'sku' => $value->sku,
                            'price' => $value->price,
                            
                            
                            'created_at' => date('Y-m-d H:i:s'),
                            'updated_at' => date('Y-m-d H:i:s'),
                        ]);
                    } catch (\PDOException $th) {
                        //throw $th;
                        var_dump($th->getMessage());
                    }
            }
        }
        
    }
    
    
}
