<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\ProductPackagingController;

class ProductPackagingTest extends TestCase
{
    public function testPackagingAlgorithm()
    {
        $controller = new ProductPackagingController();

        $products = [
            [
                'length' => 10,
                'width' => 5,
                'height' => 5,
                'weight' => 1,
                'quantity' => 1,
            ],
            [
                'length' => 20,
                'width' => 15,
                'height' => 10,
                'weight' => 2,
                'quantity' => 1,
            ],
        ];

        $result = $controller->packProducts($products, $controller->boxes);

        $this->assertNotFalse($result);
        $this->assertEquals('BOXA', $result[0]['box']);
    }
}