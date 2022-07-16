<?php

namespace rizdev\Belajar\PHP\MVC\Controller;

class ProductController {
    public function categories(string $productId, string $categoryId) {
        echo "Product ID: " . $productId . " Category ID: " . $categoryId;
    }
}