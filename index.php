<!DOCTYPE html>
<html lang="en">
<head>
  <title>New Tab</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css' integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
</head>
<body>
<style type="text/css">
  .mt
  {
    margin-top: 70px;
  }
 .mt-10
 {
  margin-top: 10px;
 }
</style>
<div class="container">
  <div class="row mt">
  <div class="col-md-12">
  <div class="card">
  <div class="card-header">
  <h2>Alpha</h2>
</div>
 <div class="card-body">
  <form id="myform" method="post">
  <div class="form-row">
  <div class="form-group col-md-11">
    <input type="search" id="search" name="search" class="form-control" placeholder="Search For" />
</div>
<div class="form-group col-md-1">
  <button type="button" class="btn btn-primary" onclick="searchfor();">
    <i class="fas fa-search"></i>
  </button>
</div>
</div>
   </form> 
</div>
</div>
</div>
</div>
<div class="row mt-10" id="result">
</div>
</div>
<script type="text/javascript">
 function searchfor(){
    var querys = $('#search').val();
    if(querys.length == 0)
    {
      alert('Please Enter Text Search Box');
    }
    else
    {
      $.ajax({
        type:'POST',
        url:'searchres.php',
        data:{querys:querys},
        success:function(output)
        {
        $('#result').html(output);
        }
      });
    }
  }
</script>
</body>
</html>
