# Proyecto WordPress – Blog de Inteligencia Artificial

## Descripción
Este proyecto consiste en la implantación de un sitio web basado en WordPress, desarrollado como parte del módulo **Implantación de Aplicaciones Web** del ciclo formativo ASIR.

El objetivo es crear un **blog divulgativo sobre Inteligencia Artificial**, programación y modelos de lenguaje, utilizando un entorno profesional con contenedores Docker y un tema personalizado desarrollado desde cero.

---

## Tecnologías utilizadas
- WordPress
- PHP
- MySQL 8
- Docker y Docker Compose
- HTML5 y CSS3
- Git y GitHub

---

## Arquitectura del proyecto
- Contenedor **WordPress (Apache + PHP 8.2)**
- Contenedor **MySQL**
- Persistencia de datos mediante volúmenes Docker
- Carpeta `wp-content` montada en el host para desarrollo del tema

---

## Tema personalizado
Se ha desarrollado un tema propio llamado **ia-blog**, ubicado en: wp-content/themes/ia-blog
y que incluye:

Incluye:
- `style.css`
- `functions.php`
- `header.php`
- `footer.php`
- `index.php`
- `single.php`

El tema utiliza:
- Encolado correcto de estilos mediante `functions.php`
- Estructura mínima de plantillas WordPress
- Estilos propios sin frameworks externos

---

## Contenido del blog
El sitio incluye varias entradas creadas desde el panel de administración de WordPress, entre ellas:
- Vibe Coding
- Modelos de Lenguaje (LLM)

Cada entrada contiene texto e imágenes relacionadas con la temática del proyecto.

---

## Ejecución del proyecto
1. Tener Docker instalado
2. Clonar el repositorio
3. Ejecutar:

```bash
docker compose up -d

Acceder a:
http://localhost:8080

Autor
Jose Roberto Gisbert Pobes
Ciclo ASIR – 2º curso
