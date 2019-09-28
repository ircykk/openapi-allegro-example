# Example OpenAPI generated client for allegro REST API
### Build client using OpenAPI Generator
```bash
$ docker run --rm -v ${PWD}:/local openapitools/openapi-generator-cli generate -i https://developer.allegro.pl/swagger.yaml -g php -o ./sdk 
```

### Dump composer autoload and install HTTP client
```bash
$ cd sdk
$ composer dump-autoload
$ composer require guzzlehttp/guzzle
```

### Example
```php
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
```