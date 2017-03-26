<meta charset="utf-8">
<?php

require_once("../vendor/autoload.php");

\Valitron\Validator::langDir("../vendor/vlucas/valitron/lang");
    

/******** Do this in a project-wide config file ********/
// Start the session
session_start();

// Set the message stream
if (!isset($_SESSION['Fortress']['alerts']))
    $_SESSION['Fortress']['alerts'] = new Fortress\MessageStream();
$ms = $_SESSION['Fortress']['alerts'];

// Create a message translator
$translator = new Fortress\MessageTranslator();
// Set the translation paths
$translator->setTranslationTable("../fortress/locale/en_US.php");
$translator->setDefaultTable("../fortress/locale/en_US.php");
// Set translator for message streams
\Fortress\MessageStream::setTranslator($translator);

/*******************************************************/

// Test the error stream and reset
echo "<h2>Current message stream</h2>";
echo "<pre>";
print_r($ms->messages());
echo "</pre>";
$ms->resetMessageStream();

// Load the request schema
$schema = new Fortress\RequestSchema("../fortress/schema/forms/register.json");

$schema->addValidator("puppies", "required");

$schema->addSanitizer("puppies", "purge");

$schema->addValidator("minions", "range", [
    "min" => 0,
    "max" => 20,
    "message" => "Not enough minions"
]);

$schema->addValidator("email", "length", [
    "min" => 1,
    "max" => 100,
    "message" => "ACCOUNT_EMAIL_CHAR_LIMIT"
]);

// POST request
$rf = new Fortress\HTTPRequestFortress($ms, $schema, $_GET);
// Remove csrf_token from the request data, if specified
$rf->removeFields(['csrf_token']);

// Sanitize, and print sanitized data for demo purposes
$rf->sanitize(true, "error");

echo "<h2>Sanitized data</h2>";
echo "<pre>";
print_r($rf->data());
echo "</pre>";

// Validate.  Normally we'd want to halt on validation errors.  But for this demo, we will simply print the message stream.
if (!$rf->validate()) {
    $ms->addMessageTranslated("danger", "Validation failed for {{placeholder}}", ["placeholder" => "the form"]);
}

// Test client validators
$clientVal = new Fortress\JqueryValidationAdapter($translator);
$clientVal->setSchema($schema);
echo "<h2>Client-side validation schema (JSON)</h2>";
echo "<pre>";
print_r($clientVal->rules());
echo "</pre>";

// Create a new group with the filtered data
$data = $rf->data();

if (!yourFunctionHere($data)){
    exit();
}

// If we've made it this far, success!
