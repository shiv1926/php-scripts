<?php include('../header.php'); ?>
<h4>Heredoc/Nowdoc</h4>
<ul>
    <li>These are particularly useful when we need to define a string over multiple lines.</li>
    <li>They work by defining an identifier that will mark the start and end of the string.</li>
    <li>The identifier can be any alphanumeric value following the same rules we’d use for variable names.</li>
    <li>One important thing is to make sure that identifier must not appear within the string itself.</li>
</ul>
<?php 
$links[] = 'https://andy-carter.com/blog/what-are-php-heredoc-nowdoc';
echo refrences($links);
include('../footer.php'); 
?>