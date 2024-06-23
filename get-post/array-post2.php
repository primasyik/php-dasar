<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Method POST</title>
</head>
<body>
    <!-- 
        * mengatasi jika user masuk ke halaman 2 melalui url
        * gunakan fungsi isset untuk cek apakah ada tombol submit yang di klik 
    -->
    Hai, nama saya
    <?php if(isset($_POST["submit"])):?>
    <h1>
         <?= $_POST["nama"];?>
    </h1>
    <?php endif;?>
        
</body>
</html>