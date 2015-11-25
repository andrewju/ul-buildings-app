<!DOCTYPE html>
<html>
<head>
<title>UL Buildings</title>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

<link rel="stylesheet" href="themes/building.min.css" />
<link rel="stylesheet" href="themes/jquery.mobile.icons.min.css" />
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile.structure-1.4.5.min.css" />
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
</head>

<div data-role="page">
<div data-role="header" data-theme="a">
    <a href="search.html" target="_self" data-role="button" data-icon="arrow-l" data-transition="none" data-iconpos="notext">Previous</a>
  <h1>
  <?php echo 'Results of search keyword -'.$_GET['keyword'];?></h1>
  </div>
  <div data-role="content" data-theme="a" align="center">
  <?php
  	$keyword = strtolower($_GET['keyword']);
  	$build = 0;

  	switch($keyword) {
      case "f":
      case "foundation":
      case "foundation building":
      case "the foundation":
      case "the foundation building":
      case (preg_match('/^f[b|g|1|2](\d)*/', $keyword) ? true : false):
      echo "<p>Foundation Building</p><p><img src=\"image/b01.jpg\" width=\"100%\"/></p><p> <a href=\"FD.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";
      break;
      case "gems":
      case "medical":
      case "medical school":
      case "graduate entry":
      case "graduate entry medical":
      case "graduate entry medical school":
      case (preg_match('/^gems[o|b|g|1|2|3|4|5](\d)*/', $keyword) ? true : false):
      echo "<p>Graduate Entry Medical School</p><p><img src=\"image/b03.jpg\" width=\"100%\"/></p><p> <a href=\"MS.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";
      break; 
      case "kemmy":
      case "business":
      case "kemmy business":
      case "kbs":
      case "kemmy business school":
      case "kb":
      case (preg_match('/^kb[o|b|g|1|2|3|4|5](\d)*/', $keyword) ? true : false):
      echo "<p>Kemmy Business School</p><p><img src=\"image/b06.jpg\" width=\"100%\"/></p><p> <a href=\"KBS.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";           
      break;
      case "irish":
      case "world":
      case "academy":
      case "music":
      case "irish world":
      case "irish world academy":
      case "iwa":
      case (preg_match('/^iwa[o|b|g|1|2|3|4|5](\d)*/', $keyword) ? true : false):
      echo "<p>Irish World Academy</p><p><img src=\"image/b08.jpg\" width=\"100%\"/></p><p> <a href=\"IWA.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";
      break;
      case "plassey":
      case "plassey house":

      echo "<p>Plassey House</p><p><img src=\"image/b12.jpg\" width=\"100%\"/></p><p> <a href=\"PH.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";
      break;
      case "student":
      case "student centre":
      case "sc":
      case (preg_match('/^sc[o|b|g|1|2|3|4|5](\d)*/', $keyword) ? true : false):
      echo "<p>Student Centre</p><p><img src=\"image/b13.jpg\" width=\"100%\"/></p><p> <a href=\"SC.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";
     
      break; 
      case "library":
      case "glucksman library":
      case "information service building":
      case "information service":
      case "gl":
      case (preg_match('/^gl[o|b|g|1|2|3|4|5](\d)*/', $keyword) ? true : false):
echo "<p>Glucksman Library & Information Service Building</p><p><img src=\"image/b15.jpg\" width=\"100%\"/></p><p> <a href=\"GL.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";
      
      break; 
      case "silver":
      case "silver apples":
      case "silver apples creche":
     
echo "<p>Silver Apples Creche</p><p><img src=\"image/b14.jpg\" width=\"100%\"/></p><p> <a href=\"SAC.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";

      break; 
      case "president's house":
      case "president house":
      case "presidents house":
     case "presidents house ul":
echo "<p>President's House UL</p><p><img src=\"image/b12.jpg\" width=\"100%\"/></p><p> <a href=\"PresidentH.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";

      break; 
      case "university bridge":
      case "bridge":
echo "<p>University Bridge</p><p><img src=\"image/b04.jpg\" width=\"100%\"/></p><p> <a href=\"SB.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";

      break; 
      case "pedestrian living bridge":
      case "living bridge":
echo "<p>Pedestrian Living Bridge</p><p><img src=\"image/b05.jpg\" width=\"100%\"/></p><p> <a href=\"LB.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";


      break; 
      case "ul boathouse":
      case "boathouse":
      case (preg_match('/^bh[o|b|g|1|2|3|4|5](\d)*/', $keyword) ? true : false):
echo "<p>UL Boathouse</p><p><img src=\"image/b16.jpg\" width=\"100%\"/></p><p> <a href=\"ULboat.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";


      break; 
      case "cappavilla village":
      case "cappavilla":
echo "<p>Cappavilla Village</p><p><img src=\"image/b10.jpg\" width=\"100%\"/></p><p> <a href=\"CAPPA.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";


      break; 
      case "health sciences":
      case "health":
echo "<p>Health Sciences</p><p><img src=\"image/b07.jpg\" width=\"100%\"/></p><p> <a href=\"HC.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";


      break; 
      case "engineering research building & millstream courtyard building ":
      case "engineering research building":
      case "engineering research":
       case "engineering":
       case "engineering building":
        case "millstream":
           case "courtyard":
           case "millstream courtyard": 
 case "millstream courtyard building": 
 case "mc":

case (preg_match('/^mc[o|b|g|1|2|3|4|5](\d)*/', $keyword) ? true : false):
case (preg_match('/^er[o|b|g|1|2|3|4|5](\d)*/', $keyword) ? true : false):
echo "<p>Engineering Research Building & Millstream Courtyard Building</p><p><img src=\"image/A17.jpg\" width=\"100%\"/></p><p> <a href=\"ER.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";

  		  break;

      case "cs":
  		case "csis":
  		case "csis building":
  		case "computer":
  		case "computer science":
  		case "computer science building":
      case (preg_match('/^cs[g|1|2|3](\d)*/', $keyword) ? true : false):
  		echo "<p>Computer Science Building</p><p><img src=\"image/A19.jpg\" width=\"100%\"/></p><p> <a href=\"CSB.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";

  		break;

  		case "main":
  		case "main building":
  		case "eden":
  		case "red rainsins":
  		case "block a":
  		case "block b":
  		case "block c":
  		case "block d":
  		case "block e":
      case "a":
      case "b":
      case "c":
      case "d":
      case "e":
      case (preg_match('/^a[o|g|m|1|2](\d)*/', $keyword) ? true : false):
      case (preg_match('/^b[o|g|m|1|2](\d)*/', $keyword) ? true : false):
      case (preg_match('/^c[o|g|m|1|2](\d)*/', $keyword) ? true : false):
      case (preg_match('/^d[o|g|m|1|2](\d)*/', $keyword) ? true : false):
      case (preg_match('/^e[o|g|m|1|2](\d)*/', $keyword) ? true : false):
  		echo "<p>Main Building</p><p><img src=\"image/A3.jpg\" width=\"100%\"/></p><p> <a href=\"MD.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";
  		break;
      case "lonsdale":
      case "lonsdale building":
      case (preg_match('/^l[o|b|g|1|2|3|4|5](\d)*/', $keyword) ? true : false):
echo "<p>Lonsdale Building</p><p><img src=\"image/A25.jpg\" width=\"100%\"/></p><p> <a href=\"LonB.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";
break;

case "schrodinger":
case "schrodinger building":
case (preg_match('/^sr[o|b|g|1|2|3|4|5](\d)*/', $keyword) ? true : false):
echo "<p>Schrodinger Building</p><p><img src=\"image/A24.jpg\" width=\"100%\"/></p><p> <a href=\"Schrod.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";
break;

case "schumann":
case "schumann building":
case (preg_match('/^s[o|b|g|1|2|3|4|5](\d)*/', $keyword) ? true : false):
echo "<p>Schumann Building</p><p><img src=\"image/A15.jpg\" width=\"100%\"/></p><p> <a href=\"Schuman.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";
break;

case "languages":
case "languages building":
case (preg_match('/^lc[o|b|g|1|2|3|4|5](\d)*/', $keyword) ? true : false):
echo "<p>Languages Building</p><p><img src=\"image/A22.jpg\" width=\"100%\"/></p><p> <a href=\"LanB.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";
break;

case "orchestra":
case "chamber":
case "irish chamber orchestra building":
case (preg_match('/^ic[o|b|g|1|2|3|4|5](\d)*/', $keyword) ? true : false):
echo "<p>Irish Chamber Orchestra Building</p><p><img src=\"image/A6.jpg\" width=\"100%\"/></p><p> <a href=\"ICO.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";
break;

case "tierney":
case "lero":
case "tierney building house":
case (preg_match('/^t[o|b|g|1|2|3|4|5](\d)*/', $keyword) ? true : false):
echo "<p>Tierney Building House</p><p><img src=\"image/A16.jpg\" width=\"100%\"/></p><p> <a href=\"TB.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";
break;

case "pavilion":
case "ul sports pavilion building":
case (preg_match('/^pb[o|b|g|1|2|3|4|5](\d)*/', $keyword) ? true : false):
echo "<p>UL Sports Pavilion Building</p><p><img src=\"image/A7.jpg\" width=\"100%\"/></p><p> <a href=\"SP.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";
break;

case "analog":
case "analog devices building":
case (preg_match('/^ad[o|b|g|1|2|3|4|5](\d)*/', $keyword) ? true : false):
echo "<p>Analog Devices Building</p><p><img src=\"image/A1.jpg\" width=\"100%\"/></p><p> <a href=\"AD.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";
break;

case "ibc":
case "international business centre":
case "ibc building":
case (preg_match('/^ibc[o|b|g|1|2|3|4|5](\d)*/', $keyword) ? true : false):
echo "<p>IBC Building</p><p><img src=\"image/A14.jpg\" width=\"100%\"/></p><p> <a href=\"IBC.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";
break;

case "mssi":
case (preg_match('/^ms[o|b|g|1|2|3|4|5](\d)*/', $keyword) ? true : false):
echo "<p>MSSI</p><p><img src=\"image/A20.jpg\" width=\"100%\"/></p><p> <a href=\"MSSI.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";
break;

case "physical":
case "physical education":
case "sports":
case "sports science":
case "physical education & sports science building":
case "p":
case (preg_match('/^p[o|b|g|1|2|3|4|5](\d)*/', $keyword) ? true : false):
echo "<p>Physical Education & Sports Science Building</p><p><img src=\"image/b17.jpg\" width=\"100%\"/></p><p> <a href=\"PE.html\" target=\"_self\" data-transition=\"none\" data-theme=\"a\" data-role=\"button\" data-inline=\"true\">More Details</a>
</p>";
break;


  		default:
  		echo '<p>Sorry, the system doesn\'t recogonize the input so far, try next time please.</p>';
  		break;

  	}?>
  </div>
</div> 
</body>
</html>
