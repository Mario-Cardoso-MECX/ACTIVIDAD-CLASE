<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control | <?=$nombre_pagina?></title>
    <style>
        /* Estilos básicos para darle forma al panel */
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            margin: 0; 
            background-color: #f4f7f6; 
            display: flex; 
        }
        
        /* Menú lateral oscuro */
        .sidebar { 
            width: 250px; 
            background-color: #1e2b3c; 
            color: white; 
            height: 100vh; /* Ocupa toda la altura de la pantalla */
            padding-top: 20px; 
            position: fixed;
        }
        .sidebar h2 { 
            text-align: center; 
            font-size: 22px; 
            margin-bottom: 30px; 
            letter-spacing: 1px;
        }
        .sidebar a { 
            display: block; 
            color: #bdc3c7; 
            padding: 15px 20px; 
            text-decoration: none; 
            border-bottom: 1px solid #2c3e50; 
            transition: 0.3s;
        }
        .sidebar a:hover { 
            background-color: #2c3e50; 
            color: white;
            padding-left: 25px; /* Pequeño efecto de animación */
        }

        /* Contenedor derecho (donde va la información) */
        .main-content { 
            margin-left: 250px; /* Deja espacio para el menú lateral */
            padding: 30px; 
            width: 100%;
        }
        .header { 
            background-color: white; 
            padding: 20px 30px; 
            border-radius: 8px; 
            box-shadow: 0 4px 6px rgba(0,0,0,0.05); 
            margin-bottom: 30px; 
        }
        .header h1 { margin: 0 0 10px 0; color: #333; }
        .header p { margin: 0; color: #666; }

        /* Tarjetas de indicadores */
        .cards { 
            display: flex; 
            gap: 20px; 
            flex-wrap: wrap;
        }
        .card { 
            background-color: white; 
            padding: 25px; 
            border-radius: 8px; 
            box-shadow: 0 4px 6px rgba(0,0,0,0.05); 
            flex: 1; 
            min-width: 200px;
        }
        .card h3 { 
            margin-top: 0; 
            color: #7f8c8d; 
            font-size: 16px; 
            text-transform: uppercase;
        }
        .card .number { 
            font-size: 32px; 
            font-weight: bold; 
            color: #2980b9; 
            margin: 10px 0;
        }
    </style>
</head>
<body>

    <div class="sidebar">
        <h2><?=$nombre_pagina?></h2>
        <a href="#">🏠 Inicio</a>
        <a href="#">📋 Gestión de Proyectos</a>
        <a href="#">🛡️ Auditoría de Redes</a>
        <a href="#">⚙️ Configuración</a>
        <a href="#">🚪 Cerrar Sesión</a>
    </div>

    <div class="main-content">
        
        <div class="header">
            <h1>Bienvenido de nuevo</h1>
            <p>Este es tu dashboard principal. Aquí puedes visualizar el estado general de tu sistema.</p>
        </div>

        <div class="cards">
            <div class="card">
                <h3>Proyectos Activos</h3>
                <div class="number">4</div>
                <p style="margin:0; color:#95a5a6; font-size: 14px;">En fase de desarrollo</p>
            </div>
            
            <div class="card">
                <h3>Alertas de Seguridad</h3>
                <div class="number" style="color: #e74c3c;">2</div>
                <p style="margin:0; color:#95a5a6; font-size: 14px;">Requieren revisión</p>
            </div>
            
            <div class="card">
                <h3>Rendimiento del Servidor</h3>
                <div class="number" style="color: #27ae60;">98%</div>
                <p style="margin:0; color:#95a5a6; font-size: 14px;">Estable</p>
            </div>
        </div>

    </div>

</body>
</html>