Se puede instalar tradicionalmente (desde el panel de administración -> plugins -> subir plugin -> activar para toda la red) o instalar desde linea de comandos:

```console
URL_ZIP=$(curl -s https://api.github.com/repos/15hack/wp-banner/releases/latest | grep zipball_url | sed -e 's/.*: "//' -e 's/",//')
wget -q "$URL_ZIP" -O /tmp/wp-banner.zip
su - www-data -s /bin/bash -c 'cd /var/www/tomalosbarrios.net/htdocs; wp plugin install /tmp/wp-banner.zip --activate-network'
```

Cambia `/var/www/tomalosbarrios.net/htdocs` por el directorio donde
este la instalación de `wordpress` en la que quieres Instalar
el `plugin`.
