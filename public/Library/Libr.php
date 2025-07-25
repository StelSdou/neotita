<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleLibr.css">
    <link rel="stylesheet" href="..\Style\StyleMenu.css">
    <link rel="stylesheet" href="..\Style\StyleFoo.css">
    <title>Library</title>
</head>
<>

<nav id="navbar">
      <ul class="navbar-items flexbox-col">
        <li class="navbar-logo flexbox-left">
          <a class="navbar-item-inner flexbox" href="..\index.html">
            <img src="../img/logos/Neot_Logo.png" alt="logo" />
          </a>
        </li>
        <li class="navbar-item flexbox-left">
          <a class="navbar-item-inner flexbox-left" href="..\index.html">
            <div class="navbar-item-inner-icon-wrapper flexbox">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="ionicon"
                viewBox="0 0 512 512"
              >
                <path
                  d="M80 212v236a16 16 0 0016 16h96V328a24 24 0 0124-24h80a24 24 0 0124 24v136h96a16 16 0 0016-16V212"
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="32"
                />
                <path
                  d="M480 256L266.89 52c-5-5.28-16.69-5.34-21.78 0L32 256M400 179V64h-48v69"
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="32"
                />
              </svg>
            </div>
            <span class="link-text">Home</span>
          </a>
        </li>
        <li class="navbar-item flexbox-left">
          <a class="navbar-item-inner flexbox-left" id="kat">
            <div class="navbar-item-inner-icon-wrapper flexbox">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="100"
                height="100"
                viewBox="0 0 100 100"
              >
                <!-- Background Circle without color -->
                <circle
                  cx="50"
                  cy="50"
                  r="48"
                  stroke="currentColor"
                  stroke-width="5"
                  fill="none"
                />

                <!-- Cross with Rounded Ends -->
                <line
                  x1="50"
                  y1="20"
                  x2="50"
                  y2="65"
                  stroke="currentColor"
                  stroke-width="6"
                  stroke-linecap="round"
                />
                <line
                  x1="35"
                  y1="35"
                  x2="65"
                  y2="35"
                  stroke="currentColor"
                  stroke-width="6"
                  stroke-linecap="round"
                />

                <!-- Open Book -->
                <path
                  d="M30,69.2 L30,90"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="4"
                />
                <path
                  d="M70,69.2 L70,90"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="4"
                />
                <path
                  d="M30,70 L50,80 L70,70"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="4"
                />

                <line
                  x1="50"
                  y1="80"
                  x2="50"
                  y2="90"
                  stroke="currentColor"
                  stroke-width="4"
                />
                <!-- Center Spine -->
              </svg>
            </div>
            <span class="link-text withKatix"
              >Κατήχηση
              <svg
                id="arrow"
                xmlns="http://www.w3.org/2000/svg"
                class="ionicon"
                viewBox="0 0 512 512"
              >
                <path
                  d="M321.94 98L158.82 237.78a24 24 0 000 36.44L321.94 414c15.57 13.34 39.62 2.28 39.62-18.22v-279.6c0-20.5-24.05-31.56-39.62-18.18z"
                />
              </svg>
            </span>
          </a>
        </li>
        <!-- katix menu -->
        <li class="navbar-item flexbox-left" id="mm">
          <ul class="navbar-items flexbox-col">
            <li class="navbar-item flexbox-left">
              <a class="navbar-item-inner flexbox-left" href="../catecheticalΑid.html">
                <span class="link-text m">Κατηχητικά βοηθήματα</span>
              </a>
            </li>
            <li class="navbar-item flexbox-left">
              <a class="navbar-item-inner flexbox-left" href="../plan.html">
                <span class="link-text m">Πλάνο Κατήχησης</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="navbar-item flexbox-left">
          <a
            class="navbar-item-inner flexbox-left"
            href="Libr.php"
          >
            <div class="navbar-item-inner-icon-wrapper flexbox">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="ionicon"
                viewBox="0 0 512 512"
              >
                <path
                  d="M256 160c16-63.16 76.43-95.41 208-96a15.94 15.94 0 0116 16v288a16 16 0 01-16 16c-128 0-177.45 25.81-208 64-30.37-38-80-64-208-64-9.88 0-16-8.05-16-17.93V80a15.94 15.94 0 0116-16c131.57.59 192 32.84 208 96zM256 160v288"
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="32"
                />
              </svg>
            </div>
            <span class="link-text">Περιοδικά</span>
          </a>
        </li>
        <li class="navbar-item flexbox-left">
          <a class="navbar-item-inner flexbox-left" href="#footer">
            <div class="navbar-item-inner-icon-wrapper flexbox">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="ionicon"
                viewBox="0 0 512 512"
              >
                <path
                  d="M248 64C146.39 64 64 146.39 64 248s82.39 184 184 184 184-82.39 184-184S349.61 64 248 64z"
                  fill="none"
                  stroke="currentColor"
                  stroke-miterlimit="10"
                  stroke-width="32"
                />
                <path
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="32"
                  d="M220 220h32v116"
                />
                <path
                  fill="none"
                  stroke="currentColor"
                  stroke-linecap="round"
                  stroke-miterlimit="10"
                  stroke-width="32"
                  d="M208 340h88"
                />
                <path d="M248 130a26 26 0 1026 26 26 26 0 00-26-26z" />
              </svg>
            </div>
            <span class="link-text">Info</span>
          </a>
        </li>
      </ul>
    </nav>

    <?php 
        include 'connection.php';
        $year = isset($_GET['variable']) ? $_GET['variable'] : date("Y");
    ?>
    <div class="all">
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
                                  echo "img\img.jpg";
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
                                  echo "img\img.jpg";
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
                                  echo "img\img.jpg";
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
                                  echo "img\img.jpg";
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
                                  echo "img\img.jpg";
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
                                  echo "img\img.jpg";
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
                                  echo "img\img.jpg";
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
                                  echo "img\img.jpg";
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
                              <button type="submit"><h4><?php echo $year; ?><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M321.94 98L158.82 237.78a24 24 0 000 36.44L321.94 414c15.57 13.34 39.62 2.28 39.62-18.22v-279.6c0-20.5-24.05-31.56-39.62-18.18z"/></svg></h4></button>
                      </form>
                  </div>
                  <div class="next">
                      <form method="get">
                          <input type="hidden" name="variable" value="<?php  echo $year = $year + 2; ?>">
                          <button type="submit"><h4><?php echo $year; ?><svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M190.06 414l163.12-139.78a24 24 0 000-36.44L190.06 98c-15.57-13.34-39.62-2.28-39.62 18.22v279.6c0 20.5 24.05 31.56 39.62 18.18z"/></svg></h4></button>
                      </form>
                  </div>
              </div>
          </div>
      </div>

      <footer class="footer" id="footer">
        <div class="grid">
          <div class="logoFloo">
            <img src="../img/logos/Neot_Logo.png" alt="logo" />
          </div>
          <div class="inf">
            <div class="im">
              <a target="_blank" href="https://maps.app.goo.gl/YDU1SQ7ZfkLvtfat5"
                ><img src="../img/icons/location-outline.svg" alt="location"
              /></a>
              <a target="_blank" href=""
                ><img src="../img/icons/call-outline.svg" alt="call"
              /></a>
              <a target="_blank" href="https://imperisteriou.gr/"
                ><img src="../img/icons/link-outline.svg" alt="link"
              /></a>
              <a target="_blank" href=""
                ><img src="../img/icons/mail-outline.svg" alt="mail"
              /></a>
            </div>
            <div class="in">
              <a target="_blank" href="https://maps.app.goo.gl/YDU1SQ7ZfkLvtfat5"
                ><p>οδός:<br />Βερανζέρου 9, Περιστέρι 121 35</p></a
              >
              <a target="_blank" href=""
                ><p>
                  Τηλ:<br />
                  697 420 2245
                </p></a
              >
              <a target="_blank" href="https://imperisteriou.gr/"
                ><p>Μητρόπολη:<br />https://imperisteriou.gr/</p></a
              >
              <a target="_blank" href=""
                ><p>
                  mail:<br />
                  imperisteriou@grneotitos.gr
                </p></a
              >
            </div>
          </div>
        </div>
      </footer>
    </div>
    
    <script src="../Js/menu.js"></script>
    <script src="myScriptLib.js"></script>
</body>
</html>