<?php
$Name = "Denis";
$Profession = "QA engineer";
$City_Country = "Novosibirsk/Russia";
$email = "disa.92@list.ru";
$Phone = "+791377548*6";
$skills = [
    [
        'name' => 'Фотошоп',
        'percent' => 30,
    ],
    [
        'name' => 'Иллюстратор',
        'percent' => 70,
    ],
    [
        'name' => 'Медиа',
        'percent' => 40,
    ],
];
$expirience = [
    [
        'job' => 'Chief Executive',
        'dateStart' => 2021,
        'dateFinish' => 'Current',
        'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer malesuada magna eu tellus vestibulum fermentum. Integer suscipit euismod lorem, non rhoncus est gravida in.',
        
    ],
    [
        'job' => 'Lead',
        'dateStart' => 2018,
        'dateFinish' => 2021,
        'description' => 'Aenean vel dignissim mauris. Nullam dapibus, elit a tincidunt fringilla, nisi mauris sagittis metus, quis scelerisque elit elit at magna. Phasellus fermentum a purus ac pellentesque. In sed justo pretium elit tempor molestie a accumsan dui. Nam ut aliquam erat.',
        
    ],
    [
        'job' => 'Middle QA',
        'dateStart' => 2015,
        'dateFinish' => 2018,
        'description' => 'Donec gravida, libero at pharetra eleifend, mi quam bibendum nisi, ac egestas enim sapien in dolor. Ut cursus ipsum ut nulla euismod eleifend. Vivamus congue risus sed est imperdiet, sit amet fringilla quam lacinia. ',
        
    ],
    [
        'job' => 'Junior QA',
        'dateStart' => 2010,
        'dateFinish' => 2015,
        'description' => ' In eget orci commodo, consectetur nulla maximus, dictum tellus. Morbi felis lacus, lobortis sit amet dolor in, ullamcorper imperdiet tellus. ',
        
    ],
];
?>


<!DOCTYPE html>
<html>
<head>
  <title>Мое резюме</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>
<body class="w3-light-grey">
  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
      <!-- Left Column -->
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp"
              style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2><?php echo $Name;?></h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$Profession;?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$City_Country;?></p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$email;?></p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?=$Phone;?></p>
 
            <hr>
 
            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            <?php for ($i = 0; $i < count($skills); $i++) :?>
            <p><?php echo $skills[$i]['name'];?></p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:<?php echo $skills[$i]['percent'];?>%"><?php echo $skills[$i]['percent'];?>%</div>
            </div>
           <?php endfor;?>
            <br>
 
            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Языки</b>
            </p>
            <p>Английский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
            </div>
            <p>Испанский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
            </div>
            <p>Немецкий</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
            </div>
            <br>
          </div>
        </div>
        <br>
        <!-- End Left Column -->
      </div>
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
              <?php for( $i=0; $i < count($expirience); $i++): ?>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><?php echo $expirience[$i]['job'];?></b></h5>
            <h6 class="w3-text-teal">
                <i class="fa fa-calendar fa-fw w3-margin-right"></i>
                <?= $expirience[$i]['dateStart'];?> -
                <?php if ($i==0): ?>
                    <span class="w3-tag w3-teal w3-round">
                        <?= $expirience[$i]['dateFinish'];?>
                </span>
            <?php else: ?>
                <?= $expirience[$i]['dateFinish'];?>
            <?php endif; ?>
            </h6>
            <p><?php echo $expirience[$i]['description'];?></p>
            <hr>
          </div>
            <?php endfor; ?>
          
 
        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Образование</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>gb.ru</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Forever</h6>
            <p>Web Development! All I need to know in one place</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>London Business School</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2013 - 2015</h6>
            <p>Master Degree</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>School of Coding</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2010 - 2013</h6>
            <p>Bachelor Degree</p><br>
          </div>
        </div>
        <!-- End Right Column -->
      </div>
      <!-- End Grid -->
    </div>
    <!-- End Page Container -->
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>
</body>
</html>