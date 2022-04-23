<?php
include './src/inc/dbc.php';
include './src/inc/data.php';
include './src/inc/viewdata.php';
include './src/inc/insertdata.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Revpanda</title>
  <link rel="stylesheet" href="./assets/dist/css/public.css">
</head>

<body>
  <div class="wrapper-page">
    <div class="wrapper-page-header-and-content">
      <div class="wrapper-page-content">
        <main class="block-main">
          <div class="container">
            <div class="main-wrapper">
              <form class="layout-form" method="POST">
                <div class="form-group">
                  <label for="text_a">Text A</label>
                  <input type="text" id="text_a" class="form-control" name="text_a">
                </div>
                <div class="form-group">
                  <label for="text_b">Text B</label>
                  <input type="number" id="text_b" class="form-control" name="text_b">
                </div>
                <div class="form-group">
                  <label for="text_c">Text C</label>
                  <input type="text" id="text_c" class="form-control" name="text_c">
                </div>
                <div class="wrapper-button mt-5 d-flex justify-content-center">
                  <button type="submit" class="btn">Submit</button>
                </div>
                <?php
                if (!empty($_POST['text_a'])) {
                  $insertData_1 = new InsertData('table_a', $_POST['text_a']);
                  $insertData_1->insertData();
                }
                if (!empty($_POST['text_b'])) {
                  $insertData_2 = new InsertData('table_b', $_POST['text_b']);
                  $insertData_2->insertData();
                }
                if (!empty($_POST['text_c'])) {
                  $insertData_3 = new InsertData('table_c', $_POST['text_c']);
                  $insertData_3->insertData();
                }
                ?>
              </form>
              <form class="layout-form form-buttons" method="POST">
                <div class="wrapper-button">
                  <button name="table" value="table_a" type="submit" class="btn">Show A</button>
                </div>
                <div class="wrapper-button">
                  <button name="tables_abc" value="tables" type="submit" class="btn">Show A B C</button>
                </div>
                <div class="wrapper-button">
                  <button name="tables_cb" value="tables" type="submit" class="btn">Show C B</button>
                </div>
                <div class="wrapper-button">
                  <button name="tables_b_asc" value="tables" type="submit" class="btn">Show B ASC</button>
                </div>
                <div class="wrapper-button">
                  <button name="tables_b_desc" value="tables" type="submit" class="btn">Show B DESC</button>
                </div>
              </form>
              <?php
              if (isset($_POST['table'])) {
                $data_1 = new ViewData($_POST['table'], '');
                $data_1->showAllData();
              } else if (isset($_POST['tables_abc'])) {
                $data_1 = new ViewData('table_a', '');
                $data_1->showAllData();
                $data_2 = new ViewData('table_b', '');
                $data_2->showAllData();
                $data_3 = new ViewData('table_c', '');
                $data_3->showAllData();
              } else if (isset($_POST['tables_cb'])) {
                $data_1 = new ViewData('table_c', '');
                $data_1->showAllData();
                $data_2 = new ViewData('table_b', '');
                $data_2->showAllData();
              } else if (isset($_POST['tables_b_asc'])) {
                $data_1 = new ViewData('table_b', 'ORDER BY `texts` ASC');
                $data_1->showAllData();
              } else if (isset($_POST['tables_b_desc'])) {
                $data_1 = new ViewData('table_b', 'ORDER BY `texts` DESC');
                $data_1->showAllData();
              }
              ?>
            </div>
          </div>
        </main>
      </div>
    </div>
  </div>
</body>

</html>