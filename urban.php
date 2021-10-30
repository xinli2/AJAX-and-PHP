<?php
$terms = array
(
    'anime' => 'the word is anime',
    'ajax' => 'What CSC337 is learning now',
    'cool' => 'This is really cool',
    'bro' => 'My brother!!',
    'ajax' => 'What CSC337 is learning now',
    'fnord' => 'Disinformation or irrelevant information intending' .
    'to misdirect, with the implication of a conspiracy.',
);
$term = $_GET ["n"];
if (array_key_exists($term,$terms)){
    echo '<b>'.$term."</b>: ". $terms[$term];
}
else{
    echo '<b>Not Here</b>: not found in my small dictionary';
}

?>