<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.0.0/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
    <style>
        /* Ocultar el menú en pantallas pequeñas */
        .navbar-collapse {
            display: none;
        }

        /* Mostrar el menú cuando el botón se active */
        .navbar-collapse.show {
            display: block;
        }

        /* Estilo del cursor */
        .clickable {
            cursor: pointer;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-info">
        <div class="container">
            <!-- Cambiado a un elemento h1 con clase "clickable" -->
            <h1 class="navbar-brand clickable">Mi Sitio</h1>
            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Acerca</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Servicios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- MDB -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- JavaScript de MDB 5 -->
    <script src="https://cdn.jsdelivr.net/npm/mdb-ui-kit@3.1.0-alpha19/js/mdb.min.js"></script>
    <script>
        // Detectar si la pantalla es de tamaño pequeño
        function isMobileScreen() {
            return window.innerWidth <= 992; // El tamaño celular generalmente es menor o igual a 992px
        }

        // Función para mostrar el menú cuando se hace clic en el título
        function toggleMenu() {
            var navbarCollapse = document.querySelector('.navbar-collapse');
            if (navbarCollapse.classList.contains('show')) {
                navbarCollapse.classList.remove('show');
            } else {
                navbarCollapse.classList.add('show');
            }
        }

        // Agregar evento de clic al título si la pantalla es de tamaño celular
        window.addEventListener('DOMContentLoaded', function () {
            var title = document.querySelector('.clickable');
            title.addEventListener('click', function () {
                if (isMobileScreen()) {
                    toggleMenu();
                }
            });
        });
    </script>
</body>

</html>
