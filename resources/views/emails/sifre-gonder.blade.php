<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şifre Sıfırlama</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <style>
        body, p, h2, h3 {
            font-family: 'Poppins', Arial, sans-serif;
        }

        .box {
            max-width: 750px;
            margin: 25px auto;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 16px;
            border: 1px solid #CCD8EF;
            background: #FFF;
        }

        .logo {
            display: flex;
            align-items: center;
            padding: 24px;
        }

        .logo img {
            width: 90px;
        }

        .content, .cerceve {
            padding: 24px;
        }

        .link {
            display: flex;
            width: 345px;
            height: 48px;
            padding: 12px 8px;
            justify-content: center;
            align-items: center;
            margin: 24px 0;
            border-radius: 100px;
            background: #721a33;
            text-decoration: none;
            color: #F4FBFC;
        }

        .footer1 {
            margin-bottom: 16px;
        }

        .text-area, .footer1, .footer2 {
            color: #721a33;
        }

        .footer1, footer2 {
            line-height: 20px;
        }

        .imza1, .imza2 {
            font-size: 20px;
        }

        .imza2 {
            font-weight: bold;
        }

        .button {
            font-weight: 500;
            color: #F4FBFC;
            font-size: 14px;
            font-style: normal;
            line-height: normal;
            letter-spacing: -0.28px;
        }

        .footer-content {
            border: 1px solid #D5D8D8;
            border-top: none;
            background: #F2FAFB;
            border-bottom-left-radius: 16px;
            border-bottom-right-radius: 16px;
        }

        .link-decor {
            text-decoration: underline;
            color: #721a33;
        }
        .name{
            display: flex;
            align-items: center;
            padding: 24px;
            font-weight: bold;
            font-size: 30px;
            line-height: 36px;
            color: #721a33;

        }
    </style>
</head>

<body>
<div class="box">

    <div class="name">
        Arcadia Vine Yards
    </div>
    <div class="content">
        <h2>Merhaba {{ $uye-> eposta }},</h2>
        <p class="text-area">Üye başvurusu yaptığın için teşekkür ederiz!</p>
        <h3>
            Kullanıcı adı olarak bize yaptığın başvurudaki mail adresini kullanabilirsin.
        </h3>
        <h3>Şifre: {{ $uye-> sifre }} </h3>
        <p class="imza1">Teşekkürler,</p>
        <p class="imza2">ArcadiaVineYards Ekibi</p>
    </div>
    <div class="footer">
        <div class="footer-content cerceve">
            <p class="footer1">İletişim tercihlerinizi değiştirmek mi istiyorsunuz? Lütfen Bildirim Ayarları'na gidin. Bu e-posta adresine gönderilen yanıtlar bize ulaşmaz. Desteğe gereksinim duyuyorsanız, lütfen
                <b>info@arcadiavineyards.com </b> mail gönderin.</p>
            <p class="footer2">Bu e-posta size ArcadiaVineYards tarafından gönderilmiştir. Hizmetlerimizi kullanarak müşteri sözleşmelerimizi kabul etmiş olursunuz. <br> © ArcadiaVineYards 2023. Tüm hakları saklıdır.</p>
        </div>
    </div>
</div>
</body>

</html>
