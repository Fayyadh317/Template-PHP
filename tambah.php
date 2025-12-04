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
            //

                $attribute_1 = $_POST['attribute_1_input'];
                $attribute_2 = $_POST['attribute_2_input'];

                $query = mysqli_query($connect,"INSERT INTO table_1 SET
                                                attribute_1 = '".$attribute_1."',
                                                attribute_2 = '".$attribute_2."'");

                header("location:index.php");
            }
        ?>
    </body>
</html>