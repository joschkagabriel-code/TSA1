<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
       
        body, html {
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            overflow: hidden; 
        }

        table {
            width: 100vw;  
            height: 100vh; 
            border-collapse: collapse;
            table-layout: fixed; 
        }

        td {
            border: 1px solid #ffffff;
            text-align: center;
            font-family: serif;
            font-size: 3vmin; 
            color: #ffffff;
        }

      
        .yellow { background-color: #1e3a8a; }  
        .red { background-color: #3b82f6; }      

        h1 {
            position: absolute;
            top: 10px;
            left: 10px;
            margin: 0;
            background: rgba(255, 255, 255, 0.7);
            padding: 5px;
            font-size: 1.5rem;
            z-index: 10;
        }
    </style>
</head>
<body>

    <table>
        <?php
        for ($row = 0; $row <= 10; $row++) {
            echo "<tr>";
            for ($col = 0; $col <= 10; $col++) {
                $result = $row * $col;
                $colorClass = ($row + $col) % 2 == 0 ? "yellow" : "red";
                echo "<td class='$colorClass'>$result</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>

</body>
</html>