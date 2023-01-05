
## Requirements

Requires [Docker](https://www.docker.com/) to run the project Locally.

Then clone the repository.

## To run locally for mac and linux 

Install Composer Dependencies

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

Run Laravel Sail 

```
./vendor/bin/sail up
```


## To run locally for windows
Make sure the project repository is under the WSL.

Install Composer Dependencies

```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```

Run Laravel Sail 

```
./vendor/bin/sail up
```

## Execute Artisan commands

Run Migration : `./vendor/bin/sail artisan migrate`

Run Seeders : `./vendor/bin/sail artisan db:seed`

Run Test : `./vendor/bin/sail artisan test`

For Vite: open `sail-8.1` container in docker and execute `npm run dev`

# Happy Running!