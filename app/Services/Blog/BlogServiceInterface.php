<?php

namespace App\Services\Blog;

use App\Services\ServiceInterface;

interface BlogServiceInterface extends ServiceInterface
{
    public function getLatestBlogs($limit = 3);

    public function getBlogs();
}
