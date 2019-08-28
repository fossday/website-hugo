<?php
add_filter('upload_mimes','restrict_mimes_for_speaker');
function restrict_mimes_for_speaker($mimes) {
  if (current_user_can('speaker')) {

    $mimes = array(
      'pdf' => 'application/pdf',
      'odp' => 'application/vnd.oasis.opendocument.presentation',
      'pps' => 'application/vnd.ms-powerpoint',
      'ppsx' => 'application/vnd.ms-powerpoint'
     );
   
    return $mimes;

  } else {

    $mimes = array(
      'png' => 'image/png',
      'jpg' => 'image/jpeg',
      'jpeg' => 'image/jpeg',
      'gif' => 'image/gif',
      'webp' => 'image/webp',
      'pdf' => 'application/pdf',
      'odp' => 'application/vnd.oasis.opendocument.presentation',
      'pps' => 'application/vnd.ms-powerpoint',
      'ppsx' => 'application/vnd.ms-powerpoint'
     );

     return $mimes;
  }

}