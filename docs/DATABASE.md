
# Casa Nativa - Base de datos

## 1. Configuración

- Motor: MySQL
- Versión: 8.0
- Base de datos: casa_nativa

## 2. Convenciones

Se utilizarán las convenciones nativas de Laravel:

- Tablas: plural y snake_case.
- Columnas: snake_case.
- Modelos: singular y PascalCase.
- Claves primarias: id.
- Claves foráneas: nombre_de_modelo_id.
- Fechas: created_at y updated_at.

## 3. Tablas implementadas

### users

Tabla de usuarios del sistema. Utiliza la estructura original de Laravel y conserva la compatibilidad con Fortify.

Campos principales:
- id
- name
- email
- email_verified_at
- password
- two_factor_secret
- two_factor_recovery_codes
- two_factor_confirmed_at
- remember_token
- created_at
- updated_at

### roles

Almacena los perfiles de acceso disponibles.

Campos:
- id
- name
- description
- created_at
- updated_at

### role_user

Tabla intermedia para establecer la relación muchos a muchos entre usuarios y roles.

Campos:
- id
- user_id
- role_id
- created_at
- updated_at

Restricción:
- Combinación user_id y role_id única.

## 4. Relaciones

### User
- Pertenece a muchos roles.

### Role
- Pertenece a muchos usuarios.

Relación implementada mediante belongsToMany de Eloquent.

## 5. Tablas pendientes

- customers
- customer_addresses
- product_categories
- products
- product_images
- inventory_movements
- conversations
- conversation_messages
- conversation_events
- whatsapp_webhook_events
- ai_configurations
- knowledge_articles
- ai_interactions
- ai_tool_executions
- customer_orders
- order_items
- order_status_histories
- content_generations
- business_settings
- system_logs

Estas tablas se implementarán progresivamente conforme avance el proyecto.

## 6. Consideraciones

- Las operaciones de inventario deberán ejecutarse mediante transacciones.
- Los pedidos conservarán una copia del nombre y precio del producto.
- Los mensajes de WhatsApp deberán permitir identificar eventos duplicados.
- Las claves API se almacenarán en variables de entorno y no en la base de datos.
