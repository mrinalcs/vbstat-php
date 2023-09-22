<?php
// privacy-policy.php

$title = 'Privacy Policy';
$description = 'This privacy policy outlines how the unofficial website vbstat.ml, maintained by students, collects, uses, and protects the personal information of its visitors.';
$keywords = 'privacy policy, statistics, VisvaBharati, university, vbstat.ml';
$author = 'Department of Statistics, VisvaBharati University';




//$og_title     /* if not declared default title will be used */
$og_description='Read privacy policy outlines how the unofficial website vbstat.ml, maintained by students, collects, uses, and protects the personal information of its visitors';   /* if not declared default description will be used */
 $og_image_url='https://vbstat.ml/image/privacy-policy.jpg';     /* declare this */
$og_type='website';      /* declare this */




// Include the header
require_once "$includes_folder/header.php";
?>

<div class="max-w-screen-xl px-4 mx-auto md:px-6">
  <section class="py-4">
    <div class="mx-auto max-w-screen-xl">
      <div class="bg-gray-50 dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-8 md:p-12">
         <h1 class="text-4xl font-extrabold dark:text-white pb-4">Privacy Policy</h1>
        <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">
          Welcome to vbstat.ml, the unofficial website maintained by students of the Department of Statistics, VisvaBharati University. We are committed to protecting the privacy of our website visitors. This privacy policy explains how we collect, use, and protect your personal information. By using our website, you consent to the terms of this privacy policy.
        </p>
        <h2 class="text-gray-900 dark:text-white text-2xl font-extrabold mb-2">Collection of Personal Information</h2>
        <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">
          We may collect personal information, such as your name and email address, when you voluntarily submit it to us through our website's contact forms or other means. We use this information solely for the purpose of responding to your inquiries or providing you with requested information.
        </p>
        <h2 class="text-gray-900 dark:text-white text-2xl font-extrabold mb-2">Use of Personal Information</h2>
        <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">
          We will only use your personal information for the purposes for which it was provided. We will not sell, rent, or share your personal information with any third parties without your consent.
        </p>
        
        <h2 class="text-gray-900 dark:text-white text-2xl font-extrabold mb-2">Changes to this Privacy Policy</h2>
        <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">
          We may update this privacy policy from time to time. Any changes will be posted on this page, and the revised policy will take effectimmediately upon posting. We encourage you to review this privacy policy periodically for any updates.
        </p>
        <h2 class="text-gray-900 dark:text-white text-2xl font-extrabold mb-2">Contact Us</h2>
        <p class="text-lg font-normal text-gray-500 dark:text-gray-400 mb-6">
          If you have any questions or concerns about our privacy policy or the handling of your personal information, please contact us at [contact@vbstat.ml]
        </p>
      </div>
    </div>
  </section>
</div>

<?php
// Include the footer
require_once "$includes_folder/footer.php";
?>
