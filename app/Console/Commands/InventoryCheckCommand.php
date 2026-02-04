<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use App\Notifications\LowStockNotification;
use Illuminate\Support\Facades\Log;

class InventoryCheckCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'inventory:check-alerts';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Check for products with low stock and notify users';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $this->info('Starting inventory check...');

        // Find products where quantity <= min_stock
        $lowStockProducts = Product::whereColumn('quantity', '<=', 'min_stock')->get();

        $count = 0;
        foreach ($lowStockProducts as $product) {
            // Avoid spamming? Logic could be added here (e.g. check if notified recently).
            // For MVP, we notify every time the command runs (daily).

            if ($product->user) {
                $product->user->notify(new LowStockNotification($product));
                $count++;
            }
        }

        $this->info("Checked inventory. Sent $count low stock alerts.");
        Log::info("Inventory Check: Sent $count alerts.");
    }
}
