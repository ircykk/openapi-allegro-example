<?php

require_once(__DIR__ . '/sdk/vendor/autoload.php');

$configuration = (new \OpenAPI\Client\Configuration())
    ->setHost('https://api.allegro.pl.allegrosandbox.pl')
    ->setAccessToken('************');

$categoriesAndParametersApi = new \OpenAPI\Client\Api\CategoriesAndParametersApi(
    new \GuzzleHttp\Client(),
    $configuration
);

$categoriesDto = $categoriesAndParametersApi->getCategoriesUsingGET();

foreach ($categoriesDto->getCategories() as $category) {
    echo $category->getName()."\n";
}
