<?php
/* BIG-CONFIG*/

$siteKey = "6LdIq2gUAAAAACA3f57y_5i4pNKr0ew7jLGdSwGe";
$secretKey = "6LdIq2gUAAAAAOcWw0645vcghHgnel68blfJlcfL";


switch(THIS_PAGE)
    
{
    case "index.php":
        $title = "Kelly's Web Dev Examples WEB120 Portal";
        $logo= "fa-home";
        $PageID = "Welcome";
           break;
        
        case "flexbox.php":
        $title = "Kelly's Flexbox Research";
        $logo= "";
        $PageID = "Flexbox Research";
           break;
        
        case "siteapp.php":
        $title = "Kelly's WeB vs. Native Research";
        $logo= "";
        $PageID = "Paper";
           break;
        
        case "map.php":
        $title = "Kelly's Map Research";
        $logo= "";
        $PageID = "Map";
           break;
        
        case "parallax.php":
        $title = "Kelly's Parallax Research";
        $logo= "";
        $PageID = "Parallax";
           break;
        
        case "webcam.php":
        $title = "Kelly's Webcam Research" ;
        $logo= "";
        $PageID = "Webcam";
           break;
        
        case "youtube.php":
        $title = "Kelly's YouTube Research" ;
        $logo= "";
        $PageID = "YouTube";
           break;
        
        case "contact.php":
        $title = "Contact Form" ;
        $logo= "";
        $PageID = "Contact";
           break;
        
    default:
        $title = THIS_PAGE;
        $logo = "";
        $PageID = "";
    break;
        
        
}