## Requirements
- PHP >= 7.3
- Composer >= 1.10

## Installation

Update .env file with your database access parameters

```bash
composer install
php artisan migrate
```


## Usage
Default configuration runs on localhost:8000
```bash
php artisan serve
```


### Add new Product
```bash
curl --location --request POST 'localhost:8000/api/product' \
--header 'Accept: application/json' \
--header 'Content-Type: application/x-www-form-urlencoded' \
--data-urlencode 'title=skuter' \
--data-urlencode 'price=1500.11'
```
### Get all Products endpoint

```bash
curl --location --request GET 'localhost:8000/api/product' \
--header 'Accept: application/json'
```
Example response:
```json
[{"id":4,"title":"skuter","price":1500.11,"created_at":"2020-10-13 18:47:19","updated_at":"2020-10-13 18:47:19"}]
```
### Delete Product
```bash
curl --location --request DELETE 'localhost:8000/api/product/1' \
--header 'Accept: application/json'
```
### Update Product
```bash
curl --location --request PUT 'localhost:8000/api/product/4' \
--header 'Accept: application/json' \
--header 'Content-Type: application/x-www-form-urlencoded' \
--data-urlencode 'title=hulajnoga' \
--data-urlencode 'price=11.00'
```

### Add new Cart
```bash
curl --location --request POST 'localhost:8000/api/cart' \
--header 'Accept: application/json'
```
### Get all Carts

```bash
curl --location --request GET 'localhost:8000/api/cart' \
--header 'Accept: application/json'
```
Example response:
```json
{"data":[{"id":1,"products":[]},{"id":2,"products":[{"id":4,"title":"hulajnoga","price":1500.11,"created_at":"2020-10-14 18:47:19","updated_at":"2020-10-14 19:11:24","pivot":{"cart_id":2,"product_id":4,"quantity":4}}]}]}
```

### Add Product to Cart
```bash
curl --location --request POST 'localhost:8000/api/cart/1/product' \
--header 'Accept: application/json' \
--header 'Content-Type: application/x-www-form-urlencoded' \
--data-urlencode 'product_id=2' \
--data-urlencode 'quantity=1'
```


### Remove Product from Cart
```bash
curl --location --request DELETE 'localhost:8000/api/cart/1/product/2' \
--header 'Accept: application/json'
```

### Get Cart contents
```bash
curl --location --request GET 'localhost:8000/api/cart/' \
--header 'Accept: application/json' \
```
