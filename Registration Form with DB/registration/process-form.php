<?php
session_start();

// Connect to the database
$db = mysqli_connect('localhost', 'root', '', 'maindb');

// REGISTRATION FORM
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve input values from the form
    $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $phone_number = mysqli_real_escape_string($db, $_POST['phone_number']);
    $birth_date = mysqli_real_escape_string($db, $_POST['birth_date']);
    $gender = mysqli_real_escape_string($db, $_POST['gender']);
    $region = mysqli_real_escape_string($db, $_POST['region']);
    $city = mysqli_real_escape_string($db, $_POST['city']);
    $barangay = mysqli_real_escape_string($db, $_POST['barangay']);
    $additional = mysqli_real_escape_string($db, $_POST['additional']);
    $hear_about_us = isset($_POST['hear-about-us']) ? implode(', ', $_POST['hear-about-us']) : '';
    $membership_type = mysqli_real_escape_string($db, $_POST['membership-type']);
    $contact_type = mysqli_real_escape_string($db, $_POST['contact-type']);

    // Check the status of the checkboxes and set the values accordingly
    $accept_membership_rule = isset($_POST['accept-rule']) && in_array('accept-membership-rule', $_POST['accept-rule']) ? 'yes' : 'no';
    $accept_privacy_policy = isset($_POST['accept-rule']) && in_array('accept-privacy-policy', $_POST['accept-rule']) ? 'yes' : 'no';

    // Insert the data into the database
    $query = "INSERT INTO form (first_name, last_name, email, phone_number, birth_date, gender, region, city, barangay, additional, hear_about_us, membership_type, contact_type, accept_membership_rule, accept_privacy_policy) 
              VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$birth_date', '$gender', '$region', '$city', '$barangay', '$additional', '$hear_about_us', '$membership_type', '$contact_type', '$accept_membership_rule', '$accept_privacy_policy')";
    mysqli_query($db, $query);

    // Redirect to a success page or perform any other action after successful insertion
    header('location: success.php');
    exit();
}
?>