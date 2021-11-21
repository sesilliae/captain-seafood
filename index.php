<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>CAPTAIN SEAFOOD</title>
  <link rel="stylesheet" href="css/foundation.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="js/vendor/modernizr.js"></script>
 
</head>

<body>


  <!--navbar-->
  <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Captain Seafood</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li class="active"><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php
    
          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>


  <!--Jumbotron-->
  <img
    data-interchange="[images/Banner_captseafood.png, (retina)], [images/Banner_captseafood.png, (large)], [images/Banner_captseafood.png, (mobile)], [images/Banner_captseafood.png, (medium)]">
  <noscript><img src="images/Banner_captseafood.png"></noscript>

  <!--Layanan-->
  <div class="container" style="margin-top: 100px">
    <div class="text-center text-dark">
      <h1 class="display-7 fw-bolder" style="margin-bottom: 50px;">Keunggulan Kami</h1>
    </div>
    <div class="row justify-content-center" style="justify-content: center; margin:auto">

      <div class="col col-md-4 mb-3">
        <div class="col d-flex align-items-start">
          <div class="icon-square bg-white text-dark flex-shrink-0 me-3">
            <svg widht="60" height="60" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              enable-background="new 0 0 64 64" version="1.1" viewBox="0 0 64 64" xml:space="preserve">
              <g id="row_4" />
              <g id="row_3" />
              <g id="row_2" />
              <g id="row_1">
                <g id="quality">
                  <path
                    d="M45.4,22.3l5.3-13c0.1-0.3,0.1-0.7-0.1-1l-0.4-0.5h-0.5l-13.5,3.6L25.9,2.3L25.5,2h-0.4    c-0.6,0-1.1,0.5-1.1,1l-0.8,14l-11.7,7.3c-0.4,0.2-0.5,0.6-0.5,1l0.1,0.7l13.4,5.4L31,51.2c0.1,0.5,0.6,0.8,1,0.8s0.9-0.3,1-0.7    l6.3-17l12.5,1.5l0.1,0c0.4,0,0.8-0.2,0.9-0.6l0.3-0.6L45.4,22.3z"
                    fill="#FFD54F" />
                  <g>
                    <polygon fill="#FFECB3" points="38,13 35.7,13.7 33,11.3 41.5,32.6 46,33.1    " />
                    <polygon fill="#FFE082" points="28.3,7.1 25.9,5 25.2,18.2 24.3,18.7 34,43 38,32.1 38.3,32.2    " />
                  </g>
                  <path
                    d="M32.2,49.7l-1.7-5.1l1.1-0.4l0.7,2l1.3-3.6l1.1,0.4L32.2,49.7z M35.4,40.9l-1.1-0.4l3.5-9.4l4.7,0.6    l-0.1,1.1l-3.8-0.5L35.4,40.9z M49.7,32.8l-1.2-2l1-0.6l1.2,2L49.7,32.8z M26.2,31.4L25.7,30l-13-5.2l1.5-0.9l0.3,0.4l12.2,4.9    l0.6,1.9L26.2,31.4z M16.8,23.6l-0.6-1l7.8-4.9l0.6,1L16.8,23.6z M45.7,18.7l-1.1-0.4l3.5-8.5l1.1,0.4L45.7,18.7z M35.9,13.6    l-2.1-1.9l0.8-0.9l1.7,1.5l10.6-2.8l0.3,1.1L35.9,13.6z M26.8,5.6L26.1,5l-0.6,0l0.1-2l2,1.8L26.8,5.6z"
                    fill="#FFCA28" />
                  <g>
                    <rect fill="#FF7043" height="5" width="22" x="21" y="50" />
                    <rect fill="#B71C1C" height="8" width="30" x="17" y="53" />
                    <rect fill="#3E2723" height="2" width="32" x="16" y="60" />
                    <rect fill="#FFB300" height="6" width="14" x="25" y="53" />
                    <rect fill="#FBE9E7" height="4" width="12" x="26" y="54" />
                  </g>
                  <g>
                    <path
                      d="M16.8,49l-4.2-5.7c-1-3.1-1-6.3,0-9.3c0.1-0.3,0.4-0.6,0.8-0.7c0.4-0.1,0.7,0.1,1,0.3     C17.8,37.9,18.8,43.8,16.8,49z"
                      fill="#FFCA28" />
                    <path
                      d="M11.4,41.1c-0.4-0.9-0.7-1.6-0.9-2.3c1.7-5.2,0.6-10.9-2.9-15c-0.2-0.2-0.5-0.3-0.7-0.3     c-0.5,0-0.8,0.3-1,0.7c-1.6,5.3-0.1,11.1,3.7,15.1l0,0c0.2,0.7,0.5,1.4,0.9,2.3L11.4,41.1z"
                      fill="#FFCA28" />
                    <path d="M14.5,44c-0.8,0-1.5-0.9-1.5-2s0.7-2,1.5-2s1.5,0.9,1.5,2S15.3,44,14.5,44z" fill="#FFB300" />
                    <path
                      d="M7.8,39.4c-0.5,0-1.1-0.3-1.6-0.7c-0.4-0.4-0.6-0.8-0.7-1.2c-0.1-0.5,0-1,0.3-1.3     c0.6-0.6,1.7-0.4,2.5,0.4c0.4,0.4,0.6,0.8,0.7,1.2c0.1,0.5,0,1-0.3,1.3C8.5,39.3,8.1,39.4,7.8,39.4z"
                      fill="#FFB300" />
                    <path
                      d="M19,50.4c-0.7-0.5-1.5-1.1-2.3-1.9c-1.7-5.2-6-9.2-11.4-10.3c-0.4-0.1-0.8,0.1-1,0.4     c-0.2,0.3-0.2,0.6-0.1,0.9c1.9,5.1,6.5,8.9,11.9,9.8c0.8,0.7,1.6,1.4,2.3,1.9L19,50.4z"
                      fill="#FFB300" />
                  </g>
                  <g>
                    <path
                      d="M47.2,49l4.2-5.7c1-3.1,1-6.3,0-9.3c-0.1-0.3-0.4-0.6-0.8-0.7c-0.4-0.1-0.7,0.1-1,0.3     C46.2,37.9,45.2,43.8,47.2,49z"
                      fill="#FFE082" />
                    <path
                      d="M52.6,41.1c0.4-0.9,0.7-1.6,0.9-2.3c-1.7-5.2-0.6-10.9,2.9-15c0.2-0.2,0.5-0.3,0.7-0.3     c0.5,0,0.8,0.3,1,0.7c1.6,5.3,0.1,11.1-3.7,15.1l0,0c-0.2,0.7-0.5,1.4-0.9,2.3L52.6,41.1z"
                      fill="#FFD54F" />
                    <path d="M48,42c0-1.1,0.7-2,1.5-2s1.5,0.9,1.5,2s-0.7,2-1.5,2S48,43.1,48,42z" fill="#FFB300" />
                    <path
                      d="M55.3,39c-0.3-0.3-0.4-0.8-0.3-1.3c0.1-0.4,0.3-0.9,0.7-1.2c0.8-0.8,1.9-0.9,2.5-0.4     c0.3,0.3,0.4,0.8,0.3,1.3c-0.1,0.4-0.3,0.9-0.7,1.2c-0.5,0.5-1,0.7-1.6,0.7C55.9,39.4,55.5,39.3,55.3,39z"
                      fill="#FFB300" />
                    <path
                      d="M45,50.4c0.7-0.5,1.5-1.1,2.3-1.9c1.7-5.2,6-9.2,11.4-10.3c0.4-0.1,0.8,0.1,1,0.4     c0.2,0.3,0.2,0.6,0.1,0.9c-1.9,5.1-6.5,8.9-11.9,9.8c-0.8,0.7-1.6,1.4-2.3,1.9L45,50.4z"
                      fill="#FFCA28" />
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <div>
            <h2>Berkualitas</h2>
            <p style="text-align: justify;">Kami menyediakan produk ikan yang sangat berkualitas dan dipacking melalu proses yang efisien dan efektif. Produk ini dijamin memiliki nilai hidangan yang tinggi.</p>
          </div>
        </div>
      </div>
      <div class="col col-md-4 mb-3 ">
        <div class="col d-flex align-items-start">
          <div class="icon-square bg-white text-dark flex-shrink-0 me-3">
            <svg widht="60" height="60" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
              style="enable-background:new 0 0 32 32;" version="1.1" viewBox="0 0 32 32" xml:space="preserve">
              <g id="Guides" />
              <g id="_x32_0" />
              <g id="_x31_9" />
              <g id="_x31_8" />
              <g id="_x31_7" />
              <g id="_x31_6" />
              <g id="_x31_5" />
              <g id="_x31_4" />
              <g id="_x31_3" />
              <g id="_x31_2" />
              <g id="_x31_1" />
              <g id="_x31_0" />
              <g id="_x30_9" />
              <g id="_x30_8" />
              <g id="_x30_7" />
              <g id="_x30_6" />
              <g id="_x30_5" />
              <g id="_x30_4" />
              <g id="_x30_3" />
              <g id="_x30_2" />
              <g id="_x30_1">
                <g>
                  <path
                    d="M29,15c-0.5522461,0-1,0.4472656-1,1c0,6.6171875-5.3833008,12-12,12S4,22.6171875,4,16S9.3833008,4,16,4    c4.144043,0,7.9399414,2.0947266,10.1542969,5.6035156c0.2958984,0.4667969,0.9135742,0.6064453,1.3793945,0.3115234    c0.4672852-0.2949219,0.6069336-0.9121094,0.3120117-1.3798828C25.2626953,4.4433594,20.8344727,2,16,2    C8.2802734,2,2,8.2802734,2,16s6.2802734,14,14,14s14-6.2802734,14-14C30,15.4472656,29.5522461,15,29,15z" />
                  <path
                    d="M5,17c0,0.5527344,0.4477539,1,1,1h1.1195679c2.4412842,4.5059814,8.0905762,7.7049561,8.3945923,7.8740234    C15.6655273,25.9580078,15.8325195,26,16,26s0.3344727-0.0419922,0.4858398-0.1259766    C16.789856,25.7049561,22.4391479,22.5059814,24.8804321,18H26c0.5522461,0,1-0.4472656,1-1s-0.4477539-1-1-1h-0.3004761    C25.8804321,15.3497925,26,14.6846313,26,14c0-3.3085938-2.6865234-6-5.9882813-6C18.5200195,8,17.0874023,8.5566406,16,9.5263672    C14.9125977,8.5566406,13.4799805,8,11.9882813,8C8.6865234,8,6,10.6914063,6,14c0,0.6846313,0.1195679,1.3497925,0.3004761,2H6    C5.4477539,16,5,16.4472656,5,17z M16,23.8369141C14.7472534,23.0668945,11.3777466,20.8300781,9.4349365,18H12    c0.2651367,0,0.5195313-0.1054688,0.7070313-0.2929688l0.9277344-0.9277344l1.4365234,3.5917969    c0.125,0.3125,0.3984375,0.5410156,0.7275391,0.6083984C15.8657227,20.9931641,15.9331055,21,16,21    c0.2626953,0,0.5175781-0.1035156,0.7070313-0.2929688L19.4140625,18h3.151001    C20.6222534,20.8300781,17.2527466,23.0668945,16,23.8369141z M8,14c0-2.2060547,1.7890625-4,3.9882813-4    c1.2856445,0,2.4550781,0.5820313,3.2089844,1.5966797c0.3769531,0.5078125,1.2285156,0.5078125,1.6054688,0    C17.5566406,10.5820313,18.7260742,10,20.0117188,10C22.2109375,10,24,11.7939453,24,14    c0,0.6799316-0.1488647,1.3479004-0.3869629,2H19c-0.2651367,0-0.5195313,0.1054688-0.7070313,0.2929688l-1.9277344,1.9277344    l-1.4365234-3.5917969c-0.125-0.3125-0.3984375-0.5410156-0.7275391-0.6083984    c-0.3286133-0.0654297-0.6699219,0.0351563-0.9082031,0.2724609L11.5859375,16H8.3869629C8.1488647,15.3479004,8,14.6799316,8,14z    " />
                </g>
              </g>
            </svg>
          </div>
          <div>
            <h2>Sehat</h2>
            <p style="text-align: justify;">Produk yang kami sediakan tidak menggunakan bahan pengawet atau pewarna. Produk kami sangat original dan bernilai tinggi manfaatnya. </p>
          </div>
        </div>
      </div>
      <div class="col col-md-4 mb-3">
        <div class="col d-flex align-items-start">
          <div class="icon-square bg-white text-dark flex-shrink-0 me-3">
            <svg widht="60" height="60" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
              <g data-name="Fill out line" id="Fill_out_line">
                <path
                  d="M349.54,166.92A22.45786,22.45786,0,0,1,344,176L176,344H104L16,432V296l32-32V168l80-80a45.1062,45.1062,0,0,1,13.1499,34.85L156.04,107.96,232,32a22.62742,22.62742,0,0,1,32,32l16-16a22.62742,22.62742,0,0,1,32,32L296,96a22.62742,22.62742,0,0,1,32,32l-16,16a22.62525,22.62525,0,0,1,37.54,22.92Z"
                  style="fill:#f8d2b3" />
                <path
                  d="M424,160a31.85527,31.85527,0,0,1-5.5498,18.02A32.23109,32.23109,0,0,1,406.23,188.67,31.90678,31.90678,0,0,1,392,192v32H232V176a32.00009,32.00009,0,0,1-14.22-60.67A23.99924,23.99924,0,1,1,253.7,85.75,31.98,31.98,0,0,1,296,90.85a32.00885,32.00885,0,0,1,54.2002,10.56A31.98618,31.98618,0,0,1,400,128c0,.34-.02.67-.03027,1A32.01889,32.01889,0,0,1,424,160Z"
                  style="fill:#8ed0eb" />
                <path
                  d="M256.12012,346H241.40991A39.99023,39.99023,0,1,1,169.22,358.15991a23.99546,23.99546,0,0,1-26.3-39.01A39.99893,39.99893,0,1,1,205.95,275.33h50.17017Z"
                  style="fill:#8ed0eb" />
                <path
                  d="M496,408v88H448l-56-56H296l-80-80a45.10708,45.10708,0,0,1,34.8501-13.15L160,256a22.62742,22.62742,0,0,1,32-32l-16-16a22.62742,22.62742,0,0,1,32-32l16,16a22.62742,22.62742,0,0,1,32-32l16,16a22.62742,22.62742,0,0,1,32-32L472,312v72Z"
                  style="fill:#f8d2b3" />
                <path
                  d="M472,256a23.99827,23.99827,0,0,1-32.64014,22.39A32.00654,32.00654,0,1,1,377.27,263.03,23.98042,23.98042,0,0,1,371.1001,219.78,23.73871,23.73871,0,0,1,368,208a23.9952,23.9952,0,0,1,47.1499-6.3A23.71232,23.71232,0,0,1,424,200a23.99189,23.99189,0,0,1,22.60986,32.04c.46-.03.92041-.04,1.39014-.04A24.00619,24.00619,0,0,1,472,256Z"
                  style="fill:#8ed0eb" />
                <path
                  d="M480,380.68994V312a8.00793,8.00793,0,0,0-2.33984-5.66L457.79,286.47A32.00352,32.00352,0,0,0,455.98,225.01c.02-.34.02-.67.02-1.01a32.036,32.036,0,0,0-32-32,33.29294,33.29294,0,0,0-4.12988.26c-.43994-.77-.90039-1.52-1.40039-2.24A40.02244,40.02244,0,0,0,407.71,123.22,40.046,40.046,0,0,0,368,88a39.60814,39.60814,0,0,0-14.2002,2.61A40.04273,40.04273,0,0,0,325.46,72.38,30.06625,30.06625,0,0,0,326.62988,64,30.62085,30.62085,0,0,0,277.46,39.63a30.62193,30.62193,0,0,0-51.11987-13.29L147.22,105.47a52.83716,52.83716,0,0,0-13.56006-23.13,8.01507,8.01507,0,0,0-11.31982,0l-80,80A8.00818,8.00818,0,0,0,40,168v92.69L18.34009,282.34l11.31982,11.31994,24-24A8.0079,8.0079,0,0,0,56,264V171.31l71.39014-71.38a37.30331,37.30331,0,0,1-5.05,46.41l-24,24a8.015,8.015,0,0,0,0,11.32,48.54989,48.54989,0,0,1,0,68.68l11.31982,11.32A64.60138,64.60138,0,0,0,114.97,176.34l18.68994-18.68a53.01523,53.01523,0,0,0,15.18018-31.19l88.81982-88.81a14.62295,14.62295,0,1,1,20.67993,20.68L248.22,68.46a31.96722,31.96722,0,0,0-43.78,43.78l-66.09985,66.1,11.31982,11.32,42.47-42.47a39.87019,39.87019,0,0,0,3.9502,14.47,30.61512,30.61512,0,0,0-28.4502,48.89A30.58073,30.58073,0,0,0,145.37012,240a30.09219,30.09219,0,0,0,.48,5.39A48.034,48.034,0,0,0,132.27,320.06006,31.682,31.682,0,0,0,128,336H104a8.00757,8.00757,0,0,0-5.65991,2.34l-80,80,11.31982,11.31994L107.31006,352h24.99A32.01717,32.01717,0,0,0,160,368a47.99951,47.99951,0,0,0,84.2,31.52l46.13989,46.13989A8.00827,8.00827,0,0,0,296,448h92.68994l53.6499,53.65991L453.66016,490.34l-56-56A8.00815,8.00815,0,0,0,392,432H299.31006l-71.38013-71.38a37.13393,37.13393,0,0,1,19.51-5.86l26.8999,26.8999L285.66016,370.34l-120.00025-120a14.623,14.623,0,1,1,20.68018-20.68L306.33984,349.65991,317.66016,338.34l-136.00025-136a14.623,14.623,0,1,1,20.68018-20.68L338.33984,317.65991,349.66016,306.34l-120.00025-120a14.623,14.623,0,1,1,20.68018-20.68L370.33984,285.65991l.0503-.04992a39.99119,39.99119,0,0,0,71.50976,7.61L464,315.31006V384a8.00766,8.00766,0,0,0,2.33984,5.65991l16,16L493.66016,394.34ZM233.46,340.78A53.16971,53.16971,0,0,0,210.34009,354.34a8.01492,8.01492,0,0,0,0,11.31994l22.5,22.5a31.94028,31.94028,0,0,1-55.8-28.08984,7.99738,7.99738,0,0,0-10.87012-9.3501A15.71672,15.71672,0,0,1,160,352a16,16,0,0,1,0-32V304a31.83652,31.83652,0,0,0-16.5,4.59,32.01463,32.01463,0,0,1,9.21-48.71c.51.61,1.06006,1.2,1.63013,1.78ZM269.66016,69.66l16-16a14.62286,14.62286,0,1,1,20.67968,20.68l-.10986.11A39.62,39.62,0,0,0,295.99023,80.02,39.78353,39.78353,0,0,0,267,72.32ZM352,240a31.87065,31.87065,0,0,0,.41016,5.09l-74.75-74.75a14.62286,14.62286,0,0,1,20.67968-20.68l65.47022,65.46A31.83759,31.83759,0,0,0,352,240Zm90.24023,30.92993A8.00507,8.00507,0,0,0,431.52,276.81006,24.00289,24.00289,0,1,1,390,256.13l-12-10.59a39.384,39.384,0,0,0-4.60986,6.43,16.0036,16.0036,0,0,1,5.96-27.29,7.99965,7.99965,0,0,0,3.33984-13.31l-73.02978-73.03A30.62207,30.62207,0,0,0,258.54,151.63a30.66169,30.66169,0,0,0-40.19995,2.71,30.21579,30.21579,0,0,0-4.37012,5.52,24.02937,24.02937,0,0,1,3.81006-35.2A31.7066,31.7066,0,0,0,232,128V112a16,16,0,1,1,11.03-27.57,39.628,39.628,0,0,0-5.67017,7.56l13.8501,8.02A23.99978,23.99978,0,0,1,296,112h16a39.84824,39.84824,0,0,0-5.33008-19.96,24.01664,24.01664,0,0,1,33.62988,7.14A39.83979,39.83979,0,0,0,328,128h16a23.99732,23.99732,0,0,1,46.62988-7.98,40.17231,40.17231,0,0,0-33.27,19.97l13.8501,8.02a24.00366,24.00366,0,1,1,35.00977,31.34H406.21A31.69051,31.69051,0,0,0,392,176v16a16.02842,16.02842,0,0,1,15.43994,11.78,7.99594,7.99594,0,0,0,10.66992,5.34,16.02078,16.02078,0,0,1,20.98,20.23,8.012,8.012,0,0,0,7.99024,10.66c.23-.02.46-.01.68994-.01H448a16,16,0,0,1,0,32A15.8618,15.8618,0,0,1,442.24023,270.92993Z" />
              </g>
            </svg>
          </div>
          <div>
            <h2>Higienis</h2>
            <p style="text-align: justify;">Produk ini mengedepankan proses pengemasan dengan alat yang bersih dan tidak campur langsung kepada kulit tangan. Proses pengemasan memakai alat yang canggih dan sudah pasti bersih.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--Jumbotron-->
  <img src="images/Untitled design (2).png" class="img-fluid" alt="..." style="margin-top: 100px; width: auto;">

  <!--Abdout-->
  <div class="container" style="margin-top: 100px; " >
    <div class="row" style="margin: auto;">
      <div class="col-md-5" >
        <img src="images/pexels-quang-nguyen-vinh-2131967 (1).jpg" style="height: auto;"  class="img" alt="Nelayan">
      </div>
      <div class="col-md-7" >
        <h2>Tujuan Kami</h2>
        <p  style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: 12"><li> Memajukan kehidupan didaerah pesisir, terutama untuk para nelayan</li></p>

        <p  style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: 12"><li> Menghidupkan perkembangan teknologi di area pesisir</li></p>
      
        <p  style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: 12"><li> Menyebarluaskan Produk nasional ke Internasional</li> </p>
    
        <p  style="font-family:Verdana, Geneva, Tahoma, sans-serif; font-size: 12"><li> Membangun kemitraan yang berkompeten, sehat dan kuat dalam mendistribusikan produk ikan laut segar dan aktivitas value creation kepada konsumen akhir.</li></p>
      </div>
    </div>
  </div><br><br><br>

  <!--Footer-->
    <footer>
      <p style="text-align:center; font-size:0.8em;">&copy; Captain Seafood. All Rights Reserved.</p>
    </footer>


  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <script src="js/vendor/jquery.js"></script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
</body>

</html>