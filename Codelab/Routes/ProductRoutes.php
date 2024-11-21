<?php
namespace modul4\Routes;

include "Controller/ProductController.php"
;
use modul4\Controller\ProductController;

class ProductRoutes
{
    public function handle($method, $path)
    {
        //JIKA REQUEST METHOD GET DAN PATH SAMA DENGAN /api/product' 
        if ($method == "GET" && $path == '/api/product') {
            $controller = new ProductController();
            echo $controller->index();
        }
        // JIKA REQUEST METHOD GET DAN PATH SAMA DENGAN "/api/product 
        if ($method == "GET" && strpos($path, "/api/product/") == 0) { 
            $pathParts = explode("/", $path); 
            $id = $pathParts[count($pathParts) - 1];
            
            $controller = new ProductController();
            echo $controller->getById($id);
        }
        //JIKA REQUEST METHOD POST DAN PATH SAMA DENGAN /api/product
        if ($method == "POST" && $path == "/api/product") {
            $controller = new ProductController();
            echo $controller->insert();
        }
        //JIKA REQUEST METHOD PUT DAN PATH SAMA DENGAN /api/product
        if ($method == "PUT" && strpos($path, "/api/product/") == 0) {
            $pathParts = explode("/", $path);
            $id = $pathParts [count($pathParts) - 1];

            $controller = new ProductController();
            echo $controller->update($id);
        }
        //JIKA REQUEST METHOD DELETE DAN PATH SAMA DENGAN /api/product
        if ($method == "DELETE" && strpos($path, "/api/product/") == 0) { 
            $pathParts = explode("/", $path);
            $id = $pathParts[count($pathParts) - 1];

            $controller = new ProductController();
            echo $controller->delete($id);
        }
    }
}
?>