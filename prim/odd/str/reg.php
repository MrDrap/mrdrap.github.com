 <?php
 if (($_POST["�������"] == "")||($_POST["������"] == "")||
($_POST["Email"] == "")) {
 header("Location: http://localhost/registry.htm");
 exit;}
 ?>
 <html>
 <head>
<title>������ PHP</title>
 </head>
 <body>
 <?php
 echo "��������� ";
 echo "$�������";
 echo "! �� ����������������.";
 $newfile=fopen($_POST["�������"],"w");
 fwrite($newfile, $_POST["������"]);
 fwrite($newfile, "\n");
 fwrite($newfile, $_POST["Email"]);
 fwrite($newfile, "\n");
 fwrite($newfile, $_POST["���������"]);
 fwrite($newfile, "\n");
 fclose($newfile);
 $rfile=fopen($_POST["�������"],"r");
 $data=file($_POST["�������"]);
 echo " ����� ���������� �� �������� �� ������: ";
 echo $data[1];
 fclose($rfile);
 ?>
 </body>
 </html>