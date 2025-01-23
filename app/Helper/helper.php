<?php
if (!function_exists('hasError')) {
    function hasError($errors, string $name): ?String
    {
        return $errors->has($name) ? 'is-invalid' : '';
    }
}

if (!function_exists('setSidebarActive')) {
    function setSidebarActive(array $routes): ?String
    {
        foreach ($routes as $route) {
            if (request()->routeIs($route)) {
                return 'active';
            }
        }
        return null;
    }
}

if (!function_exists('formatDate')) {
    function formatDate(?String $date): ?String
    {
        if ($date) {
            return date('d M Y', strtotime($date));
        }
        return null;
    }
}

if (!function_exists('access')) {
    function access(array $permission): bool
    {
        $permission = auth()->guard('admin')->user()->hasAnyPermission($permission);
        $superAdmin = auth()->guard('admin')->user()->hasRole('Super Admin');

        if ($permission || $superAdmin) {
            return true;
        } else {
            return false;
        }
    }
}

if (!function_exists('formatScholarshipName')) {
    function formatScholarshipName(string $name): string
    {
        $name = strtolower($name);
        $name = ucwords($name);
        $name = str_replace(['Lani', 'Tcu Ceaa'], ['LANI', 'TCU CEAA'], $name);

        return $name;
    }
}
