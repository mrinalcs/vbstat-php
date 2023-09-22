<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'] ?? '';
    $message = $_POST['message'] ?? '';

    if (!empty($email) && !empty($message)) {
        date_default_timezone_set('Asia/Kolkata');
        $timestamp = date('Y-m-d H:i:s');
        $entry = "Timestamp: $timestamp\nEmail: $email\nMessage: $message\n\n";
        file_put_contents('data/feedback.txt', $entry, FILE_APPEND);
 echo "Message submitted successfully!";
             // Redirect the user to avoid form resubmission
        header('Location:contact');
        exit();
    }
}
?>
<?php

$title = 'Contact';
$description='Contact Us  ! We value your feedback, questions, and inquiries. Feel free to reach out. Our dedicated team is here to assist you and provide prompt assistance. Contact us today and let us help you with any information or support you may need.';
$keywords='Contact Us, Department of Statistics, Feedback, Questions, Inquiries, Programs, Admissions, Research opportunities, Support, Information';
// $theme_color='';


//$og_title     /* if not declared default title will be used */
$og_description='Feel free to reach out. Our dedicated team is here to assist you and provide prompt assistance. Contact us today and let us help you with any information or support you may need';   /* if not declared default description will be used */
 //$og_image_url='https://vbstat.ml/img/2022/siksha-bhabana-football-tournament-2022.jpg';     /* declare this */
$og_type='website';      /* declare this */





// Include the header
require_once "$includes_folder/header.php";
?>
<div class="max-w-screen-xl px-4 py-3 mx-auto md:px-6">






<h1 class="text-4xl font-extrabold   ">Contact</h1>


<p class="text-lg   xl:mr-64 lg:mb-0   py-5 pb-3">We are here to assist you. Feel free to contact us with any questions, feedback, or inquiries you may have..</p>

 



<div class="flex flex-col lg:flex-row">
  <div class="w-full lg:w-1/2 py-2">
   

<div class="flex flex-col space-y-4 py-4">
   
  <a href="mailto:contact@vbstat.ml" class="text-blue-500 hover:text-blue-700 flex items-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M17 3a1 1 0 011 1v12a1 1 0 01-1 1H3a1 1 0 01-1-1V4a1 1 0 011-1h14zm-1 2H4v10h12V5zm-4 4H8v2h4v-2zm0 4H8v2h4v-2z" clip-rule="evenodd" />
    </svg>
    <span class="font-medium">Email:</span> contact@vbstat.ml
  </a>

  <a href="mailto:vbstat.tk+contact@gmail.com" class="text-blue-500 hover:text-blue-700 flex items-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M17 3a1 1 0 011 1v12a1 1 0 01-1 1H3a1 1 0 01-1-1V4a1 1 0 011-1h14zm-1 2H4v10h12V5zm-4 4H8v2h4v-2zm0 4H8v2h4v-2z" clip-rule="evenodd" />
    </svg>
    <span class="font-medium">Email:</span> vbstat.tk@gmail.com
  </a>
 <a href="mailto:admin@vbstat.ml" class="text-blue-500 hover:text-blue-700 flex items-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M17 3a1 1 0 011 1v12a1 1 0 01-1 1H3a1 1 0 01-1-1V4a1 1 0 011-1h14zm-1 2H4v10h12V5zm-4 4H8v2h4v-2zm0 4H8v2h4v-2z" clip-rule="evenodd" />
    </svg>
    <span class="font-medium">Email:</span> admin@vbstat.ml
  </a>


<h3>VisvaBharati</h3>

 <a href="mailto:info@visva-bharati.ac.in" class="text-blue-500 hover:text-blue-700 flex items-center">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
      <path fill-rule="evenodd" d="M17 3a1 1 0 011 1v12a1 1 0 01-1 1H3a1 1 0 01-1-1V4a1 1 0 011-1h14zm-1 2H4v10h12V5zm-4 4H8v2h4v-2zm0 4H8v2h4v-2z" clip-rule="evenodd" />
    </svg>
    <span class="font-medium">Email:</span> info@visva-bharati.ac.in
  </a>
</div>





  </div>
  <div class="w-full lg:w-1/2  py-4">
    <form method="post"  method="post" action="">
   <p>
<div class="relative">
  <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path></svg>
  </div>
  <input  type="email" name="email" id="email" required class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="your email">
</div>

     </p>   <p>
  <br>
  <textarea  rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"  name="message" id="message" required  placeholder="type your message"></textarea>
     </p><br>
  <input type="submit" value="Submit"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
</form>
  </div>
</div>







<br><div class="inline-flex items-center justify-center w-full">
    <hr class="w-64 h-1 my-8 bg-gray-200 border-0 rounded dark:bg-gray-700">
    <div class="absolute px-4 -translate-x-1/2 bg-white left-1/2 dark:bg-gray-900">
        <svg aria-hidden="true" class="w-5 h-5 text-gray-700 dark:text-gray-300" viewBox="0 0 24 27" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.017 18L14.017 10.609C14.017 4.905 17.748 1.039 23 0L23.995 2.151C21.563 3.068 20 5.789 20 8H24V18H14.017ZM0 18V10.609C0 4.905 3.748 1.038 9 0L9.996 2.151C7.563 3.068 6 5.789 6 8H9.983L9.983 18L0 18Z" fill="currentColor"/></svg>
    </div>
</div><br>


<iframe class ='rounded-lg map' src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d913.4621293008327!2d87.67366314468815!3d23.6813746545484!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f9dce942887d45%3A0xe34a2a09eb7ab9a4!2sStatistics%20Department%2CVisva%20Bharati!5e0!3m2!1sen!2sin!4v1686624011946!5m2!1sen!2sin" width="100%" height="450"  allowfullscreen=""  ></iframe>

</div>
<?php
// Include the header
require_once "$includes_folder/footer.php";
?>
