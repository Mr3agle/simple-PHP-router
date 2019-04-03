# Simple PHP Router

### Para crear una ruta:
1. Crear un PageController dentro de ***app/controller/*** (importante que el nombre siga el formato: **NombreController**.php)
2. Crear la página en ***app/view/*** (importante que el nombre siga el formato: **Nombre**.php)

### El archivo de configuración:
Pueden añadirse más definiciones, para conexiones a bases de datos y etc.

Aun no soporta la creación de carpetas dentro de las carpetas, de modo que no se puede crear capetas dentro de model, controller o view. 

***Si alguno gusta implementar esa funcionalidad para carpetas y archivos en las raices, es bienvenido!***

De la misma manera, la clase View dento de *Framework/Kernel* puede mejorarse muchisimo, por ahora está muy básico todo.
