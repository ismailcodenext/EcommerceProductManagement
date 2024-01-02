<?php

namespace App\Listeners;

use App\Events\ProductPurchased;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateProductQuantity
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ProductPurchased $event)
    {
        // Access the product from the event and update its quantity
        $product = $event->product;
        $product->quantity -= 1; // Adjust the logic based on your requirements
        $product->save();
    }
}
