<?php
 
//---------------------------------------------------
//	Admin Notification of Mailinglist subscription
//--------------------------------------------------

function admin_notify_mailinglist_title()
{
return <<<EOF
Κάποιος/α γράφτηκε στη ταχυδρομική σας λίστα
EOF;
}

function admin_notify_mailinglist()
{
return <<<EOF
Μια νέα εγγραφή στη ταχυδρομική λίστα έγινε δεκτή.

Διεύθυνση Email: {email}
Ταχυδρομική λίστα: {mailing_list}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Entry
//--------------------------------------------------

function admin_notify_entry_title()
{
return <<<EOF
Μια νέα εγγραφή weblog υποβλήθηκε
EOF;
}

function admin_notify_entry()
{
return <<<EOF
Μια νέα καταχώρηση υποβλήθηκε στο ακόλουθο weblog:
{weblog_name}

O τίτλος της καταχώρησης είναι:
{entry_title}

Υποβλήθηκε από τον: {name}
Email: {email}

Για να διαβάσετε τη καταχώρηση επισκεφτήτε το link: 
{entry_url}

EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Member Registrations
//--------------------------------------------------

function admin_notify_reg_title()
{
return <<<EOF
Ειδοποίηση εγγραφής νέου μέλους
EOF;
}

function admin_notify_reg()
{
return <<<EOF
Το ακόλουθο πρόσωπο υπέβαλλε μια νέα εγγραφή μέλους: {name}

στο: {site_name}

URL Πίνακα ελέγχου: {control_panel_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Comment
//--------------------------------------------------

function admin_notify_comment_title()
{
return <<<EOF
Μόλις λάβατε ένα σχόλιο
EOF;
}

function admin_notify_comment()
{
return <<<EOF
Μόλις λάβατε ένα σχόλιο για το ακόλουθο weblog:
{weblog_name}

O τίτλος της καταχώρησης είναι:
{entry_title}

Στη διεύθυνση: 
{comment_url}

Από τον/την: {name}
Email: {email}
URL: {url}
Τοποθεσία: {location}

{comment}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Trackback
//--------------------------------------------------

function admin_notify_trackback_title()
{
return <<<EOF
Μόλις λάβατε ένα trackback
EOF;
}

function admin_notify_trackback()
{
return <<<EOF
Μόλις λάβατε ένα trackback για την ακόλουθη καταχώρηση:
{entry_title}

Στη διεύθυνση: 
{comment_url}

Ένα trackback εστάλει από το ακόλουθο weblog:
{sending_weblog_name}

Tίτλος Καταχώρησης
{sending_entry_title}

URL του Weblog:
{sending_weblog_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Membership Activation Instructions
//--------------------------------------------------

function mbr_activation_instructions_title()
{
return <<<EOF
Κωδικός Ενεργοποίησης
EOF;
}

function mbr_activation_instructions()
{
return <<<EOF
Σας ευχαριστούμε για την εγγραφή σας.

Για να ενεργοποιήσετε τον λογαριασμό σας, παρακαλούμε επισκεφτήτε το παρακάτω URL:

{unwrap}{activation_url}{/unwrap}

Σας ευχαριστούμε!

{site_name}

{site_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Member Forgotten Password Instructions
//--------------------------------------------------

function forgot_password_instructions_title()
{
return <<<EOF
Πληροφορίες Πρόσβασης
EOF;
}

function forgot_password_instructions()
{
return <<<EOF
{name},

Για να μηδενίσετε το κωδικό πρόσβασης σας επισκεφτήτε την ακόλουθη σελίδα:

{reset_url}

Ο κωδικός πρόσβασής σας θα μηδενιστεί αυτόματα, και ο νέος κωδικός θα σας αποσταλεί με email.

Αν δεν επιθυμείτε να μηδενίσετε τον κωδικό πρόσβασής σας, αγνοήστε αυτό το μήνυμα. Θα λήξει σε 24 ώρες.

{site_name}
{site_url}
EOF;
}
/* END */



//---------------------------------------------------
//	Reset Password Notification
//--------------------------------------------------

function reset_password_notification_title()
{
return <<<EOF
Νέα στοιχεία Πρόσβασης
EOF;
}

function reset_password_notification()
{
return <<<EOF
{name},

Παρακάτω θα βρείτε τα στοχεία πρόσβασής σας:

Όνομα Χρήστη: {username}
Κωδικός Πρόσβασης: {password}

{site_name}
{site_url}
EOF;
}
/* END */



//---------------------------------------------------
//	Validated Member Notification
//--------------------------------------------------

function validated_member_notify_title()
{
return <<<EOF
Ο λογαριασμός χρήστη σας ενεργοποιήθηκε
EOF;
}

function validated_member_notify()
{
return <<<EOF
{name},

Ο λογαριασμός χρήστη ενεργοποιήθηκε και έτοιμος για χρήση.

Σας ευχαριστούμε!

{site_name}
{site_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Decline Member Validation
//--------------------------------------------------

function decline_member_validation_title()
{
return <<<EOF
Ο λογαριασμός χρήστη σας δεν έγινε δεκτός.
EOF;
}

function decline_member_validation()
{
return <<<EOF
{name},

Ζητούμε συγνώμη αλλά το προσωπικό μας αποφάσισε να μην επικυρώσει τον λογαριασμό σας.

{site_name}
{site_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Mailinglist Activation Instructions
//--------------------------------------------------

function mailinglist_activation_instructions_title()
{
return <<<EOF
Επιβεβαίωση e-mail
EOF;
}

function mailinglist_activation_instructions()
{
return <<<EOF
Σας ευχαριστούμε για την εγγραφή σας στη ταχυδρομική λίστα: {mailing_list} !

Κάντε κλικ στο παρακάτω link για να επιβεβαιώσετε το email σας.

Δεν επιθυμείτε να προστεθείτε στη λίστα μας, αγνοήστε αυτό το email.

{unwrap}{activation_url}{/unwrap}

Σας ευχαριστούμε!

{site_name}
EOF;
}
/* END */



//---------------------------------------------------
//	Comment Notification
//--------------------------------------------------

function comment_notification_title()
{
return <<<EOF
Κάποιος μόλις απάντησε στο σχόλιό σας.
EOF;
}

function comment_notification()
{
return <<<EOF
Κάποιος μόλις αποκρίθηκε στην καταχώρηση στην οποία γίνατε συνδρομητής στο weblog:
{weblog_name}

O τίλτος της καταχώρησης είναι:
{entry_title}

Μπορείτε να δείτε το σχόλιο στην ακόλουθη διεύθυνση:
{comment_url}

{comment}

Για να σταματήσετε να λαμβάνετε ειδοποιήσεις για αυτό το σχόλιο, κάντε κλικ εδώ:
{notification_removal_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Admin Notification of New Gallery Comment
//--------------------------------------------------

function admin_notify_gallery_comment_title()
{
return <<<EOF
Μόλις λάβατε ένα σχόλιο
EOF;
}

function admin_notify_gallery_comment()
{
return <<<EOF
Μόλις λάβατε ενα σχόλιο για την ακόλουθη γκαλερί:
{gallery_name}

Ο τίλος της καταχώρησης έιναι:
{entry_title}

Στη διεύθυνση: 
{comment_url}

{comment}
EOF;
}
/* END */

//---------------------------------------------------
//	Gallery Comment Notification
//--------------------------------------------------

function gallery_comment_notification_title()
{
return <<<EOF
Κάποιος απάντησε στο σχόλιό σας
EOF;
}

function gallery_comment_notification()
{
return <<<EOF
Κάποιος μόλις απάντησε στη φωτογραφική καταχώρηση στην οποία είστε συνδρομητής:
{gallery_name}

Μπορείτε να δείτε το σχόλιο στην ακόλουθη διεύθυνση:
{comment_url}

{comment}

Για να σταματήστε να λαμβάνετε ειδοποιήσεις για αυτό το σχόλιο, κάντε κλικ εδώ:
{notification_removal_url}
EOF;
}
/* END */



//---------------------------------------------------
//	Admin Notification of New Forum Post
//--------------------------------------------------

function admin_notify_forum_post_title()
{
return <<<EOF
Κάποιος έγραψε στο forum {forum_name}
EOF;
}

function admin_notify_forum_post()
{
return <<<EOF
o/η {name_of_poster} μόλις υπέβαλλε μια εγγραφή στο forum {forum_name}

O τίτλος της συζήτησης είναι:
{title}

Η εγγραφή είναι στη διεύθυνση:
{post_url}

{body}
EOF;
}
/* END */


//---------------------------------------------------
//	Forum Post User Notification
//--------------------------------------------------

function forum_post_notification_title()
{
return <<<EOF
Κάποιος έγραψε στο forum {forum_name}
EOF;
}

function forum_post_notification()
{
return <<<EOF
Κάποιος μόλις υπέβαλε μια απάντηση στη συζήτηση στην οποία γίνατε συνδρομητης στο forum:
{forum_name}

O τίτλος της συζήτησης είναι:
{title}

Η εγγραφή είναι στη διεύθυνση:
{post_url}

{body}

Για να σταματήσετε να λαμβάνετε ειδοποιήσεις για αυτό το σχόλιο, κάντε κλικ εδώ:
{notification_removal_url}
EOF;
}
/* END */


//---------------------------------------------------
//	Private Message Notification
//--------------------------------------------------

function private_message_notification_title()
{
return <<<EOF
Κάποιος σας έστειλε ένα Προσωπικό Μήνυμα
EOF;
}

function private_message_notification()
{
return <<<EOF

{recipient_name},

Ο/Η {sender_name} μόλις σας έστειλε ένα προσωπικό μήνυμα με τίτλο '{message_subject}'.

Μπορείτε να διαβάσετε το Προσωπικό Μήνυμα μπαίνοντας στο σύστημα και βλέποντας τα Εισερχόμενα στη διεύθυνση:
{site_url}

Για να σταματήσετε να λαμβάνετε ειδοποιήσεις Προσωπικών μηνυμάτων, απενεργοποιήστε την αντίστοιχη επιλογή στις Ρυθμίσεις Email.
EOF;
}
/* END */


/* -------------------------------------
/*  Notification of Full PM InBox
/* -------------------------------------*/

function pm_inbox_full_title()
{
return <<<EOF
To γραμματοκιβώτιο Προσωπικών μηνυμάτων γέμισε
EOF;
}

function pm_inbox_full()
{
return <<<EOF
{recipient_name},

Ο/Η {sender_name} επιχείρησε να σας στείλει ένα προσωπικό μήνυμα,
αλλά το Γραμματοκιώτιό σας είναι γεμάτο, ξεπερνώντας τη μέγιστη χωρητικότητα {pm_storage_limit}.

Παρακαλούμε συνδεθείτε στο σύστημα και αφαιρέστε μηνύματα από το Γραμματοκιβώτιό σας στη διεύθυση:
{site_url}
EOF;
}
/* END */


/* -------------------------------------
/*  Notification of Forum Topic Moderation
/* -------------------------------------*/

function forum_moderation_notification_title()
{
return <<<EOF
Ειδοποίηση μετριασμού στο forum {forum_name}
EOF;
}

function forum_moderation_notification()
{
return <<<EOF
O/H {name_of_recipient}, ένας επιμελητής {moderation_action} τη συζήτησή σας.

Ο τίτλος της συζήτησης είναι:
{title}

Μπορείτε να βρείτε τη συζήτηση στη διεύθυνση:
{thread_url}
EOF;
}
/* END */


/* -------------------------------------
/*  Notification of Forum Post Report
/* -------------------------------------*/

function forum_report_notification_title()
{
return <<<EOF
Αναφορά εγγραφής στο forum {forum_name}
EOF;
}

function forum_report_notification()
{
return <<<EOF
O/H {reporter_name} μόλις έκανε μια αναφορά της εγγραφής που από τον/την {author} στο forum:
{forum_name}

Οι λόγοι της αναφοράς:
{reasons}

Επιπρόσθετες σημειώσεις από τον/την {reporter_name}:
{notes}

Η εγγραφή βρίσκεται στη διεύθυνση:
{post_url}

Περιεχόμενα της εγγραφής:
{body}
EOF;
}
/* END */


/* -------------------------------------
//  OFFLINE SYSTEM PAGE
/* -------------------------------------*/

function offline_template()
{
return <<<EOF
<html>
<head>

<title>Σύστημα εκτός λειτουργίας</title>

<style type="text/css">

body { 
background-color:	#ffffff; 
margin:				50px; 
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size:			11px;
color:				#000;
background-color:	#fff;
}

a {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
letter-spacing:		.09em;
text-decoration:	none;
color:              #330099;
background-color:   transparent;
}
  
a:visited {
color:				#330099;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:    underline;
background-color:	transparent;
}

#content  {
border:				#999999 1px solid;
padding:			22px 25px 14px 25px;
}

h1 {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
font-size:			14px;
color:				#000;
margin-top: 		0;
margin-bottom:		14px;
}

p {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		12px;
margin-bottom: 		14px;
color: 				#000;
}
</style>

</head>

<body>

<div id="content">

<h1>Σύστημα εκτός λειτουργίας</h1>

<p>Ο δικτυακός τόπος είναι προσωρινά εκτός λειτουργίας</p>

</div>

</body>

</html>
EOF;
}
/* END */


/* -------------------------------------
//  User Messages Template
/* -------------------------------------*/

function message_template()
{
return <<<EOF
<html>
<head>

<title>{title}</title>

<meta http-equiv='content-type' content='text/html; charset={charset}' />

{meta_refresh}

<style type="text/css">

body { 
background-color:	#ffffff; 
margin:				50px; 
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size:			11px;
color:				#000;
background-color:	#fff;
}

a {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
letter-spacing:		.09em;
text-decoration:	none;
color:              #330099;
background-color:   transparent;
}
  
a:visited {
color:				#330099;
background-color:	transparent;
}

a:active {
color:				#ccc;
background-color:	transparent;
}

a:hover {
color:				#000;
text-decoration:    underline;
background-color:	transparent;
}

#content  {
border:				#000 1px solid;
background-color: 	#DEDFE3;
padding:			22px 25px 14px 25px;
}

h1 {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-weight:		bold;
font-size:			14px;
color:				#000;
margin-top: 		0;
margin-bottom:		14px;
}

p {
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		12px;
margin-bottom: 		14px;
color: 				#000;
}

ul {
margin-bottom: 		16px;
}

li {
list-style:			square;
font-family:		Verdana, Arial, Tahoma, Trebuchet MS, Sans-serif;
font-size: 			12px;
font-weight: 		normal;
margin-top: 		8px;
margin-bottom: 		8px;
color: 				#000;
}

</style>

</head>

<body>

<div id="content">

<h1>{heading}</h1>

{content}

<p>{link}</p>

</div>

</body>

</html>
EOF;
}
/* END */


/* -------------------------------------
//  Mailing List Template
/* -------------------------------------*/

function mailinglist_template()
{
return <<<EOF
{message_text}

Για να αφαιρέσετε το email σας από τη ταχυδρομική λίστα, κάντε κλικ εδώ:
{if html_email}<a href="{unsubscribe_url}">{unsubscribe_url}</a>{/if}
{if plain_email}{unsubscribe_url}{/if}
EOF;
}
/* END */


?>