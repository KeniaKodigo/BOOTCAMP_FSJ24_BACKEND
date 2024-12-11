-- consultas SQL
-- DML (data manipulation language): Manipulacion de datos (insertar, actualizar, leer, eliminar) CRUD
-- DDL (data definition language): consultas para definir o modificr la estructura de la bd (agregar tabla, modificar, eliminar, truncate)

-- Recuperar los datos de las reservaciones
use control_email_bookings;
-- SELECT * FROM details_bookings
-- select userId, name from details_bookings

-- insertar un usuario
-- insert into users (name, email, password) values ("Humberto Ezequiel Chacon","humberto@gmail.com","humberto123")
select * from users;

-- actualizar el correo de humberto
-- update users set email = "ezequiel19@orueba.com" where id = 2

-- eliminar un usuario
-- DELETE FROM users WHERE id = 2
-- nulo / no es nulo

-- DELETE (elimina un registros) VS DROP (elimina la tabla)