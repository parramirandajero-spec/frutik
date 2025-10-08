<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Página Web Sencilla</title>
   <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    /* ====== Header ====== */
    header {
      background: #0e2aa5ff;
      color: write;
      padding: 15px 30px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    header h1 {
      font-size: 22px;
    }

    nav ul {
      list-style: none;
      display: flex;
      gap: 20px;
    }

    nav a {
      color: write ;
      text-decoration: none;
      font-weight: bold;
      transition: 0.3s;
    }

    nav a:hover {
      color: #184ec2ff;
    }

    /* ====== Contenido principal ====== */
    main {
      flex: 1;
      padding: 40px;
      background: #fcfcfcff;
    }

    main h2 {
      margin-bottom: 15px;
    }

    /* ====== Footer ====== */
    footer {
      background: #12146bff;
      color: write ;
      text-align: center;
      padding: 15px 0;
    }
  </style>
</head>
<body>
  <!-- ====== Header ====== -->
  <header>
    <h1>Mi Web Frontend</h1>
    <nav>
      <ul>
        <li><a href="Inicio.php">Inicio</a></li>
        <li><a href="Acerca.php">Acerca</a></li>
        <li><a href="Contacto.php">Contacto</a></li>   
      </ul>      
    </nav>
  </header>

  <!-- ====== Main Content ====== -->
  <main>
    <h2>Bienvenidos a mi pagina  web</h2>
    <p>Aquí encontrarás frutas y verduras. Podrás comprar los productos en esta página, agregar al carrito, hacer la compra y listo, el domicilio llegará a tu casa.</p>
  </main>

  <!-- ====== Footer ====== -->
  <footer>
    <p>Realizado por Jerónimo</p>
  </footer>
</body>
</html>


