<?php

return array(
    'user/register' => 'user/register',
    'catalog' => 'catalog/index',
    'product/([0-9]+)' => 'product/view/$1',
    'category/([0-9]+)' => 'catalog/category/$1',
    'category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/2',
    '' => 'site/index',
);

