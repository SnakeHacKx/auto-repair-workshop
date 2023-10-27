# Taller de Reparación de Autos

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
3. Instalar Gulp.js

```
npm install --global gulp-cli
```

---

**De aquí en adelante todo comando debe ser ejecutado en la raíz del proyecto**

4. Correr la imagen de Docker de PHP (Debemos estar en la raíz del proyecto)

```
docker-compose up -d
```

1. Instalar dependencias

```
npm i
```

1. Ejecutar el watch

```
gulp
```

1. Ir a `localhost/index.php`
