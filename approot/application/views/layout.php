<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title><?php echo $title;?></title>
    <?php echo HTML::script('js/jquery-1.7.1.min.js'); ?>
    <?php echo HTML::script('js/bootstrap.min.js'); ?>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<ul class="nav nav-tabs">
<li><a href="/home">Home</a></li>
<li><a href="/case">Case</a></li>
<li><a href="/client">Client</a></li>
<li><a href="/resource">Resouce</a></li>
<li><a href="/user">User</a></li>
  <li class="dropdown">
    <a class="dropdown-toggle"
       data-toggle="dropdown"
       href="#">
        Setting
        <b class="caret"></b>
      </a>
    <ul class="dropdown-menu">
      <!-- links -->
        <a href="/account/logout">Logout</a>
    </ul>
  </li>
</ul>
<div class="container">
  <?php echo $body;?>
</div>

</body>
</html>