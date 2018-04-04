<?php

if (!function_exists('removeEndingSlash')) {
    function removeEndingSlash($requestUri)
    {
        if (strlen($requestUri) > 1 && $requestUri[strlen($requestUri) - 1] === '/') {
            $requestUri = substr($requestUri, 0, strlen($requestUri) - 1);
        }
        return $requestUri;
    }
}

if (!function_exists('siteUrl')) {
    function siteUrl()
    {
        $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
        $domainName = $_SERVER['HTTP_HOST'].'/';
        return $protocol.$domainName;
    }
}

if (!function_exists('redirect')) {
    function redirect($uri, array $params = [])
    {
        $redirectUrl = APP_URL . $uri;
        $redirectUrl = removeEndingSlash($redirectUrl);
        if ($params) {
            $redirectUrl .= '?';
            foreach ($params as $key => $value) {
                $redirectUrl .= "$key=$value";
            }
        }
        header('Location:' . $redirectUrl);
        exit;
    }
}






















