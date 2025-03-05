<?php
    $nama = "Elsa Tria Lestari";
    $nim = "1202220350";
    $fakultas = "Fakultas Rekayasa Industri";
    $prodi = "Sistem Informasi";
    $tahun = date("Y");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Web - <?php echo $nama; ?></title>
    <link rel="stylesheet" href="Style.css">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <script>
        function updateDateTime() {
            let now = new Date();
            let options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric', hour: '2-digit', minute: '2-digit', second: '2-digit' };
            document.getElementById("datetime").innerHTML = now.toLocaleDateString('id-ID', options);
        }
        setInterval(updateDateTime, 1000);
    </script>
</head>
<body>
    <header>
        <h1>Welcome to My Personal Web!</h1>
        <h3 id="datetime"><?php echo date("l, d F Y H:i:s"); ?></h3>
    </header>
    
    <section class="profile">
        <img src="Elsa.jpg" alt="Elsa Tria Lestari">
        <p><?php echo "$nama / $nim / $fakultas / $prodi"; ?></p>
        <br>
        <h1> Hi! Aku Elsa</h1>
        <p>Mahasiswa S1 Sistem Informasi Semester 6</p>
    </section>
    <section class="social-media">
        <table>
            <tr>
                <td>
                    <img src="github.png" alt="GitHub">
                    <br>
                    <a href="https://github.com/elsalestari" target="_blank">Github</a></td>
                <td>
                    <img src="instagram.png" alt="GitHub">
                    <br>    
                    <a href="https://www.instagram.com/el.tl30/" target="_blank">Instagram</a></td>
                <td>
                    <img src="linkedin.png" alt="GitHub">
                    <br>    
                    <a href="https://www.linkedin.com/in/elsatrialestari/" target="_blank">LinkedIn</a></td>
            </tr>
        </table>
        
    </section>
    <footer>
        <p>&copy; <?php echo $tahun; ?> <?php echo $nama; ?></p>
    </footer>
    
</body>
</html>