
# Casa Nativa - Decisiones técnicas

## 1. Arquitectura monolítica

Decisión:
Utilizar Laravel y Vue.js dentro del mismo proyecto.

Motivo:
Simplificar el desarrollo, mantenimiento e integración entre frontend y backend.

## 2. Base de datos

Decisión:
Utilizar MySQL 8.

Motivo:
Motor relacional adecuado para la gestión de clientes, productos, inventario, conversaciones y pedidos.

## 3. Convenciones Laravel

Decisión:
Adoptar las convenciones oficiales de Laravel para nombres de tablas, columnas, modelos y relaciones.

Motivo:
Mantener compatibilidad con Eloquent, Fortify y los componentes del framework.

## 4. Autenticación

Decisión:
Conservar Laravel Fortify y las funcionalidades de autenticación existentes.

Motivo:
Evitar implementar nuevamente funcionalidades que el starter kit ya proporciona.

## 5. Inteligencia artificial

Decisión:
Utilizar OpenAI API para el agente conversacional.

Motivo:
Permitir interpretación de mensajes, generación de respuestas y ejecución de herramientas.

Regla:
La inteligencia artificial no tendrá acceso directo para modificar la base de datos. Las operaciones deberán ejecutarse mediante servicios y validaciones de Laravel.

## 6. Automatización

Decisión:
Utilizar n8n para orquestar flujos e integraciones.

Motivo:
Facilitar la conexión entre servicios externos y automatizaciones sin trasladar las reglas de negocio fuera de Laravel.

## 7. Frontend

Decisión:
Utilizar Vue.js 3, Inertia.js y TypeScript.

Motivo:
Construir una interfaz administrativa integrada con Laravel.
