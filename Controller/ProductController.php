<?php
namespace modul4\Controller;

include "Traits/ApiResponseFormatter.php";
include "Models/Product.php";

use modul4\Models\Product;
use modul4\Traits\ApiResponseFormatter;

class ProductController
{
    use ApiResponseFormatter;

    public function index()
    {
        $productModel = new Product();
        $response = $productModel->findAll();
        return $this->apiResponse(200, "success", $response);
    }

    public function getById($id)
    {
        $productModel = new Product();
        $response = $productModel->findById($id);
        return $this->apiResponse(200, "success", $response);
    }
    public function insert()
    {
        // TANGKAP INPUT 250N
        $jsonInput = file_get_contents('php://input');
        $inputData = json_decode($jsonInput, true);
        
        if (json_last_error()) {
            return $this->apiResponse(400, "Error invalid input", null);
        }
        
        $productModel = new Product();
        $response = $productModel->create([
            "product_name" => $inputData['product name']
        ]);
        
        return $this->apiResponse(200, "success", $response);
    }
    public function update($id)
    {
        $jsonInput = file_get_contents('php://input');
        $inputData = json_decode($jsonInput, true);
        if (json_last_error()) {
            return $this->apiResponse(400, "Error invalid input", null);
        }

        $productModel = new Product();
        $response = $productModel->update([
            "product name" => $inputData['product name'] 
        ], $id);

        return $this->apiResponse(200, "success", $response);
    }
    public function delete($id)
    {
        $productModel = new Product();
        $response = $productModel->delete($id);
        
        return $this->apiResponse(200, "success", $response);
    }
}
?>