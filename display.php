
<!DOCTYPE html>
    <html>
        <head>
            <title>პირველი საიტი PHP-ზე</title>
            <meta charset="utf-8">
        </head>
        <body>
            <?php
                $name = $_POST["firstname"];
                $password = $_POST["password"];
                $confirm_pass=$_POST["confirm_password"];
                
                if ($password==$confirm_pass){
                    echo("თქვენ წარმატებით გაიარეთ რეგისტრაცია");
                }else{
                    echo("თქვენ ვერ გაირეთ რეგისტრაცია");
                }
            ?>
    </body>
</html>