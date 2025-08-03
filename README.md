# GPS Tracker

## Introduction

Work in progress GPS Tracker and Stream Overlay

## Development Setup

You will need to create a Discord application and have the Client ID and Client Secret available.

```bash
cp .env.example .env
docker compose up -d redis db
docker compose run --rm composer install
docker compose run --rm artisan key:generate
docker compose run --rm artisan migrate
docker compose run --rm artisan db:seed
docker compose run --rm setup:discord
docker compose run --rm npm install
docker compose run --rm npm run build
docker compose up -d
```

Add the redirect URLs from the `setup:discord` step to your Discord OAuth2 configuration.

You should now be able to login. The first user will be given the admin role.

## Production Deployment

In the `example` directory there is a docker compose file and some .env example files. These are for the setup I use.
Just rename the .env files and edit them accordingly. You can get a [random Laravel application key here](https://generate-random.org/laravel-key-generator).

You need to expose the `gpstracker` and `reverb` containers to the public. They are both configured to listen on port 80
in the docker compose, so you probably want something like Traefik or Caddy in-front as a reverse proxy.

I'm running this with an external docker network called `frontend` with Caddy running as HTTP/HTTPS ingress. You will
need to add a network section for the `reverb` and `gpstracker` services to add them to the `frontend` network if you
want to do this.

The Caddyfile config I'm using for this is:

```
gpstracker.example.com {
  @websockets {
    header Connection *Upgrade*
    header Upgrade    websocket
  }
  reverse_proxy @websockets gpstracker-gpstracker-1
  reverse_proxy gpstracker-gpstracker-1
}
```

You will need to make a logs directory and chmod it 777 as I still need to sort permissions out.

To bring up the site, run the following:

```bash
docker compose up -d redis database
docker compose run --rm artisan migrate
docker compose run --rm artisan db:seed
docker compose run --rm artisan setup:discord
docker compose up -d
```

You should now be able to visit the site and login. From here you can use the admin menu to configure the site.


## License

The MIT License (MIT)

Copyright (c) 2025 Jessica Smith

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
