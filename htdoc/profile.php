<?php include("header.php"); ?>
<?php


//echo $_SESSION["STATUS"];

if (!isset($_SESSION["STATUS"]) || ($_SESSION["STATUS"]) < 2 )
{
    
	header("location: logout.php");
	exit();
}
?>
<TABLE  align="center" width="624" height="800" border="1" class="pa2">
<div class="w3-content" style="max-width:1000px">
  <img class="w3-image" src="image/007.png"  width="1600" height="800">
 

  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="image/225.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About Profile</h1><br>
      <h5 class="w3-center">สวัสดีดีครับทุกท่านที่เขามาชมประวัติเล็กๆน้อยๆนี้</h5>
      <p class="w3-large w3-hide-medium">ตัวหน้าเพจนี้ผมจะเล่าเรื่องเกี่ยวกับตัวผมนั้นเองว่าผมเป็นคนยังไงชอบอะไรทำอะไรแบบบไหนคือตัวนะครับ หรือให้เรียกว่า <span class="w3-tag w3-light-grey">My</span> Profile</p>
      <p class="w3-large w3-text-grey w3-hide-medium">สวัสดีครับผม นิสิตมหาวิทยาลัยเนชั่น ชั้นปีที่ 3 เด็กฝึกงานดีๆนั้นเอง ได้ทำเว็บเพจตัวนี้ขึ้นในภาษา PHP และ Html รวมไปถึงการใช้ CSS และBootsrap เข้าช่วยทำให้เว็บเพจของผมนี้มีความสวยงามมากขึ้นเท่าที่ผมอยากให้มีน่ะ ฮ่าๆๆ เข้าเรื่องๆ หลักๆแล้วถือว่าเป็นการฝึกทำ Code และ การฝึกอ่านCode ไปในตัวในการแก้ไขปัญหาที่จะเจอในภายภาคหน้าได้ซึ่งจุดๆนี้ถือว่าเป็นหนึ่งใการฝึกและทำที่ดีเช่นกันครับ เอาเป็นว่ามาดูประวัติผมกันหน่อยว่ามีอะไรบ้าง....</p>
    </div>
  </div>
  
  <hr>
  
  
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">About Profile</h1><br>
      <h4>My Name</h4>
      <p class="w3-text-grey">Name นายวชิรศักดิ์ สายสูงธนาศักดิ์ NickName ฟลุ๊ค</p><br>
    
      <h4>My Birthday</h4>
      <p class="w3-text-grey">วันเกิดผม คือ เสาร์ที่ 27 มินายน พ.ศ.2541 หรือ 1998</p><br>
    
      <h4>Other</h4>
      <p class="w3-text-grey">Blood’s Group : AB </p>
	  <p class="w3-text-grey">Birthday’s Place : โรงพยาบาลจุฬาลงกรณ์ จังหวัดกรุงเทพมหานคร </p>
	  <p class="w3-text-grey">My place : 444/2 มหาวิทยาลัยเนชั่น ตำบลพระบาท อำเภอเมืองลำปาง จังหวัดลำปาง 52000  </p>
	  <p class="w3-text-grey">Education’s Background : นิสิต มหาลัยชั้นปีที่ 3 </p>
		<p class="w3-text-grey">Contract : Facebook Wachirasak Kung ,0826197995 </p><br>

      <h4>Hobbies</h4>
      <p class="w3-text-grey">ตัดต่อวิดีโอ นั่งอ่านการ์ตูน ดู Anime ตัดต่อภาพ นั่งดู Code ชาวบ้านแล้ว Copy มาลองเล่น</p><br>

	  <h4>Motto’s Lifestyle</h4>
      <p class="w3-text-grey">สนุกกับสิ่งที่น่าสนใจและให้ความสำคัญกับความรู้สึกของตัวเอง</p><br>
	      
      <h4>Cool phrase</h4>
      <p class="w3-text-grey">	สถานศึกษาน่ะไม่ได้รับผิดชอบต่ออนาคตของพวกคุณหรอก คนที่จะรับผิดชอบก็คือตัวของพวกคุณเองเท่านั้น ดังนั้นพวกคุณจงหาสิ่งที่ตัวเองอยากทำให้เจอ เพราะนี้ี่เป็นอิสระของพวกคุณ ต่อให้ไม่มีประตูทุกหนแห่งก็ตามเถอะ หากพวกคุณต้องการละก็ไม่ว่าที่ไหนก็สามารถไปได้ ในไม่ช้าชีวิตคนเราก็จะต้องมีการเปลี่ยนแปลง แต่แล้วก็จะต้องเจอสิ่งที่น่าสนใจเข้า จนอาจจะรู้สึกว่าจะมัวช้าไม่ได้อีกต่อไปแล้วก็เป็นได้!!!</p>    
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="image/008.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
	<div class="w3-col l6 w3-padding-large">
      <img src="image/009.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>

  <hr>

	 </TABLE>

<?php include("footer.php"); ?>