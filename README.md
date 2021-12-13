# Instalar proyecto en entorno local

- Clonar este repositorio: 
```bash
git clone <repository ssh or https>
```

- Iniciar contenedor:
```bash
docker-compose up -d
```

- Descargar dependencias:
```bash
docker exec -it ci-7.4 composer install
```

- Configurar el archivo .env

# Automatización para producción

- Existe un Action que al momento de ser aceptado un pull-request compila y crea una nueva imagen que será desplegada a **DockerHub**, despues se conectará a la instancia de AWS y descargará y compilará la imagen recien subida.
