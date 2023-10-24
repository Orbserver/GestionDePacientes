# Aplicación Web GestionDePacientes

GestionDePacientes es una aplicación web desarrollada utilizando el framework Laravel para la lógica del lado del servidor y Vite para el frontend. Está diseñada para gestionar datos de pacientes con fines médicos, permitiendo a los profesionales de la salud recopilar, almacenar y recuperar información de pacientes de manera eficiente.

## Características

- **Interfaz Amigable para el Usuario**: La aplicación proporciona una interfaz limpia e intuitiva para gestionar datos de pacientes, lo que facilita su uso para los profesionales de la salud.

- **Registro de Pacientes**: Puedes registrar fácilmente nuevos pacientes, incluyendo su información personal y su historial médico.

- **Búsqueda de Pacientes**: Busca y recupera datos de pacientes rápidamente utilizando diversos criterios de búsqueda.

- **Exportación de Datos**: Exporta datos de pacientes como archivos CSV para análisis y reportes adicionales.

- **Segura y Escalable**: Basada en Laravel, PacientesReiki ofrece sólidas medidas de seguridad y puede escalarse fácilmente para satisfacer las crecientes necesidades de datos.

## Tecnologías Utilizadas

- **Laravel**: El backend de la aplicación se desarrolla utilizando Laravel, un poderoso framework de PHP.

- **Vite**: Vite se utiliza en el frontend para proporcionar una experiencia de usuario rápida y eficiente.

- **Bootstrap**: Bootstrap se utiliza para el diseño receptivo y componentes de la interfaz de usuario.

- **Vue.js**: PacientesReiki se puede mejorar con Vue.js para funciones interactivas y dinámicas en el frontend, si se desea.

## Instalación

Para instalar y ejecutar PacientesReiki localmente, sigue estos pasos:

1. Clona este repositorio en tu máquina local.

2. Ejecuta `composer install` para instalar las dependencias de PHP.

3. Ejecuta `npm install` para instalar las dependencias de JavaScript.

4. Copia el archivo `.env.example` como `.env` y configura la información de tu base de datos.

5. Ejecuta `php artisan key:generate` para generar una clave de la aplicación.

6. Ejecuta `php artisan migrate` para crear las tablas de base de datos necesarias.

7. Inicia el servidor de desarrollo con `npm run dev`.

8. Accede a la aplicación en tu navegador web en `http://localhost:8000`.

## Uso

- Registra nuevos pacientes completando los formularios proporcionados.

- Busca pacientes existentes y revisa sus registros.

- Exporta datos de pacientes para fines de reportes.

## Contribución

Agradecemos las contribuciones para mejorar PacientesReiki. Siéntete libre de abrir problemas, enviar solicitudes de extracción o proporcionar comentarios.

## Licencia

Este proyecto es de código abierto y está disponible bajo la Licencia MIT. Eres libre de usar y modificar el código según tus necesidades.

¡Disfruta de PacientesReiki para una eficiente gestión de datos de pacientes!
