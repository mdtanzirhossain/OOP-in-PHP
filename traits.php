<?php
// php does not support multiple inheritance. It works like class. It offers multiple inheritance facility. In large projects traits should not be used much
// Our main purpose is to bring data from a lot classes. 
// To do that, we have to convert the classes from class to trait.
// via use we collect the traits in another class
// if there are methods of similar name, there will be conflict. To solve it, use "instead of" and "as" keyword
?>