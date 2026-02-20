<?php
/*
$file = fopen("fundamentals/fileHandling/new.txt", "w");
fwrite($file, "PHP Study Materials");
$file = fopen("fundamentals/fileHandling/new.txt", "r");
echo fread($file, filesize("fundamentals/fileHandling/new.txt")); //The file that is set to read, echoed

//After opening the file, you need to close it.

fclose($file);

rename("fundamentals/fileHandling/new.txt","fundamentals/fileHandling/anotherFile.txt");
*/
//without variable
// file_put_contents("fundamentals/fileHandling/test.txt","Projukti Plus - ");
// // If you want to add new text, weite FILE_APPEND
// file_put_contents("fundamentals/fileHandling/test.txt","Learn with Kamal\n", FILE_APPEND);
// echo file_get_contents("fundamentals/fileHandling/test.txt");

// file_put_contents("fundamentals/fileHandling/new.txt", "New File");
// echo file_get_contents("fundamentals/fileHandling/new.txt");

//With variable
/*
$fileName = "fundamentals/fileHandling/test.txt";
$fileContent1 = "Projukti Plus - ";
$fileContent2 =  "Learn with Kamal";
file_put_contents($fileName,$fileContent1);
// If you want to add new text, weite FILE_APPEND
file_put_contents($fileName, $fileContent2."\n", FILE_APPEND);
echo file_get_contents($fileName);
*/
// file_put_contents("fundamentals/ProjuktiPlus/new.txt", "New File\n");
// echo file_get_contents("fundamentals/ProjuktiPlus/new.txt");

// $myfolder = "fundamentals/ProjuktiPlus";
// if(!is_dir($myfolder)){
//     mkdir($myfolder);
// }
// else{
//     echo "$myFolder folder already exist\n";
// }

//check and format
// $myfolder = "P "


// other build in functions we need to know: 


/*
1. file_exists()
2. is_readable()
3. is_writable()
*/
// echo __DIR__;
$fileDirectory = "E:/xampp/htdocs/OOP_PHP/fundamentals/fileHandling/new.txt";

if(file_exists($fileDirectory)){
    echo file_get_contents($fileDirectory);
}else{
    echo "The file was not found";
}