<?php

namespace Controller;

include "Traits/ResponseFormatter.php";
include "Controller/Controller.php";

use Traits\ResponseFormatter;

class ProductController extends Controller
{
    use ResponseFormatter;

    public function __construct()
    {
        $this->controllerName = "Get All Product";
        $this->controllerMethod = "Get";

    }
    public function getallProduct()

    {
        $dummyData = [
            "Air mineral",
            "Kebab",
            "jus jambu"
        ];

        $response = [
            "controller_attribute" => $this->getControllerAttribute(),
            "product" => $dummyData
        ];

        return $this->responseFormatter(200, "Succes", $response);
    }
}