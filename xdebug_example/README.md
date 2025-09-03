# Xdebug and FrankenPHP

Xdebug cannot be used on the standalone binary. Use the docker image.

```shell
docker build --add-host host.docker.internal:host-gateway -t app . 
docker run -p 8080:80 app
```

## Troubleshooting

Add to following settings to `php.ini` to enable xdebug detailed logging.

```ini
xdebug.log = /tmp/xdebug.log
xdebug.log_level = 10
```
