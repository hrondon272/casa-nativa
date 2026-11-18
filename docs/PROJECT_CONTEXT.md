
# Casa Nativa - Contexto del proyecto

## 1. Descripción

Casa Nativa es un proyecto demostrativo de una empresa ficticia dedicada a la comercialización de muebles y artículos para el hogar.

El objetivo es desarrollar una plataforma integral que permita gestionar clientes, productos, inventario, pedidos y conversaciones con clientes mediante un agente de inteligencia artificial conectado a WhatsApp.

## 2. Objetivos

- Desarrollar un agente de atención al cliente mediante WhatsApp.
- Integrar OpenAI para interpretar y responder mensajes.
- Consultar productos, precios y existencias desde la base de datos.
- Gestionar pedidos mediante conversaciones.
- Permitir la intervención de asesores humanos.
- Automatizar tareas mediante n8n.
- Generar contenido comercial con inteligencia artificial.
- Administrar la operación desde un panel web.

## 3. Arquitectura

Se utilizará una arquitectura monolítica.

Laravel será el núcleo de la aplicación y gestionará las reglas de negocio, autenticación, API, webhooks y persistencia.

Vue.js será utilizado para construir la interfaz administrativa mediante Inertia.js.

## 4. Tecnologías

### Backend
- PHP 8.4
- Laravel 13
- MySQL 8

### Frontend
- Vue.js 3
- Inertia.js 3
- TypeScript
- Tailwind CSS 4

### Inteligencia artificial e integraciones
- OpenAI API
- WhatsApp Cloud API
- n8n

### Herramientas
- Git
- GitHub
- Composer
- Node.js
- npm

## 5. Módulos previstos

1. Administración y usuarios.
2. Clientes.
3. Catálogo de productos.
4. Inventario.
5. Conversaciones y WhatsApp.
6. Agente de inteligencia artificial.
7. Pedidos.
8. Automatizaciones.
9. Generación de contenido.
10. Configuración y auditoría.

## 6. Reglas generales

- Utilizar las convenciones oficiales de Laravel.
- Mantener una arquitectura monolítica.
- Utilizar Eloquent para el acceso a datos.
- Implementar las reglas de negocio en Laravel.
- Validar las operaciones ejecutadas por inteligencia artificial.
- No permitir que la IA modifique directamente la base de datos.
- No inventar precios, existencias ni políticas comerciales.
- Mantener el código organizado por responsabilidades.
