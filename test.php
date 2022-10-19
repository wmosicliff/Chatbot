 <html>
 <head>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 </head>
    <body>
    Fill -ID,NAME,EMAIL_ID,PASSWORD,CREDITS,
    <form action="test.php" method="post">

NAME: <input id="name" type="text" name="name"><br><br>
PASSWORD: <input id="msg" type="text" name="msg"><br><br>

<input type="submit" id="submit" name="submit">
<button type="button" class="btn btn-primary" onclick="fun()">Add Record</button>
</form>

<script type="text/javascript">
    $("#submit").click(function() {
          var name= $("#name").val();
          var msg= $("#msg").val();
          alert(msg);
          $.post({
              type: "POST",
              url: "insert.php",
              data: 'name=' + name+ '&msg=' + msg,
              success: function(data)
              {
                 alert(data);
              }
          });


      });
function fun()
{
    $.get('insert.php', {name : $("#name").val(),msg : $("#msg").val()}, function(data)
  {
      //here you would write the "you ve been successfully subscribed" div
      /*alert(data);*/
      $("#name").val() == "";
      $("#msg").val() == "";

  });
}

</script>
<?php
/*include 'db.php';
if (isset($_POST['submit']))
{
    $name =$_POST['name'];
    $msg =$_POST['msg'];

    $insert = "INSERT INTO chat (name,msg) VALUES ('$name','$msg')";

    $run = $db->query($insert);

    if ($run)
    {
        echo "true";
    }
    else
    {
        echo "error";
    }

}
*/
?>
</body>
</html>
