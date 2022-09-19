<?php
  include("./db_config.php");
  $sql = "select * from todo_list";
  $result = $conn->query($sql);
  // echo "<pre>";
  // print_r($result);
  // echo "</pre>";
  // $row = $result->fetch_assoc();
  // print_r($row);

  // $todo_items = array();
  // while($row = $result->fetch_assoc()){
  //   print_r($row);
  // }

  ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>
  <body>
    <div class="container m-3">
        <h1 class="text-center">TODO Application</h1>
        <form action="saveTodo.php" method="POST" class="form-control p-3">
            <input type="text" name="todo" class="form-control" placeholder="Enter Todo list Name">
            <button type="submit" class="btn btn-primary mt-3">Add Todo</button>
        </form>
        <table class="table table-striped mt-3">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Todo Item</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

                <?php
                  while($row = $result->fetch_assoc()){
                ?>
                <tr>
                  <td><?php echo $row['id']; ?></td>
                  <td><?php echo $row['title']; ?></td>
                  <td><button class="btn btn-danger">Delete</button></td>
                </tr>
                <?php } ?>
            </tbody>
          </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
</html>