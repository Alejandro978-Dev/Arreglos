<?php
/* 
===========================================
Desarrollador: Michael Alejandro
Programa de formación: 
Evidencia: Manejo de arreglos y ciclos en PHP
===========================================
*/

// Arreglo de personas con su información, incluyendo color favorito
$personas = [
    [
        "nombre" => "Juan Olarte",
        "direccion" => "Cra. 45 # 45 - 56",
        "telefono" => "3456789",
        "cumpleanios" => "23/12/2000",
        "color_favorito" => "Amarillo"
    ],
    [
        "nombre" => "Pablo Martinez",
        "direccion" => "Cll. 23 # 12 - 19 Sur",
        "telefono" => "3214567",
        "cumpleanios" => "12/10/2005",
        "color_favorito" => "Verde"
    ],
    [
        "nombre" => "Nancy Ortega",
        "direccion" => "Av. 34 # 16 - 12",
        "telefono" => "2135423",
        "cumpleanios" => "07/06/2000",
        "color_favorito" => "Rojo"
    ],
    [
        "nombre" => "Carlos Fonseca",
        "direccion" => "Cll 9 # 35 - 46",
        "telefono" => "1451561",
        "cumpleanios" => "07/06/1980",
        "color_favorito" => "Azul"
    ],
    [
    "nombre" => "Laura Martínez",
    "direccion" => "Calle 10 # 8 - 20",
    "telefono" => "3001122",
    "cumpleanios" => "15/03/1995",
    "color_favorito" => "Blanco"
]
];

// Arreglo de significados de colores
$significados = [
    "Blanco" => "Pureza y paz.",
    "Amarillo" => "Riqueza y alegría.",
    "Azul" => "Calma y serenidad.",
    "Negro" => "Elegancia y poder."
];

// Comenzamos la tabla HTML con encabezados
echo "<table border='1' cellpadding='5'>";
echo "<tr>
        <th>Nombre</th>
        <th>Dirección</th>
        <th>Teléfono</th>
        <th>Fecha de cumpleaños</th>
        <th>Color favorito</th>
        <th>Significado</th>
      </tr>";

// Recorremos el arreglo de personas
foreach ($personas as $persona) {
    echo "<tr>";
    echo "<td>{$persona['nombre']}</td>";
    echo "<td>{$persona['direccion']}</td>";
    echo "<td>{$persona['telefono']}</td>";
    echo "<td>{$persona['cumpleanios']}</td>";
    echo "<td>{$persona['color_favorito']}</td>";

    // Verificamos si el color tiene significado
    $color = $persona['color_favorito'];
    if (array_key_exists($color, $significados)) {
        echo "<td>{$significados[$color]}</td>";
    } else {
        echo "<td>No se encuentra el significado.</td>";
    }

    echo "</tr>";
}

echo "</table>";
?>
