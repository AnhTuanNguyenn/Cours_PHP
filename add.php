<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <style type="text/css">
        h1{
            text-align: center;
            color: blueviolet;
        }
        form{
            text-align: center;
            font-size: 25px;
        }
        .form1{
            width: 120px;
            height: 20px;
        }
        .form2{
            font-size: 50px;
        }
        .form3{
            font-size: 30px;
        }
        .form4{
            font-size: 20px;
        }
    </style>
   <h1>ADD your Books !!!</h1>
    <form action="traitement_add.php" method="post"><br>
        <input type="text" name="title"  placeholder="Title" id="form1"><br>
        <input type="text" name="author" placeholder="Author" id="form2"><br>
        <input type="text" name="editor" placeholder="Editor"id="form3"><br>
        <input type="number" name="note" placeholder="Note" max="5" min="0"id="form4"><br>
        <input type="Submit">
    </form>
</body>
</html>