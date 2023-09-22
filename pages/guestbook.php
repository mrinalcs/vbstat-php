<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $message = $_POST['message'] ?? '';

    if (!empty($name) && !empty($message)) {
        date_default_timezone_set('Asia/Kolkata');
        $timestamp = date('Y-m-d H:i:s');
        $entry = "Timestamp: $timestamp\nName: $name\nMessage: $message\n\n";
        file_put_contents('data/guestbook.txt', $entry, FILE_APPEND);
        setcookie('guestbook_name', $name, time() + (86400 * 30), '/'); // Save name as a cookie for 30 days

        // Redirect the user to avoid form resubmission
        header('Location:guestbook');
        exit();
    }
}

// Retrieve existing guestbook entries and reverse their order
$entries = file_get_contents('data/guestbook.txt');
$entries = array_filter(explode("\n\n", $entries));
$entries = array_reverse($entries);
$entries = implode("\n\n", $entries);
$entries = nl2br($entries); // Convert newlines to <br> tags for HTML display

// Retrieve the name from the cookie if it exists
$guestbook_name = $_COOKIE['guestbook_name'] ?? '';
?>
<?php

$title = 'Guestbook';

$description='Share your remarks and keep entries in this student-maintained platform. Connect with peers, alumni, and faculty by leaving comments, feedback, and memorable experiences. Please ensure respectful contributions. Thank you for being a part of our guestbook!';
$keywords=' remarks, entries, student-maintained, feedback, comments, experiences, alumni, faculty, connections';


// $og_title='BSc Final Year Statistical Analysis Projects';     /* if not declared default title will be used */
// $og_description='Explore a collection of statistical analysis projects created by BSc final year students. Gain insights into various statistical techniques, methodologies, and applications in their research papers.';   /* if not declared default description will be used */
 // $og_image_url='https://vbstat.ml/image/project-og.jpg';     /* declare this */
// $og_type='website';      /* declare this */





// Include the header
require_once "$includes_folder/header.php";
?>

    <style>
        .scrollable {
            max-height: 400px;
            overflow-y: auto;
        }
    </style>

<div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">

    <div class="container mx-auto p-4">
        <h1 class="text-3xl font-bold mb-4 font-extrabold dark:text-white">Guestbook</h1>
        <div class="flex flex-col md:flex-row">
            <div class="w-full md:w-1/2 pr-4">
                <form method="post" action="">
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700 dark:text-white">Name:</label>
                        <input type="text" name="name" value="<?php echo $guestbook_name; ?>" required class=" dark:border-gray-600 dark:placeholder-gray-400 border border-gray-300 rounded px-3 py-2 w-full  dark:bg-gray-800 dark:text-gray-300" placeholder="Entry as">
                    </div>
                    <div class="mb-4">
                        <label for="message" class="block text-sm font-medium text-gray-700 dark:text-white">Message:</label>
                        <textarea name="message" required class="border border-gray-300 rounded px-3 py-2 w-full  dark:bg-gray-800 dark:text-gray-300  dark:border-gray-600 dark:placeholder-gray-400" rows="4" placeholder="Type here ..."></textarea>
                    </div>
                    <div>
                        <input type="submit" value="Submit" class="bg-blue-500 text-white px-4 py-2 rounded  ">
                    </div>
                </form>   <p class="mr-2 text-sm  text-gray-500 dark:text-gray-700 py-4" > * Dont share personal & Be respectful </p>
            </div>
            <div class="w-full md:w-1/2 mt-4 md:mt-0">
                <h2 class="text-2xl font-bold dark:text-white">Entries:</h2>
                <div class="scrollable mt-4 dark:text-white"><?php echo $entries; ?></div>
            </div>
        </div>
    </div>


   </div>


<?php
// Include the header
require_once "$includes_folder/footer.php";
?>
