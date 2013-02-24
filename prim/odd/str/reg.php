 <?php
 if (($_POST["Фамилия"] == "")||($_POST["Пароль"] == "")||
($_POST["Email"] == "")) {
 header("Location: http://localhost/registry.htm");
 exit;}
 ?>
 <html>
 <head>
<title>Скрипт PHP</title>
 </head>
 <body>
 <?php
 echo "Уважаемый ";
 echo "$Фамилия";
 echo "! Вы зарегистрированы.";
 $newfile=fopen($_POST["Фамилия"],"w");
 fwrite($newfile, $_POST["Пароль"]);
 fwrite($newfile, "\n");
 fwrite($newfile, $_POST["Email"]);
 fwrite($newfile, "\n");
 fwrite($newfile, $_POST["Категория"]);
 fwrite($newfile, "\n");
 fclose($newfile);
 $rfile=fopen($_POST["Фамилия"],"r");
 $data=file($_POST["Фамилия"]);
 echo " Новую информацию Вы получите по адресу: ";
 echo $data[1];
 fclose($rfile);
 ?>
 </body>
 </html>