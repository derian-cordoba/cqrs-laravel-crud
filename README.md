### CQRS Laravel crud

## Address endpoints

-   `GET /api/v1/addresses` - Get all addresses
-   `GET /api/v1/addresses/search?id_direccion=x` - Search address by id_direccion
-   `POST /api/v1/addresses` - Create a new address

```json
// Body
{
    "id_usuario": 1,
    "tipo": "casa",
    "calle": "testing",
    "numero": "testing",
    "ciudad": "testing",
    "codigo_postal": "testing",
    "pais": "testing",
    "principal": true,
    "creado_en": "2025-10-10"
}
```

-   `PATCH /api/v1/addresses` - Update an existing address

```json
{
    "id_direccion": 27,
    "id_usuario": 1,
    "tipo": "casa",
    "calle": "testing",
    "numero": "testing",
    "ciudad": "testing",
    "codigo_postal": "testing",
    "pais": "testing",
    "principal": true,
    "creado_en": "2025-10-10"
}
```

-   `DELETE /api/v1/addresses` - Delete an address

```json
// Body

{
    "id_direccion": 1
}
```

## Phone endpoints

-   `GET /api/v1/phones` - Get all phones
-   `GET /api/v1/phones/search?id_telefono=x` - Search phone by id_telefono
-   `POST /api/v1/phones` - Create a new phone

```json
{
    "id_usuario": 1,
    "tipo": "móvil",
    "numero": "+505 99887766",
    "compania": "Claro",
    "principal": false,
    "activo": true,
    "creado_en": "2025-12-11"
}
```

-   `PATCH /api/v1/phones` - Update an existing phone

```json
// Body

{
    "id_telefono": 29,
    "id_usuario": 1,
    "tipo": "móvil",
    "numero": "+505 99887766",
    "compania": "Claro",
    "principal": false,
    "activo": true,
    "creado_en": "2025-12-11"
}
```

## Custom users endpoints
- `GET /api/v1/custom_users` - Get all custom users
- `GET /api/v1/custom_users/search?id_usuario=x` - Search custom user by id_usuario
- `POST /api/v1/custom_users` - Create a new custom user
```json
// Body
{
    "nombre": "Derian",
    "apellido": "TESTING",
    "email": "testing@testing5.com",
    "fecha_nacimiento": "2024-10-10",
    "fecha_registro": "2024-10-10",
    "activo": true,
    "ids_telefonos": [1, 2], // optional
    "ids_direcciones": [1, 2] // optional
}
```

- `PATCH /api/v1/custom_users` - Update a user

```json
// Body
{
    "id_usuario": 31,
    "nombre": "Derian",
    "apellido": "Cordoba",
    "email": "testing@testing5.com",
    "fecha_nacimiento": "2024-10-10",
    "fecha_registro": "2024-10-10",
    "activo": true,
    "ids_telefonos": [1, 2], // optional
    "ids_direcciones": [1, 2] // optional
}
```

- `DELETE /api/v1/custom_users` - Delete a user

```json
// Body

{
    "id_usuario": 1
}
```