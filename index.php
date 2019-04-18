<!DOCTYPE html>
<html lang="en">
<head>
  <title>Search Tweets</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Search Tweets Bot</h2>
  
<form action="tweets.php" method="post">
<br>
<div class="form-group">
      <label for="pwd">Hashtag:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter hashtag" name="name">
    </div>
<button type="submit" class="btn btn-default">Submit</button>
</form>

</body>
</html>