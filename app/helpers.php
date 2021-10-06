<?php
if (!function_exists('displayAlert')) {
    function displayAlert($center = true)
    {
        if (Session::has('message')) {
            list($type, $message) = explode('|', Session::get('message'));
            $type = $type == 'error' ? 'danger' : ($type == 'message' ? 'info' : $type);

            return "<div class=\"alert alert-" . $type . " alert-dismissible fade show " . ($center ? "text-center" : "") . " \" role=\"alert\">$message<button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button></div>";
        }

        return '';
    }
}
