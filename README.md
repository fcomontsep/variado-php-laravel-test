# Sistema Laravel + Tailwind + Flowbite
Repositorio experimental para probar una instalación de PHP Laravel con Tailwind CSS y Flowbite.<br>Este repositorio se encuentra en desarrollo y no está desplegado.

<hr>
<img src="preview/miniaturas.jpg">
<hr>

# Requerimientos
- PHP (Utilizado y recomendado: 8.2+)
- Composer
- Node.js (Utilizado: 22.20.0, recomendado: 18.x o superior)
- Servidor Apache con configuración personalizada

<hr>

# Recomendado
- VSCode con extensión Tailwind CSS IntelliSense para autocompletado y sugerencias.
- Extensiones asociadas a Laravel, tales como Blade Formatter, Snippets, Goto View, etc.

<hr>

# Dependencias
- Laravel (instalado vía ``laravel new``)
- Tailwind CSS (compilado con CLI)
- Flowbite (JS + componentes)
- Breeze (autenticación básica con Laravel)

<hr>

# Instalación
### 1. Clona el repositorio
Utiliza tu gestor git de preferencia (ej: GitHub Desktop) o clona desde la terminal.
```bash
git clone https://github.com/tu-usuario/variado-php-laravel-test.git
cd variado-php-laravel-test
```

### 2. Instala las dependencias de Laravel
```bash
composer install
```

### 3. Instalación de Breeze (Livewire Volt Class API Alpine)
```bash
composer require laravel/breeze --dev
php artisan breeze:install
```

### 4. Configuración local de prueba (Apache + hosts)
Agrega esta línea al archivo C:\Windows\System32\drivers\etc\hosts:
```bash
127.0.0.1 marketplace.test
```
Requerirás un VirtualHost en Apache (por ejemplo, si lo estás utilizando vía XAMPP). <br>Puedes utilizar la siguiente configuración:
```bash
<VirtualHost *:80>
    ServerName marketplace.test
    DocumentRoot "C:/Ruta/Al/Repositorio/Public"

    <Directory "C:/Ruta/Al/Repositorio/Public">
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```
# Observaciones y comentarios
- Laravel no inicializa Git automáticamente. Si creas el proyecto desde cero (ej: con ``composer global require laravel/installer`` y ``laravel new nombre-proyecto`` mediante Git Bash), ejecuta git init en la raíz del proyecto.
