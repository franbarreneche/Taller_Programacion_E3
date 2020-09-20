## Consideraciones

Datos relevantes a tener en cuenta a la hora de correr el ejercicio. 

- En lugar de MySQL use Postgres que es lo que estamos viendo en la otra materia. La configuración se encuentra en el archivo .env
- Le agregué algunos campos adicionales a la receta (creador y fecha de creación)

## Datos de Prueba

Los datos utilizados en la BD para las pruebas son los siguientes.
```sql
COPY public.recetas (id, created_at, updated_at, nombre, procedimiento, costo_promedio, creador, fecha_creacion) FROM stdin;
1	\N	\N	Strudel de Manzana	1 - Hacer masa\n2 - Cortar manzanas\n3 - Poner manzanas en masa\n4 - calentar\n5 - Exito!	150	Francisco Barreneche\n	2020-09-19
2	\N	\N	Wickel Nuddel	1 - Hacer masa\n2 - Estirar masa\n3 - Coratar masa en rollitos\n4 - Hacer estofado\n5 - Poner rollitos en estofado\n6 - Calentar\n7 - Exito!	70	Pilar Martel\n	2020-09-18
6	2020-09-20 06:42:05	2020-09-20 06:42:05	Pollo al Disco	Pasos para hacer el pollo	150	Francisco Barreneche	2020-09-20
7	2020-09-20 06:43:59	2020-09-20 06:43:59	Sandwich de Milanga	1 - Agarrar Pan\r\n2 - Poner Milanga\r\n3 - Poner mayo\r\n4 - Comer\r\n5 - Exito!	20	Juan Ayape	2020-09-20
\.