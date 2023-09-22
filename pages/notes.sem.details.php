<?php
$paper = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));

 $title='Paper '.str_replace(array('-', '_'), ' ', ucfirst(explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))[2])).' Semester '.explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))[3] ;
 $description='Available semester notes and handouts of '.explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))[2];
 $keyword=' notes ,'. explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))[2].', Semester '.explode('/', parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH))[3];
 $author='';             /* declare this otherwise VBSTAT by default*/
 $theme_color='red';


//$og_title     /* if not declared default title will be used */
//$og_description   /* if not declared default description will be used */
//$og_image_url     /* declare this */
//$og_type      /* declare this */





// Include the header
require_once "$includes_folder/header.php";
?>

<div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">
  <h1 class="mb-5 text-3xl font-extrabold tracking-tight text-gray-900 dark:text-white">
    <?php if (is_numeric($paper)) {
      echo 'Semester : ';
    }
    echo str_replace(array('-', '_'), ' ', ucfirst($paper));
    ?>
  </h1>

  <?php
  if ($p3 == NULL) {
    echo '<ul class="bg-gray-100 text-sm font-medium rounded-lg dark:bg-gray-700 dark:text-white">';
    echo '<li class="w-full px-4 py-2 rounded-b-lg">
      <div class="flex items-center space-x-4">
        <div class="flex-1 min-w-0">
          <p class="text-sm font-medium text-gray-900 truncate dark:text-white">Semester</p>
          <p class="text-sm text-gray-500 truncate dark:text-gray-400"></p>
        </div>
        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white"></div>
      </div>
    </li>';

    foreach (array_diff(scandir("./note/$paper"), array('.', '..', 'syllabus.txt')) as $file) {
      $fz = filesize("./note/$paper/$file");
      $fz = round($fz / 1024 / 1024, 2); // kilobytes with two digits

      echo '
        <a href="' . $url . '/notes/'.$p2.'/' . $file . '">
          <li class="py-2 px-4 border-gray-200 border-a dark:border-gray-600">
            <div class="flex items-center space-x-4">
              <div class="flex-1 min-w-0">
                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">' . $file . '</p>
              </div>
            </div>
          </li>
        </a>';
    }

    echo "</ul>\n";
  } else {
    echo '<ul class="bg-gray-100 text-sm font-medium rounded-lg dark:bg-gray-700 dark:text-white">';
    echo '<li class="w-full px-4 py-2 rounded-b-lg">
      <div class="flex items-center space-x-4">
        <div class="flex-1 min-w-0">
          <p class="text-sm font-medium text-gray-900 truncate dark:text-white">Title</p>
          <p class="text-sm text-gray-500 truncate dark:text-gray-400"></p>
        </div>
        <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
          <p class="text-sm font-medium text-gray-900 truncate dark:text-white">Size</p>
        </div>
      </div>
    </li>';

    foreach (array_diff(scandir("./note/$p2/$p3"), array('.', '..', 'syllabus.txt')) as $file) {
      $fz = filesize("./note/$p2/$p3/$file");
      $fz = round($fz / 1024 / 1024, 2); // kilobytes with two digits

      echo '
        <a target="_blank" href="' . $url . '/note/'.$p2.'/'.$p3.'/' . $file . '">
          <li class="py-2 px-4 border-gray-200 border-a dark:border-gray-600">
            <div class="flex items-center space-x-4">
              <div class="flex-1 min-w-0">
                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">' . $file . '</p>
                <p class="text-sm text-gray-500 truncate dark:text-gray-400"></p>
              </div>
              <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">' . $fz . ' mb</p>
              </div>
            </div>
          </li>
        </a>';
    }

    echo "</ul>\n";
  }
  ?>
</div>

 
<?php
// Include the header
require_once "$includes_folder/footer.php";
?>
