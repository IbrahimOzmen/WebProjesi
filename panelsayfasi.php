<!DOCTYPE html>
<html>

<head>
    <style>
        #visiters {
            font-family: "Times New Roman", Times, serif;
            border-collapse: collapse;
            width: 100%;
        }

        #visiters td,
        #visiters th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #visiters tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #visiters tr:hover {
            background-color: #ddd;
        }

        #visiters th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }

    </style>
</head>

<body>

    <table id="visiters">
        <tr>
            <th>İSİM</th>
            <th>SOYİSİM</th>
            <th>EMAIL</th>
            <th>MESAJ</th>
        </tr>



        <?php
        
        session_start();

        if($_SESSION["user"]=="")
        {
        echo "<script>
            window.location.href = 'cikis.php'
        </script>";
        }

        else

        {
        include("baglanti.php");

        $secme="Select * From iletisim";

        $sonuc=$baglan->query($secme);

        if($sonuc-> num_rows > 0)
        {
        while($cek=$sonuc->fetch_assoc())
        {
        echo "


        <tr>
            <td>".$cek['isim']."</td>
            <td>".$cek['soyisim']."</td>
            <td>".$cek['email']."</td>
            <td>".$cek['mesaj']."</td>
        </tr>
        ";
        }
        }

        else
        {
        echo "Veritabanında kayıtlı hiçbir veri bulunamamıştır.";
        }
        }
      




?>




    </table>

</body>

</html>
