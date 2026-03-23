<?php

class Router
{
    public $url = "";

    function __construct($requested_url) {
        $this->url = $requested_url;
    }

    function routeToController() {
        $parts = explode("/", $this->url);
        $className = ucfirst($parts[0]);
        
        if(empty($className)) {
            $className = "Main";
        }



        if(isset($parts[1])) {
            $methodName = $parts[1];
        }else {
            $methodName = "main";
        }

        $className = "Controllers\\" . $className;

        // Check if the controller class exists
        if (class_exists($className)) {
            $controller = new $className();
            if (method_exists($controller, $methodName)) {
                $controller->$methodName();
            } else {
                http_response_code(404);
                echo "<h1>404 Not Found</h1><p>Method '{$methodName}' does not exist in controller '{$className}'.</p>";
            }
        } else {
            // Show 404 message if class does not exist
            http_response_code(404);
            echo "<h1>404 Not Found</h1><p>Controller '{$className}' does not exist.</p>";
        }
    }
}
