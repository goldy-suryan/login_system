<?php
    function selectClass($requestUri)
    {
        $current_file_name = basename($_SERVER['REQUEST_URI'], ".php");
        
        if ($current_file_name == $requestUri)
            return 'class="active"';
    }
?>