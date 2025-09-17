<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleLibr.css">
    <title>Library</title>
</head>
<body>
    <?php 
        include '..\connection.php';
        $year = isset($_GET['variable']) ? $_GET['variable'] : date("Y");
    ?>
    <div class="page">
        <div class="main">
            <div class="c1">
                <h2><?php echo $year ?></h2>
            </div>
            
            <div class="c2">
                  <!-- Οκτώβριος -->
                  <form class="forms" method="post" action="data.php">
                      <div class="book">
                          <div class="imgs"><figure><img src="
                          <?php
                              $sql = "SELECT Path, Title FROM october WHERE Year = ?";
                              $stmt = mysqli_prepare($conn, $sql);
                              mysqli_stmt_bind_param($stmt, "i", $year);

                              mysqli_stmt_execute($stmt);

                              $result = mysqli_stmt_get_result($stmt);
                              if (mysqli_num_rows($result) > 0) {
                                  while ($row = mysqli_fetch_assoc($result)) {
                                      $Title = $row["Title"];
                                      $month = "october";
                                      echo $row["Path"];
                                  }
                              }else{
                                  $Title = "";
                                  echo "..\img\imgAdd.jpg";
                              }
                              $stmt->close();
                              ?>
                          " alt="img"></figure></div>
                          
                          <p class="month">Οκτώβριος</p>
                          <h3 class="title"><?php echo $Title; ?></h3>
                      </div>
                      <input type="hidden" name="years" value="<?php echo $year; ?>">
                      <input type="hidden" name="month" value="<?php echo $month; ?>">
                      <input type="hidden" name="title" value="<?php echo $Title; ?>">
                  </form>

                  <!-- Νοέμβριος -->
                  <form class="forms" method="post" action="data.php">
                      <div class="book">
                          <div class="imgs"><figure><img src="
                          <?php
                              $sql = "SELECT Path, Title FROM november WHERE Year = ?";
                              $stmt = mysqli_prepare($conn, $sql);
                              mysqli_stmt_bind_param($stmt, "i", $year);

                              mysqli_stmt_execute($stmt);

                              $result = mysqli_stmt_get_result($stmt);
                              if (mysqli_num_rows($result) > 0) {
                                  while ($row = mysqli_fetch_assoc($result)) {
                                      $Title = $row["Title"];
                                      $month = "november";
                                      echo  $row["Path"];
                                  }
                              }else{
                                  $Title = "";
                                  echo "..\img\imgAdd.jpg";
                              } 
                          ?>
                          " alt="img"></figure></div>
                          <p class="month">Νοέμβριος</p>
                          <h3 class="title"><?php echo $Title; ?></h3>
                      </div>
                      <input type="hidden" name="years" value="<?php echo $year; ?>">
                      <input type="hidden" name="month" value="<?php echo $month; ?>">
                      <input type="hidden" name="title" value="<?php echo $Title; ?>">
                  </form>

                  <!-- Δεκέμβριος -->
                  <form class="forms" method="post" action="data.php">
                      <div class="book">
                          <div class="imgs"><figure><img src="
                          <?php
                              $sql = "SELECT Path, Title FROM december WHERE Year = ?";
                              $stmt = mysqli_prepare($conn, $sql);
                              mysqli_stmt_bind_param($stmt, "i", $year);

                              mysqli_stmt_execute($stmt);

                              $result = mysqli_stmt_get_result($stmt);
                              if (mysqli_num_rows($result) > 0) {
                                  while ($row = mysqli_fetch_assoc($result)) {
                                      $Title = $row["Title"];
                                      $month = "december";
                                      echo  $row["Path"];
                                  }
                              }
                              else{
                                  $Title = "";
                                  echo "..\img\imgAdd.jpg";
                              }
                          ?>
                          " alt="img"></figure></div>
                          <p class="month">Δεκέμβριος</p>
                          <h3 class="title"><?php echo $Title; ?></h3>
                      </div>
                      <input type="hidden" name="years" value="<?php echo $year; ?>">
                      <input type="hidden" name="month" value="<?php echo $month; ?>">
                      <input type="hidden" name="title" value="<?php echo $Title; ?>">
                  </form>

                  <!-- Ιανουάριος -->
                  <form class="forms" method="post" action="data.php">
                      <div class="book">
                          <div class="imgs"><figure><img src="
                          <?php
                              $sql = "SELECT Path, Title FROM january WHERE Year = ?";
                              $stmt = mysqli_prepare($conn, $sql);
                              mysqli_stmt_bind_param($stmt, "i", $year);

                              mysqli_stmt_execute($stmt);

                              $result = mysqli_stmt_get_result($stmt);
                              if (mysqli_num_rows($result) > 0) {
                                  while ($row = mysqli_fetch_assoc($result)) {
                                      $Title = $row["Title"];
                                      $month = "january";
                                      echo  $row["Path"];
                                  }
                              }
                              else{
                                  $Title = "";
                                  echo "..\img\imgAdd.jpg";
                              }
                          ?>
                          " alt="img"></figure></div>
                          <p class="month">Ιανουάριος</p>
                          <h3 class="title"><?php echo $Title; ?></h3>
                      </div>
                      <input type="hidden" name="years" value="<?php echo $year; ?>">
                      <input type="hidden" name="month" value="<?php echo $month; ?>">
                      <input type="hidden" name="title" value="<?php echo $Title; ?>">
                  </form>

                  <!-- Φεβρουάριος -->
                  <form class="forms" method="post" action="data.php">
                      <div class="book">
                          <div class="imgs"><figure><img src="
                          <?php
                              $sql = "SELECT Path, Title FROM february WHERE Year = ?";
                              $stmt = mysqli_prepare($conn, $sql);
                              mysqli_stmt_bind_param($stmt, "i", $year);

                              mysqli_stmt_execute($stmt);

                              $result = mysqli_stmt_get_result($stmt);
                              if (mysqli_num_rows($result) > 0) {
                                  while ($row = mysqli_fetch_assoc($result)) {
                                      $Title = $row["Title"];
                                      $month = "february";
                                      echo  $row["Path"];
                                  }
                              }
                              else{
                                  $Title = "";
                                  echo "..\img\imgAdd.jpg";
                              }
                          ?>
                          " alt="img"></figure></div>
                          <p class="month">Φεβρουάριος</p>
                          <h3 class="title"><?php echo $Title; ?></h3>
                      </div>
                      <input type="hidden" name="years" value="<?php echo $year; ?>">
                      <input type="hidden" name="month" value="<?php echo $month; ?>">
                      <input type="hidden" name="title" value="<?php echo $Title; ?>">
                  </form>

                  <!-- Μάρτιος -->
                  <form class="forms" method="post" action="data.php">
                      <div class="book">
                          <div class="imgs"><figure><img src="
                          <?php
                              $sql = "SELECT Path, Title FROM march WHERE Year = ?";
                              $stmt = mysqli_prepare($conn, $sql);
                              mysqli_stmt_bind_param($stmt, "i", $year);

                              mysqli_stmt_execute($stmt);

                              $result = mysqli_stmt_get_result($stmt);
                              if (mysqli_num_rows($result) > 0) {
                                  while ($row = mysqli_fetch_assoc($result)) {
                                      $Title = $row["Title"];
                                      $month = "march";
                                      echo  $row["Path"];
                                  }
                              } 
                              else{
                                  $Title = "";
                                  echo "..\img\imgAdd.jpg";
                              }
                          ?>
                          " alt="img"></figure></div>
                          <p class="month">Μάρτιος</p>
                          <h3 class="title"><?php echo $Title; ?></h3>
                      </div>
                      <input type="hidden" name="years" value="<?php echo $year; ?>">
                      <input type="hidden" name="month" value="<?php echo $month; ?>">
                      <input type="hidden" name="title" value="<?php echo $Title; ?>">
                  </form>

                  <!-- Απρίλιος -->
                  <form class="forms" method="post" action="data.php">
                      <div class="book">
                          <div class="imgs"><figure><img src="
                          <?php
                              $sql = "SELECT Path, Title FROM april WHERE Year = ?";
                              $stmt = mysqli_prepare($conn, $sql);
                              mysqli_stmt_bind_param($stmt, "i", $year);

                              mysqli_stmt_execute($stmt);

                              $result = mysqli_stmt_get_result($stmt);
                              if (mysqli_num_rows($result) > 0) {
                                  while ($row = mysqli_fetch_assoc($result)) {
                                      $Title = $row["Title"];
                                      $month = "april";
                                      echo  $row["Path"];
                                  }
                              } else{
                                  $Title = "";
                                  echo "..\img\imgAdd.jpg";
                              }
                          ?>
                          " alt="img"></figure></div>
                          <p class="month">Απρίλιος</p>
                          <h3 class="title"><?php echo $Title; ?></h3>
                      </div>
                      <input type="hidden" name="years" value="<?php echo $year; ?>">
                      <input type="hidden" name="month" value="<?php echo $month; ?>">
                      <input type="hidden" name="title" value="<?php echo $Title; ?>">
                  </form>

                  <!-- Μάιος -->
                  <form class="forms" method="post" action="data.php">
                      <div class="book">
                          <div class="imgs"><figure><img src="
                          <?php
                              $sql = "SELECT Path, Title FROM may WHERE Year = ?";
                              $stmt = mysqli_prepare($conn, $sql);
                              mysqli_stmt_bind_param($stmt, "i", $year);

                              mysqli_stmt_execute($stmt);

                              $result = mysqli_stmt_get_result($stmt);
                              if (mysqli_num_rows($result) > 0) {
                                  while ($row = mysqli_fetch_assoc($result)) {
                                      $Title = $row["Title"];
                                      $month = "may";
                                      echo  $row["Path"];
                                  }
                              } else{
                                  $Title = "";
                                  echo "..\img\imgAdd.jpg";
                              }
                          ?>" alt="img"></figure></div>
                          <p class="month">Μάιος</p>
                          <h3 class="title"><?php echo $Title; ?></h3>
                      </div>
                      <input type="hidden" name="years" value="<?php echo $year; ?>">
                      <input type="hidden" name="month" value="<?php echo $month; ?>">
                      <input type="hidden" name="title" value="<?php echo $Title; ?>">
                  </form>

              </div>
            
            <div class="c3">
                <div class="prev">
                        <form method="get">
                            <input type="hidden" name="variable" value="<?php  echo $year = $year - 1; ?>">
                            <button type="submit"><h4><--<?php echo $year; ?></h4></button>
                    </form>
                </div>
                <div class="next">
                    <form method="get">
                        <input type="hidden" name="variable" value="<?php  echo $year = $year + 2; ?>">
                        <button type="submit"><h4><?php echo $year; ?>--></h4></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <script src="myScriptLib.js"></script>
</body>
</html>