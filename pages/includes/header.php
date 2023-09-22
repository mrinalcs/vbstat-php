<?php

// Get the client's IP address
$clientIP = $_SERVER['REMOTE_ADDR'];

// Get the current date
$currentDate = date('Y-m-d');

// Create a log file name with the current date
$logFile = "logs/$currentDate.txt";



if (isset($b_page)) {
    $log_4j="*** 404 Error ***";
}




// Log the IP address and accessed URL
$logEntry = "$clientIP : {$_SERVER['REQUEST_URI']} $log_4j" . PHP_EOL;

// Append the log entry to the log file
file_put_contents($logFile, $logEntry, FILE_APPEND);



?>
<?php

//record ref
if (isset($_GET['ref'])) {
    $refValue = $_GET['ref'];
    $date = date('Y-m-d');
    $urlPath = $_SERVER['REQUEST_URI'];

    // Remove the query string from the URL
    $parsedUrl = parse_url($urlPath);
    $urlPath = $parsedUrl['path'];

    // Create an associative array
    $data = array(
        'ref' => $refValue,
        'date' => $date,
        'url' => $urlPath
    );

    // Define the filename
    $ref_filename = "data/ref.json";

    // Convert the data to JSON format
    $json = json_encode($data);

    // Append the JSON data to the file
    file_put_contents($ref_filename, $json, FILE_APPEND);
 
 }  
?>
<?php

// define page vars
$site_title="VBSTAT";
$site_url=""; // Declare url
$image_folder='image'; // image root
$assets_folder='assets';




/*  SEO Optimisation  */
// Limit the title to 60 characters
$title = strlen($title) > 60 ? substr($title, 0, 60) . '...' : $title;

// Limit the description to 160 characters
$description = strlen($description) > 160 ? substr($description, 0, 160) . '...' : $description;





/* Breadcamb */

$curl = (isset($_SERVER['HTTPS']) ? "http" : "https") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$parts = parse_url($curl);
$path_parts = explode('/', $parts['path']);

// Loop through the path parts
for ($i = 1; $i < count($path_parts); $i++) {
    ${'p' . $i} = $path_parts[$i];
}

// fly

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<?php if (!empty($title)) { ?>
    <title><?php echo $title; ?> | VBSTAT</title>
<?php } ?>
<?php if (!empty($description)) { ?>
    <meta name="description" content="<?php echo $description; ?>">
<?php } ?>
<?php if (!empty($keyword)) { ?>
    <meta name="keywords" content="<?php echo $keyword; ?>">
<?php } ?>
    <meta name="author" content="<?php echo !empty($author) ? $author : 'VBSTAT'; ?>">
    <meta name="robots" content="index, follow">
 <?php if (!empty($theme_color)) { ?>
   <meta name="theme-color" content="<?php echo $theme_color; ?>">
<?php } ?>

    <!-- Open Graph meta tags -->
<?php if (!empty($title)) { ?>
    <meta property="og:title" content="<?php echo !empty($og_title) ? $og_title : $title; ?>">
<?php } ?>
 <?php if (!empty($description)) { ?>
   <meta property="og:description" content="<?php echo !empty($og_description) ? $og_description : $description; ?>">
<?php } ?>
<?php if (!empty($og_image_url)) { ?>
    <meta property="og:image" content="<?php echo $og_image_url; ?>">
<?php } ?>
    <meta property="og:url" content="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
  <?php if (!empty($og_type)) { ?>
    <meta property="og:type" content="<?php echo $og_type; ?>">
<?php } ?>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="<?php echo $site_url; ?>/favicon.ico">

    <!-- CSS stylesheets -->
    <link href="<?php echo $site_url.'/'.$assets_folder; ?>/css/style.css" rel="stylesheet" />
     <?php if ($b_page != 404) { echo '<script src="' . $site_url . '/' . $assets_folder . '/js/turbo.js1"></script>'; } ?>

</head>
<body class="bg-white border-gray-200 dark:bg-gray-900  dark:text-white ">

<nav class="bg-white border-gray-200 dark:bg-gray-900">
    <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl p-4">
        <a href="/" class="flex items-center">
            <img src="<?php echo $site_url.'/'.$image_folder; ?>/visva-bharati-logo.jpg" class="h-7 mr-3" alt="VisvaBharati Logo" />
            <span class=" text-2xl font-semibold whitespace-nowrap dark:text-white"><?php echo $site_title; ?></span>
        </a>
        <div class="flex items-center  text-gray-500 dark:text-white "> 
                         




 <script async src="https://cse.google.com/cse.js?cx=20c5bee41a3624e21">
</script>

 <style>
.gsc-control-cse {
    background-color: #fff0;
    border: none!important;
    padding:0px;
    padding-right:20px;

}


@media (prefers-color-scheme: dark) {
.gsc-modal-background-image {
   
    background-color: black;
    
}

.gsc-results-wrapper-overlay {
  
    background: #432828;
 
}
.gs-webResult .gs-snippet, .gs-fileFormatType {
    color: #fff!important;    background: #ffffff00;
}
.gsc-control-cse.gsc-control-cse-en {
    color: #070707;
}
tr {
    color: black;
}
.gs-result .gs-title, .gs-result .gs-title * {
    color: #fff!important;
    text-decoration: none;
}
}
</style>

<div class="hidden lg:block sm:block"><div class="gcse-search"></div> </div>



  <a href="tel:+91(3463)262751" class="mr-6 text-sm  text-gray-500 dark:text-white hover:underline hidden lg:block sm:block">(346)326-2751</a>
   <a href="/contact?email" class="   text-blue-600 dark:text-blue-500 hover:underline">Email us</a>
      

        </div>
    </div>
</nav>
<nav class="bg-gray-50 dark:bg-gray-700">
    <div class="max-w-screen-xl px-4 py-3 mx-auto">
        <div class="flex items-center">
            <ul class="flex flex-row font-medium mt-0 mr-6 space-x-8 text-sm">
                <li>
                    <a href="<?php echo $site_url; ?>/" class="hover:underline">Home</a>
                </li>
                <li>
                    <a href="<?php echo $site_url; ?>/notes" class="hover:underline">Notes</a>
                </li>
                <li>
                    <a href="<?php echo $site_url; ?>/gallery" class="hover:underline">Gallery</a>
                </li>

                <li>
                    <a href="<?php echo $site_url; ?>/guestbook" class="hover:underline">Guestbook</a>
                </li>
              <li>
               <a href="<?php echo $site_url; ?>/about" class="hover:underline">About</a>
               </li>

          <li class=" hidden lg:block sm:block">
            <a href="/contact" class="text-gray-900 dark:text-white hover:underline" title="contact us">Contact</a>
          </li>


          <li class=" hidden lg:block sm:block">
            <a href="/projects" class="text-gray-900 dark:text-white hover:underline" title="contact us">Projects</a>
          </li>


            </ul>
        </div>
    </div>
</nav>

<!-- Breadcrumb --> 

<?php 
if ($p1 != NULL && $b_page!=404) {        // to hide in home screen
?>
 <nav class="flex overflow-x-auto max-w-screen-xl px-4 py-3 mx-auto" aria-label="Breadcrumb">
  <ol class="inline-flex items-center space-x-1 md:space-x-3">

<!-- home page -->
    <li class="inline-flex items-center">
      <a href="/" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
         <svg aria-hidden="true" class="w-4 h-4 mr-2" fill="currentColor" ><use xlink:href="#home-icon"></use></svg>
        Home
      </a>
    </li>
 
<!-- preceding  page -->

   <?php
    for ($i = 1; $i <= count($path_parts) -2; $i++) {       //   for loop p1 to  last part -1 
    $path .= '/' . $path_parts[$i];
$mod_str_1 = str_replace("-", " ", $path_parts[$i]);
      echo '
       <li>
      <div class="flex items-center">
        <svg aria-hidden="true" class="w-6 h-6 text-gray-400"  fill="currentColor" ><use xlink:href="#arrow-icon"></use></svg>
        <a href="' . $path . '" class="ml-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ml-2 dark:text-gray-400 dark:hover:text-white">' . $mod_str_1 . '</a>
      </div>
    </li>
      '; } ?>


<!-- current page -->

    <li aria-current="page">
      <div class="flex items-center">
        <svg aria-hidden="true" class="w-6 h-6 text-gray-400"  fill="currentColor" ><use xlink:href="#arrow-icon"></use></svg>
        <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400"><?php echo ucwords(str_replace("-", " ", end($path_parts))); ?></span>
      </div>
    </li>

  </ol>
</nav>

<!-- icons -->
<svg style="display: none;" >
  <symbol id="home-icon" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
  </symbol>
  <symbol id="arrow-icon" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
  </symbol>
</svg>

    <?php 
    } // end breadcrumb
    ?>
