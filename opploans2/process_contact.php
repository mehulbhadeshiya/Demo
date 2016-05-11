<?php
  if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $form_fields = $_REQUEST;
​
    try {
      mail('info@opploans.com', 'Contact Us form submission', $form_fields);
    } catch (Exception $err) {
      mail('rcowan@opploans.com', 'Contact Us form submission fail', $form_fields);
    }
​
    header('Location:https://www.opploans.com/contact-us');
  }
