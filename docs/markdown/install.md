# Install FrankenPHP

Local installation with a static binary.

```bash
curl https://frankenphp.dev/install.sh | sh
mv frankenphp ../../bin
```

## Use

```bash
cd ../../bin
./frankenphp php-server -r ../public/
```

## Run a command-line script

```bash
frankenphp php-cli script.php
```
---
### Same as above, but using docker image

#### Run a local server with a volume mount
```bash
docker run -t --rm -v $PWD:/app -p 80:80 -p 443:443 -p 443:443/udp --tty dunglas/frankenphp 
```

#### Run a command-line script using the latest docker image
```bash
docker run -it --rm -v $PWD:/app dunglas/frankenphp frankenphp php-cli script.php
```
