<?php
$path = "../img/photo/";
$file0 = $_FILES["imgup0"]["name"];
$file = $_FILES["imgup"]["name"];
$file1 = $_FILES["imgup1"]["name"];
$file2 = $_FILES["imgup2"]["name"];
$file3 = $_FILES["imgup3"]["name"];
$file1 = $_FILES["imgup11"]["name"];

$filename0 = $path . $file0;
if (is_uploaded_file($_FILES["imgup0"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup0"]["tmp_name"], $filename0)) {
    //chmod("files/" . $filename0, 0644);
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "";
}
$filename = $path . $file;
if (is_uploaded_file($_FILES["imgup"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup"]["tmp_name"], $filename)) {
    //chmod("files/" . $filename, 0644);
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  $filename = $_POST["photo1"];
}

$filename1=$path . $file1;
if (is_uploaded_file($_FILES["imgup1"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup1"]["tmp_name"], $filename1)) {
    //chmod("files/" . $filename1, 0644);
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "";
}
$filename2=$path . $file2;
if (is_uploaded_file($_FILES["imgup2"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup2"]["tmp_name"], $filename2)) {
    //chmod("files/" . $filename2, 0644);
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "";
}
$filename3=$path . $file3;
if (is_uploaded_file($_FILES["imgup3"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup3"]["tmp_name"], $filename3)) {
    //chmod("files/" . $filename3, 0644);
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "";
}
$filename11=$path . $file11;
if (is_uploaded_file($_FILES["imgup11"]["tmp_name"])) {
  if (move_uploaded_file($_FILES["imgup11"]["tmp_name"], $filename3)) {
    //chmod("files/" . $filename11, 0644);
    echo "";
  } else {
    echo "ファイルをアップロードできません。";
  }
} else {
  echo "";
}

$cn1=mysql_connect("localhost","root","root");
$db=mysql_select_db("tegami",$cn1);
if(!empty($_POST["name"])){
$result = mysql_query("INSERT INTO preview(name,day,reader,name1,name2,info,yotei,photo0,photo1,photo2,photo3,photo4,photo11,cap1,cap2,cap3,cap4,cap11,kg,mmhg) VALUE(\"$_POST[name]\",\"$_POST[day]\",\"$_POST[reader]\",\"$_POST[name1]\",\"$_POST[name2]\",\"$_POST[info]\",\"$_POST[yotei]\",\"$filename0\",\"$filename\",\"$filename1\",\"$filename2\",\"$filename3\",\"$filename11\",\"$_POST[cap1]\",\"$_POST[cap2]\",\"$_POST[cap3]\",\"$_POST[cap4]\",\"$_POST[kg]\",\"$_POST[mmhg]\")",$cn1);
  }
$no = $_GET["no"];

?>
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta http-equiv="Content-type"content="text/html;charset=UTF-8">
    <title>プレビュー画面</title>
    <link rel="stylesheet" href="../css/home.css" />
    <link rel="stylesheet" href="css/home.css" />
    <style type="text/css">

      body {
      width:1100px;
      margin: auto;
    }
    .titlep{
    //font-size:30px;
    font-family :
    'Yu Gothic',
    sans-serif;

    text-align:left;
    color:#155378;
    
  }
  .titlep1{
    font-family: "HGS創英角ゴシックUB";
    text-align:left;
    font-size: 50px;
    color:#155479;
  }
  .hk11{
  //width:360px;
  text-align:right;
  color:#155378;
  padding-right: 100px;
  font-size: 20px;
  }
  .homemes{
    padding-top: 20px;
    padding-left:35px;
    font-size: 23px;
  }
    .toptable{
   
  }
.small{
border: transparent 8px solid;
}
.big{
  
  table-layout: fixed;
}
.kenkoub{
  font-size: 20px;
  //padding-top: 1px;
    border: transparent 4px solid;
  table-layout: fixed;
}
      </style>
  </head>
  <body"f3f3f3">
  <form method="post" action="../pages/upletter.php?no=<?php echo $no ?>" id="form" name="s1" enctype="multipart/form-data">
  <?php
      $today = date("Y/m/d");
    //  echo $today;
      $str1 = substr($today, 5, 2);
      $str2 = substr($today, 8, 2);
    //    echo $str1;
    //  echo $str2;
      if(($str1 == "12")){
        $s="../img/tsubaki_w120.png";
        $BG="wrap";
      }
      if(($str1 == "6")){
        $s="../img/sunflower_w120.png";
        $BG="wrap2";
      }
      if(($str1 == "3")){
        $s="../img/sakura_w120.png";
        $BG="wrap3";
      }
      if(($str1 == "9")){
        $s="../img/cosmos_w120.png";
        $BG="wrap4";
      }
    $result = mysql_query("SELECT * FROM complet WHERE name1 = 2017 and name2 = 1",$cn1);
    $i=0;
    while($row = mysql_fetch_array($result))
    {

      $no = $row["no"];
      $name = $row["name"];
      $day  = $row["day"];
      $reader=$row["reader"];
      $name1 = $row["name1"];
      $name2 = $row["name2"];
      $info = $row["info"];
      $yotei = $row["yotei"];
      $photo0 = $row["photo0"];
      $photo1 = $row["photo1"];
      $photo2 = $row["photo2"];
      $photo3 = $row["photo3"];
      $photo4 = $row["photo4"];
      $photo11 = $row["photo11"];
      $cap1 = $row["cap1"];
      $cap2 = $row["cap2"];
      $cap3 = $row["cap3"];
      $cap4 = $row["cap4"];
      $cap11 = $row["cap11"];
      $kg = $row["kg"];
      $mmhg = $row["mmhg"];

      if($photo11){
      $style = "style=\"display:none;\"";
      }
      else
      {
        $style = "";
      }
      if(!$photo11){
      $style1 = "style=\"display:none;\"";
      }
      else
      {
        $style1 = "";
      }       


       echo <<<EOM

      <input type="hidden" name="name" value="$name">
      <input type="hidden" name="name1" value="$name1">
      <input type="hidden" name="name2" value="$name2">
        
      <input type="hidden" name="day" value="$day">
      <input type="hidden" name="reader" value="$reader">
      <input type="hidden" name="info" value="$info">
      <input type="hidden" name="yotei" value="$yotei">
      <input type="hidden" name="photo0" value="$photo0">
      <input type="hidden" name="photo1" value="$photo1">
      <input type="hidden" name="photo2" value="$photo2">
      <input type="hidden" name="photo3" value="$photo3">
      <input type="hidden" name="photo4" value="$photo4">
      <input type="hidden" name="photo11" value="$photo11">
      <input type="hidden" name="cap1" value="$cap1">
      <input type="hidden" name="cap2" value="$cap2">
      <input type="hidden" name="cap3" value="$cap3">
      <input type="hidden" name="cap4" value="$cap4">
      <input type="hidden" name="cap11" value="$cap11">
      <input type="hidden" name="kg" value="$kg">
      <input type="hidden" name="mmhg" value="$mmhg">
      
          <Table class="toptable" background="../img/BG_spring.jpg" width="1100" height="553"style="border-style:solid;border-width:5px;
            border-color: rgba(200,100,20,0.0);table-layout: fixed;">
          <Tr>
           <Td width="600" height="10"></Td>
           <Td></Td>
           </Tr>
           <Tr>
           <Td width="600" height="10" class="titlep"style="font-size:30px;font-family:  font-family :'Yu Gothic',sans-serif;"><b>2017年１月</b></Td>
           <Td></Td>
           </Tr>
           <Tr>
           <Td width="600" height="10" rowspan="2" class="titlep1">ラヴィーレ習志野台便り</Td>
           <Td class="hk11" style="font-family :'Yu Gothic',sans-serif;"><b>発行日　2017年4月10日</b></Td>
           </Tr>
           <Tr>
           <Td  width="400" class="hk11"style="font-family :'Yu Gothic',sans-serif;"><b>編集責任者</b></Td>
           </Tr>
           <Tr>
           <Td height="10" rowspan="2" class="homemes" valign="top"style="font-family :'Yu Gothic',sans-serif;"><b>ホーム長メッセージ</b></Td>
           <Td height="300" align="center"><img src="../img/photo/IMG_0011.JPG" width="400" height="270"></Td>
           </Tr>
           <Tr>
           <Td height="190" valign="top" align="center"style="font-family :'Yu Gothic',sans-serif;"><Font size="5" color="BlueViolet" >コメント</Font></Td>
           </Tr>
           <Tr>
           <Td height="13"colspan="2"></Td>
           </Tr>
            <Tr>
           <Td align="center" colspan="2" bgcolor="#63584e"style="font-family :'Yu Gothic',sans-serif;"><Font size="6" color="white" ><b>今月の$name 様のご様子</b></Font></Td>
           </Tr>
           </Table>
            
            <table $style class="small" width="1100"style="table-layout: fixed;"height="100%">
               <Tr>
               <Td width="500" height="10" align="center"><img src="$photo1" width="450" height="314" ></Td>
               <Td width="500" height="10" align="center"><img src="$photo2" width="450" height="314"></Td>
               </Tr>
               <Tr>
               <Td height="17" valign="top" align="center"><Font size="6" color="BlueViolet"style="font-family :'Yu Gothic',sans-serif;" ><b>$cap1</b></Font></Td>
               <Td height="17" valign="top" align="center"><Font size="6" color="BlueViolet"style="font-family :'Yu Gothic',sans-serif;" ><b>$cap2</b></Font></Td>
               </Tr>
               <Tr>
               <Td width="500" height="10" align="center"><img src="$photo3" width="450" height="315"></Td>
               <Td width="500" height="10" align="center"><img src="$photo4" width="450" height="315"></Td>
               </Tr>
               <Tr>
               <Td height="17" valign="top" align="center"><Font size="6" color="BlueViolet"style="font-family :'Yu Gothic',sans-serif;" ><b>$cap3</b></Font></Td>
               <Td height="17" valign="top" align="center"><Font size="6" color="BlueViolet" style="font-family :'Yu Gothic',sans-serif;"><b>$cap4</b></Font></Td>
               </Tr>
            </table>

          <table  $style1 class="big" width="1100" height="100%">
                <Tr>
                <Td align="center" height="auto"><img src="$photo11"width="1000" height="708"></Td>
                </Tr>
                <Tr>
                 <Td height="15" valign="top" align="center" style="font-family :'Yu Gothic',sans-serif;"><Font size="6" color="BlueViolet" ><b>$cap11</b></Font></Td>
                </Tr>
          </table>
            <table class="kenkoub"  width="1100">
               <Tr>
               <Td width="1000" height="12" align="right"style="font-family :'Yu Gothic',sans-serif;">体重：　55 kg 　　血圧：　132 mmHg</Td>
               <Tr rules="none">
               <Td height="10"></Td>
               </Tr>
               <Tr>
               <Td height="23" bgcolor="#4169e1"></Td>
               </Tr>
            </table>
         


        

EOM;
}
?>

<div id="print"align="center">
      <a href="#" onclick="document.s1.submit(); return false;"><img src="../img/familyHistory_print.png"></a>
  <?php   echo' <a href="#" onclick="document.s1.submit(); return false;"><img src="../img/back_l.png"></a>';?>
</div>

</form>
  </body>
</html>