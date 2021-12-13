# Instalar proyecto en entorno local

- Clonar este repositorio: 
```bash
git clone <repository ssh or https>
```

- Descargar dependencias:
```bash
docker exec -it <container-name> composer install
```

# Automatización para producción

- Existe un Action que al momento de ser aceptado un pull-request compila y crea una nueva imagen que será desplegada a **DockerHub**, despues se conectará a la instancia de AWS y descargará y compilará la imagen recien subida.