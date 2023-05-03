<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backup</title>
    
    
</head>
<style>
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 120px;
  height: 120px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 2s linear infinite;
}

/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
<body>
    <div style="margin-top: 10%;">
    <center>
        <h1 style="font-size: 5rem; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif; color:#3498db;">Data is taking backup in every 10 seconds</h1>
        <div class="loader"></div>
</center>
</div>
<a type="button" name="Submit" id="but" value="Puxar Alavanca" href="backup2.php">

<script>
    var but = document.querySelector("[name='Submit']");
    setInterval(function () {but.click();},10000);
</script>

</body>
</html>




