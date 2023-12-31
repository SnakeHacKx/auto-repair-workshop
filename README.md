# Taller de Reparación de Autos

Proyecto creado utilizando PHP, HTML, CSS, JavaScript y Sass. Trata de un sitio web para la administración del taller ficticio **AutoMasters**.

<p align="center">
  <a target="blank"><img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" width="200" alt="PHP Logo" /></a>
  <a target="blank"><img src="https://www.formacarm.es/portal/formacarm2.0/assets/images/cursos/166.png" width="200" alt="HTML Logo" /></a>
  <a target="blank"><img src="https://plugins.jetbrains.com/files/6098/425846/icon/pluginIcon.svg" width="200" alt="Node.js Logo" /></a>
  <a target="blank"><img src="https://upload.wikimedia.org/wikipedia/commons/9/96/Sass_Logo_Color.svg" width="200" alt="Sass Logo" /></a>
</p>

## Dev

#TODO: crear un release

1. Clonar el proyecto desde GitHub

```
git clone https://github.com/SnakeHacKx/auto-repair-workshop.git
```

2. Instalar [NodeJS](https://nodejs.org/en)
3. Instalar Gulp.js (abra como administrador la Power Shell)

```
npm install --global gulp-cli
```
**(Windows)** Si le aparece algún error relacionado a firma digital, puede ejecutar el siguiente comando
```
Set-ExecutionPolicy RemoteSigned
```

---

**De aquí en adelante todo comando debe ser ejecutado en la <u>raíz del proyecto</u>.**

---

4. Correr el contenedor de Docker que contiene la aplicación (no se tiene que usar XAMPP)

```
docker-compose up -d
```

5. Instalar dependencias

```
npm i
```

6. Ejecutar el watch  
   Esto permitirá que el código de Sass se compile a CSS de forma automática.

```
gulp
```

Una vez ya se tengan compiladas las imágenes y no se quiere repetir el proceso cada vez, o si simplemente no se quieren comprimir las imágenes, se usa el siguiente comando que sólo compila la hoja de estilos CSS (es más rápido).

```
gulp dev
```

7. Ir a [http://localhost/index.html](http://localhost/index.html) en el navegador.

8. **Si se quiere rellenar la base de datos:** copiar el contenido del archivo `data.template.csv` que se encuentra en la carpeta data en el `autos.csv`.

### Notas

El contenedor de Docker está configurado para que corra en el puerto 80 de manera local.
Si no se usa Docker esto debe configurarse aparte y si el puerto cambia, el link también lo hace.

**Ejemplo:**
Si se configura el puerto 3000 con XAMPP, se tendrá que acceder por medio de: `localhost:3000/index.html`
