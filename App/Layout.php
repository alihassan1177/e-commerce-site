<?php

class Layout
{
    public function getClientLayout()
    {
        ob_start();
        include './Layouts/client.layout.php';
        return ob_get_clean();
    }

    public function getAuthLayout()
    {
        ob_start();
        include './Layouts/auth.layout.php';
        return ob_get_clean();
    }

    public function getAdminLayout(array $array = [])
    {
        $data = $array;
        ob_start();
        include './Layouts/admin.layout.php';
        return ob_get_clean();
    }

    public function getPageContent(string $filename, array $array = [])
    {
        $data = $array;
        ob_start();
        include "./Views/{$filename}";
        return ob_get_clean();
    }

    public function createPage(string $page_title, string $content, string $layout)
    {
        $replace = ["{{ title }}", "{{ content }}"];
        $with = [$page_title, $content];
        return str_replace($replace, $with, $layout);
    }
}
