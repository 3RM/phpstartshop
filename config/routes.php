<?php

return array(
	'catalog'=>'catalog/index',
    'product/([0-9]+)'=>'product/view/$1',
	'category/([0-9]+)'=>'catalog/category/$1',
    ''=>'site/index',
);

