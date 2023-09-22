<?php
$paper = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

 $title='Gallery';
 $description='Welcome to our Gallery page Immerse yourself in a captivating collection of images capturing the vibrant spirit of our Department of Statistics at Siksha-Bhavana (Institute of Science). From academic events and conferences to student activities and faculty achievements, our Gallery page offers a glimpse into the dynamic and engaging experiences within our department.';
 $keyword='Gallery, Department of Statistics, Visuals, Moments, Memories, Academic events, Conferences, Student activities, Faculty achievements, Vibrant spirit, Community, Legacy';
 $author='';             /* declare this otherwise VBSTAT by default*/
 $theme_color='';


//$og_title     /* if not declared default title will be used */
//$og_description   /* if not declared default description will be used */
$og_image_url='https://vbstat.ml/img/2021/dept-of-stat-from-mathdept.jpg';     /* declare this */
//$og_type      /* declare this */





// Include the header
require_once "$includes_folder/header.php";
?>

<div class="pt-6 max-w-screen-xl px-4 py-3 mx-auto md:px-6">
<h1 class="text-4xl font-extrabold dark:text-white ">Gallery</h1>
<p class="text-lg text-gray-500 xl:mr-64 lg:mb-0 dark:text-gray-400 py-5">Photo gallery Images yearwise sorted. </p>
 <?php
foreach (array_diff(scandir("./img"), array('.', '..', 'p')) as $imgFolder) {
    echo '<h2 class="mb-4 text-3xl font-extrabold leading-none tracking-tight text-gray-900 md:text-4xl dark:text-white">' . $imgFolder . '</h2>';
    echo "\n";
    echo '<div class="grid-container">';
    echo "\n";
    foreach (array_diff(scandir("./img/$imgFolder"), array('.', '..')) as $img) {
        $replaced = str_replace('-', ' ', $img);
        $replaced = str_replace('.jpg', '', $replaced);
        $replaced = ucwords($replaced);

        $modified_string = str_replace(".jpg", "", $img);

        echo '
        <div>
            <figure class="max-w-lg">
                <img class="h-auto max-w-full rounded-lg" src="' . $site_url . $url . '/img/' . $imgFolder . '/' . $img . '" alt="' . $replaced . '">
                <figcaption class="mt-2 text-sm text-center text-gray-500 dark:text-gray-400">' . $replaced . '</figcaption>
            </figure>
        </div>';
    }
    echo " </div>\n";
}
?>

 </div>
 <?php
// Include the header
require_once "$includes_folder/footer.php";
?>
