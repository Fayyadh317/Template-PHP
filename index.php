<html>
    <head>
        <title>TAJUK</title>
        <style>
            /* STYLE KAT SINI */
        </style>
    </head>
    <body>
        <!-- KONTEN DISINI -->
        <table border="black 1px">
            <tr>
                <th>Header 1</th>
                <th>Header 2</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            <?php 
                include("config.php");

                $query = mysqli_query($connect,"SELECT * FROM table_1");
                //mysqli_query digunakan untuk menjalankan sintaks SQL dalam PHP

                if(mysqli_num_rows($query) > 0){ 
                //mysqli_num_rows digunakan untuk check ada tak data pada jadual yang dipaparkan pada $query
                    
                    while($row = mysqli_fetch_assoc($query)){
                    //mysqli_fetch_assoc digunakan untuk fetch (ambil) data yang ada dan sudah di-check dekat if

                        // CARA PERTAMA
                        
                        echo "<tr>";
                        
                        echo "<td>";
                        echo $row['attribute_1'];
                        echo "</td>";

                        echo "<td>";
                        echo $row['attribute_2'];
                        echo "</td>";

                        echo "<td>";
                        echo "<a href='kemaskini.php?primary_key=";
                        echo $row['primary_key'];
                        echo "'>KEMASKINI</a>";
                        echo "</td>";

                        echo "<td>";
                        echo "<a href='padam.php?primary_key=";
                        echo $row['primary_key'];
                        echo "'>PADAM</a>";
                        echo "</td>";

                        echo "</tr>";

                        // CARA KEDUA

                        /* echo "
                        <tr>
                            <td>".$row['attribute_1']."</td>
                            <td>".$row['attribute_2']."</td>
                            <td>
                                <a href='kemaskini.php?primary_key".$row['primary_key']."'>KEMASKINI</a>
                            </td>
                            <td>
                                <a href='padam.php?primary_key".$row['primary_key']."'>PADAM</a>
                            </td>
                        </tr>
                        "; */
                    }

                }
            ?>
        </table>
        <a href="tambah.php">
            <button>TAMBAH DATA DI SINI</button>
        </a>
    </body>
</html>