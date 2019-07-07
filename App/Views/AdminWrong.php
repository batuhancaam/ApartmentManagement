
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
    <title>Giriş Sayfası</title>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!--Bootsrap 4 CDN-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!--Fontawesome CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <!--Custom styles-->
    <link rel="stylesheet" href="style/LoginStyle.css">
</head>
<body>
<div class="container">
    <div class="d-flex justify-content-center h-100">
        <div class="card">
            <div class="card-header">
                <h3>Giriş Yapın</h3>

            </div>
            <div class="card-body">
                <form id="Login" action="AdminPanel" method="post">
                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" class="form-control" id="inputEmail" name="USNM" placeholder="Kullanıcı Adı">

                    </div>

                    <div class="input-group form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" class="form-control" name="USPASS" id="inputPassword" placeholder="Password">                    </div>
                    <div class="form-group">
                        <input type="submit" value="Giriş Yap" name="LoginSbmt" class="btn float-left login_btn">
                    </div>



                </form>
            </div>
            <div class="alert alert-danger">
                <strong>Yanlış Kullanıcı Adı Veya Şifre!</strong>Lütfen Tekrar Deneyin..
            </div>
            <div class="card-footer">
                <div class="d-flex justify-content-center links">
                    Üye Değil Misiniz?<a href="SingUp">Üye Olun</a>
                </div>

            </div>
        </div>
</body>
</html>