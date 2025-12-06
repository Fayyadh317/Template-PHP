<html>
    <head>
        <title>TAMBAH</title>
    </head>
    <body>
        <h1>FORM TAMBAH</h1>
        <form action="" method="POST">
            <label for="">ATTRIBUTE 1 (Nama): </label>
            <input type="text" name="attribute_1_input">
            <br><br>

            <label for="">ATTRIBUTE 2 (Kelas): </label>
            <input type="text" name="attribute_2_input">
            <br><br>

            <input type="submit" value="HANTAR" name="submit">
        </form>
        <?php 
            include("config.php");

            if(isset($_POST['submit'])){
            // Jika ditetapkan ada $_POST dari input type yang bernama "submit" - Terjemahan kod if(isset($_POST['submit']))
            // Bermakna, PHP bawah ni akan jalan kalau ada tindak balas pada input type bernama "submit"
            // Dalam kes ni, bermakna kalau pengguna klik butang HANTAR tu, PHP untuk simpan kat bawah ni akan dijalankan
                
                //Pastikan nama kat dalam $_POST[''] sama dengan nama dekat HTML name=""
                //Fungsi variable ni adalah pegang nilai yang pengguna input kat input type
                
                $attribute_1 = $_POST['attribute_1_input']; 
                $attribute_2 = $_POST['attribute_2_input'];

                $query = mysqli_query($connect,"INSERT INTO table_1 SET
                                                attribute_1 = '".$attribute_1."',
                                                attribute_2 = '".$attribute_2."'");
                                                // Pastikan kat sini, nama atribut sama macam dalam database
                                                // Atribut_IkutDB = '".$variable_InputPengguna."'");

                header("location:index.php");
            }
        ?>
    </body>

</html>
