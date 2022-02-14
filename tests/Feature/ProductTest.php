<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductTest extends TestCase
{

    public function test_catalog_page_test()
    {
        $response = $this->get('/products');
        $response->assertOk();

        $response->assertViewIs('welcome');
        $response->assertViewHas('products');
    }
}
