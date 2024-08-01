<?php

$type = $_GET['type'];
$value = $_GET['value'];


if($type == "username"){
    function searchInMultipleFiles($filenames, $searchWord) {
        $foundInAnyFile = false; // متغير لتتبع إذا تم العثور على الكلمة في أي ملف
    
        foreach ($filenames as $filename) {
            // echo "البحث في الملف: $filename\n";
            if (searchInFile($filename, $searchWord)) {
                $foundInAnyFile = true;
            }
        }
    
        if (!$foundInAnyFile) {
            print_r('   <div class="card">
                 
                    
     
                 
            <p>لا توجد بيانات في أي من الملفات.
       
            
        
           </div>');  
        }
    }
    
    function searchInFile($filename, $searchWord) {
        $handle = fopen($filename, "r");
        if ($handle) {
            $lineNumber = 1;
            $found = false;
            while (($line = fgets($handle)) !== false) {
                if (strpos($line, $searchWord) !== false) {
                    // echo "تم العثور على الكلمة '$searchWord' في السطر رقم $lineNumber: $line";
                    print_r('   <div class="card">
                    <p> '.$line .' :</p>
                    
     
                 
                    
               
                    
                
                   </div>');  
                    $found = true;
                
                }
                $lineNumber++;
            }
            fclose($handle);
            return $found;
        } else {
            echo "فشل فتح الملف: $filename\n";
            return false;
        }
    }
    
    // أسماء الملفات التي تريد البحث فيها
    $filesToSearch = ["تم فك تشفيره بواسطة KARTNS.txt", "db by kartns.txt"];
    
    // الكلمة المراد البحث عنها
    // $searchWord = "saad";
    
    searchInMultipleFiles($filesToSearch, $value);
}




if($type == "email"){
    function searchInMultipleFiles($filenames, $searchWord) {
        $foundInAnyFile = false; // متغير لتتبع إذا تم العثور على الكلمة في أي ملف
    
        foreach ($filenames as $filename) {
            // echo "البحث في الملف: $filename\n";
            if (searchInFile($filename, $searchWord)) {
                $foundInAnyFile = true;
            }
        }
    
        if (!$foundInAnyFile) {
            print_r('   <div class="card">
                 
                    
     
                 
            <p>لا توجد بيانات في أي من الملفات.
       
            
        
           </div>');  
        }
    }
    
    function searchInFile($filename, $searchWord) {
        $handle = fopen($filename, "r");
        if ($handle) {
            $lineNumber = 1;
            $found = false;
            while (($line = fgets($handle)) !== false) {
                if (strpos($line, $searchWord) !== false) {
                    // echo "تم العثور على الكلمة '$searchWord' في السطر رقم $lineNumber: $line";
                    print_r('   <div class="card">
                    <p> '.$line .' :</p>
                    
     
                 
                    
               
                    
                
                   </div>');  
                    $found = true;
                
                }
                $lineNumber++;
            }
            fclose($handle);
            return $found;
        } else {
            echo "فشل فتح الملف: $filename\n";
            return false;
        }
    }
    
    // أسماء الملفات التي تريد البحث فيها
    $filesToSearch = ["STC-Company 22-23.txt"];
    
    // الكلمة المراد البحث عنها
    // $searchWord = "saad";
    
    searchInMultipleFiles($filesToSearch, $value);
}


if($type == "number"){
    function searchInMultipleFiles($filenames, $searchWord) {
        $foundInAnyFile = false; // متغير لتتبع إذا تم العثور على الكلمة في أي ملف
    
        foreach ($filenames as $filename) {
            // echo "البحث في الملف: $filename\n";
            if (searchInFile($filename, $searchWord)) {
                $foundInAnyFile = true;
            }
        }
    
        if (!$foundInAnyFile) {
            print_r('   <div class="card">
                 
                    
     
                 
            <p>لا توجد بيانات في أي من الملفات.
       
            
        
           </div>');  
        }
    }
    
    function searchInFile($filename, $searchWord) {
        $handle = fopen($filename, "r");
        if ($handle) {
            $lineNumber = 1;
            $found = false;
            while (($line = fgets($handle)) !== false) {
                if (strpos($line, $searchWord) !== false) {
                    // echo "تم العثور على الكلمة '$searchWord' في السطر رقم $lineNumber: $line";
                    print_r('   <div class="card">
                    <p> '.$line .' :</p>
                    
     
                 
                    
               
                    
                
                   </div>');  
                    $found = true;
                
                }
                $lineNumber++;
            }
            fclose($handle);
            return $found;
        } else {
            echo "فشل فتح الملف: $filename\n";
            return false;
        }
    }
    
    // أسماء الملفات التي تريد البحث فيها
    $filesToSearch = ["STC-Company 22-23.txt"];
    
    // الكلمة المراد البحث عنها
    // $searchWord = "saad";
    
    searchInMultipleFiles($filesToSearch, $value);
}
 