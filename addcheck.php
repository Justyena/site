
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container {
            width: 300px;
            margin-top: 300px;
        }
    </style>
</head>
<body>
    <!-- <form method="POST">
		<input type="text" name="title" required>
		<input type="submit" value="Add">
	</form> -->

  <!-- <div class="container">
    <div class="input-area">
      <form method="POST" action="add_task.php">
        <input type="text" name="task"
                 placeholder="write your tasks here..." required />
        <button class="btn" name="add">
              Add Task
          </button>
      </form>
    </div>
  </div> -->

  <!-- <form action="add.php" method="post">
        <input type="text" placeholder="enter..." name="name">
        <input type="number" placeholder="price" name="price">
        <button type="submit">Add</button>
    </form> -->
    <div class="container">
        <form action="" method="POST">
        <div class="form-group">
            <label for="exampleInputEmail1">Enter title</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="title..." name="title_id">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Description</label>
            <input type="text" class="form-control" id="exampleInputPassword1" placeholder="description" name="description">
        </div>
        <button type="submit" class="btn btn-primary">Create workspace </button>
        </form>
    </div>
</body>
</html>