## Requisitos Técnicos

Para contribuir al proyecto "PacientesReiki", asegúrate de cumplir con los siguientes requisitos técnicos en tu entorno de desarrollo:

1. **Sistema Operativo**: El proyecto se ha desarrollado principalmente en Windows. Se recomienda utilizar este entorno para mayor compatibilidad.

2. **Servidor Web**: Es necesario un servidor web que admita PHP. Se recomienda Apache o Nginx, configurado para ejecutar aplicaciones Laravel.

3. **PHP**: Se requiere PHP 8.2 o superior. Asegúrate de tener esta versión instalada y habilitada en tu servidor.

4. **Base de Datos**: El proyecto utiliza SQL Server como sistema de gestión de bases de datos. Asegúrate de tener una instancia de SQL Server configurada y lista para su uso.

5. **Composer**: Composer es una herramienta esencial para administrar las dependencias de PHP. Asegúrate de tener Composer instalado en tu sistema.

6. **Node.js y NPM**: Para el desarrollo con Vue.js, necesitarás Node.js y npm. Asegúrate de tener estas herramientas instaladas en tu sistema.

7. **Git**: Se recomienda tener Git instalado para trabajar con control de versiones y colaboración.

## Configuración del Entorno

Una vez que hayas confirmado que cumples con los requisitos técnicos, sigue estos pasos para configurar tu entorno de desarrollo:

1. **Clona el Repositorio**: Utiliza Git para clonar este repositorio en tu entorno de desarrollo local.

   ```bash
   git clone https://github.com/Orbserver/PacientesReiki.git
   ```

2. **Configuración de Variables de Entorno**: Copia el archivo `.env.example` y cámbiale el nombre a `.env`. Luego, configura las variables de entorno, como la conexión a la base de datos y la URL de la aplicación.

3. **Instalación de Dependencias PHP**: En la raíz del proyecto, ejecuta Composer para instalar las dependencias de PHP.

   ```bash
   composer install
   ```

4. **Instalación de Dependencias de Node.js**: En la raíz del proyecto, ejecuta npm para instalar las dependencias de Node.js.

   ```bash
   npm install
   ```

5. **Migraciones y Datos de Prueba**: Ejecuta las migraciones y los datos de prueba para configurar la base de datos.

   ```bash
   php artisan migrate --seed
   ```

## Contribución

Ahora que has configurado tu entorno de desarrollo y estás listo para contribuir, sigue estos pasos:

1. Crea una rama (branch) a partir de la rama `master` para tu trabajo:

   ```bash
   git checkout -b mi-nueva-caracteristica
   ```

2. Realiza tus cambios y desarrolla tu nueva característica o corrección de errores.

3. Realiza un commit de tus cambios y asegúrate de que sigan las [directrices de estilo de commit](https://www.conventionalcommits.org/).

4. Haz un push de tu rama a tu repositorio en GitHub.

5. Abre una solicitud de extracción (pull request) detallando tus cambios.

6. Los mantenedores del proyecto revisarán tu pull request y, si es necesario, proporcionarán comentarios o sugerencias antes de fusionarlo.
