# Laboratorio: Implementación de la Carga Automática (Autoload) bajo el Estándar PSR-4 con Composer

**UNIVERSIDAD TECNOLÓGICA DE PANAMÁ**  
**Facultad de Ingeniería en Sistemas Computacionales**  
**Materia:** DESARROLLO DE SOFTWARE VII

**Integrantes:**  
*   **Nombre:** Cristian González **Cédula:** 8-1020-424  

---

## 1. Guía de Instalación
Para ejecutar este proyecto localmente, siga estas instrucciones:

1.  Clone el repositorio en su servidor local (WampServer).
2.  Abra una terminal en la carpeta raíz del proyecto.
3.  Ejecute el comando para generar el mapa de carga automática localmente:
    ```bash
    composer dump-autoload
    ```

## 2. Estructura de Archivos
Este proyecto aplica el estándar **PSR-4** para organizar los archivos y las clases de forma eficiente:
*   **`src/`**: Directorio donde se guardan las clases físicas del sistema.
*   **Namespace `App\`**: Prefijo configurado en el archivo `composer.json` que apunta a la carpeta `src/`.
*   **`vendor/autoload.php`**: Archivo generado por Composer que elimina la necesidad de usar `include` o `require` manuales.

## 3. Pruebas de Ejecución
Se demuestra que el sistema instancia los objetos correctamente sin errores de "Class not found":

![image alt](https://github.com/CristianG0311/CargaAutomatica/blob/ac50307018eb80d8fe0c07eea106cb954e75161a/image.png) 

## 4. Análisis Comparativo (Conclusiones Técnicas)
Se destacan tres ventajas críticas observadas durante el laboratorio:

*   **Mantenibilidad:** Es mucho más sencillo agregar clases nuevas al proyecto sin tener que modificar archivos de configuración globales o múltiples archivos de carga.
*   **Eficiencia de Memoria:** El uso de *Lazy Loading* (carga bajo demanda) mejora el rendimiento del servidor, cargando solo las clases que se necesitan en el momento.
*   **Estandarización:** Seguir el estándar PSR-4 garantiza un entorno profesional, ordenado y compatible para el trabajo colaborativo.

---

**Higiene del Repositorio:** El proyecto incluye un archivo `.gitignore` para excluir la carpeta `vendor/`, cumpliendo con las buenas prácticas de desarrollo y obligando a generar la carga automática localmente.
