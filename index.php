<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>طرح نیزه ای چهار خال</title>
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <meta name="viewport" content="initial-scale=1, width=device-width" />
</head>
<body>
 



<style>

@font-face{
	
	font-family:'yekan';
	src: url('fonts/yekan.ttf') format('truetype'),
	url('fonts/yekan.eot?#iefix') format('embedded-opentype');
	
	}
    *{ text-align:right; direction:rtl;font-family:yekan;}
    body{
        padding:24px;

        height: 100vh;
  background-color: #9b59b6;
  /*Linear gradient... */
  background: 
    radial-gradient(
     at center, #3498db, #9b59b6
    );
    }
#demo{
    display: flex;
    flex-direction: row;
    font-size: 24px;
    margin-bottom: 80px;


}
#container{ 
    display:flex;
    flex-direction:column;
    align-items: flex-start;
    
    }

    .inputdiv{
    display: flex;
    flex-direction: row;
    align-items: center;
    flex-basis: 30px;
    width: auto;
    order: 2;
    }
    .onvan{
    align-self: center;
    width: 176px;
    font-size:20px;
    margin-left: 30px;

    }

    .inputBox{
        border-radius: 8px;
        box-shadow: 2px 2px 2px #a9b7de;
        height: 24px;
        margin-bottom: 8px;
        width: 160px
}
    #buttonID{
        order: 4;
        margin-top: 24px;
        border-radius: 8px;
        box-shadow: 2px 2px 2px #a9b7de;
        height: 32px;
        margin-bottom: 8px;
        width: 160px;
        display: flex;
        justify-content: center;
        margin-right: 204px;
        cursor:pointer;
        
    
    }
    #Description{
        order: 4;
        margin-top: 24px;
        border-radius: 8px;
        box-shadow: 2px 2px 2px #a9b7de;
        height: 32px;
        margin-bottom: 8px;
        width: 160px;
        display: flex;
        justify-content: center;
        margin-right: 204px;
        cursor:pointer;
        
    
    }
   

    #data p{
        font-size: 16px;
        margin-bottom:32px;
        }
    #datasection{
        display:flex;
        flex-direction:row;
        font-size: 20px;
    }
    .Title{
        background-color: #e6e7ed;
        border: 1px solid #89a0c1;
        box-shadow: 1px 1px 1px #b3c0c2;
        border-radius: 4px;
        width: 222px;
        text-align: center;
        margin-bottom:8px;
        font-size: 16px;
    }
    .amount{

        background-color: #e6e7ed;
        border: 1px solid #89a0c1;
        box-shadow: 1px 1px 1px #b3c0c2;
        border-radius: 4px;
        width: 250px;
        text-align: center;
        margin-right: 16px;
        margin-bottom:8px;
        font-size: 20px;
    }

    @media screen and (min-width:320px)and (max-width:768px) {
    body{
        width:100wh;
        padding:16px;
        }
    #demo {
         font-size:20px;
    }
    .onvan {    
        
         width: 136px;
         font-size: 16px;
    }

    .inputBox {
         
         width: 92px;
    }
    #buttonID {
    width: 92px;
    margin-right: 167px;
    }
    #Description {
    width: 92px;
    margin-right: 167px;
    }
    .Title{
         font-size: 14px;
         width: ;
    }

    .amount{
        font-size: 14px;
        width: ;
    }
    }
</style>
<p id="demo">کاربر گرامی</br> لطفا طول و عرض آینه و همچنین طول ضلع آینه های کوچکی که کار میشود  را در فرم وارد کنید</p>
<div id="container">
   <div class="inputdiv lengthDiv"><span class="onvan">طول آینه:<b id="onvan" style="color:#F00; ">*</b></span><input type="text" id="length" class="inputBox"  /></div>
   <div class="inputdiv widthDiv"><span class="onvan">عرض آینه:<b id="onvan" style="color:#F00; ">*</b></span><input type="text" id="Width" class="inputBox" /></div>
   <div class="inputdiv sideDiv"><span class="onvan">ضلع آینه های کوچک:<b id="onvan" style="color:#F00; ">*</b></span><input type="text" id="side" class="inputBox" /></div>
   <button id="buttonID" type="button" onclick="check()">ارسال</button>
   <button id="Description" type="button" onclick="description()">توضیحات</button>

</div>

<div id="data" style="display:none;">
<p> این نقشه با ابعادی که در پایین نوشته شده کشیده شده است</p>
<div id="datasection"><div class="Title">طول:</div><div class="amount" id="lengthAmount"></div></div>
<div id="datasection"><div class="Title">عرض:</div><div class="amount" id="widthAmount"></div></div>
<div id="datasection"><div class="Title">ضلع آینه کوچک:</div><div class="amount" id="sideAmount"></div></div>
<div id="datasection"><div class="Title">مقدار هر قسمت روی طول:</div><div class="amount" id="tinyDiameterAmount"></div></div>
<div id="datasection"><div class="Title">مقدار هر قسمت روی عرض:</div><div class="amount" id="largeDiameterAmount"></div></div>
<div id="datasection"><div class="Title">طول شمشیری:</div><div class="amount" id="swordAmount"></div></div>
<button id="buttonID" type="button" style="margin-right: 16px;" onclick="back()">برگشت</button>

</div>

<div id="descriptDiv" style="display:none;">

با سلام...این برنامه برای تمام سایزها تست شد با اطلاعات اینجانب مشکلی نبود فقط ذکر یک سری توضیحات را لازم میدانم... </br>
اول اینکه این برنامه برای آینه های افقی طراحی شده هر چند عمودی را هم میکشد اما برای آینه عمودی لازم است که طول شمشیری با نسبت دیگری باشد که چون در شرح تمرین نبود  نوشته نشد.</br> دوم اینکه از آنجایی که سایزهای داده شده  در متن تمرین بزرگ است برای اطمینان از درستی پروژه میتوان از سایزهای کوچکتر مثل.800.300.50 استفاده کرد.</br>
سوم اینکه گاهی با طول و عرضی که داده میشود و حتما باید ثابت باشد ضلع دلخواه شما مناسب نیست که برنامه ضلع را تصحیح و در مشخصات نقشه مینویسد</br>
چهارم اینکه درoperaبعضی خط ها دیده نمیشود .درfirefoxکم رنگ,ودرchromeواضح دیده میشود که متوجه علت آن نشدم
با تشکر از فرصتی که به اینجانب دادید</br>عطیه مسعودی"









<button id="buttonID" type="button" style="margin-right: 16px;" onclick="back()">برگشت</button>

</div>

<div><canvas id="myCanvas" width="0" height="0" style="border:1px solid #000000;">
</canvas></div>





<script type="text/javascript" src="js/sweetalert.min.js"></script>
<script>


function description(){
    document.getElementById("container").style.display = 'none';
    document.getElementById("demo").style.display = 'none';
    document.getElementById("descriptDiv").style.display = '';
}

function back(){
    document.getElementById("data").style.display = 'none';
    document.getElementById("myCanvas").style.display = 'none';
    document.getElementById("descriptDiv").style.display = 'none';
    document.getElementById("container").style.display = '';
    document.getElementById("demo").style.display = '';
}
function check(){


var length = document.getElementById("length").value;



var width = document.getElementById("Width").value;

var side = document.getElementById("side").value;




var largeDiameter= width/5;

var tinyDiameter= Math.sqrt((Math.pow((side*2), 2)) - (Math.pow(largeDiameter, 2)));
tinyDiameter=Math.floor(tinyDiameter);

if( isNaN(tinyDiameter)){swal("خطا", "این مقدار برای ضلع آینه های کوچک مناسب نیست.لطفا عدد دیگری وارد کنید", "error");}
else{

    document.getElementById("container").style.display = 'none';
    document.getElementById("demo").style.display = 'none';
    
    document.getElementById("data").style.display = '';
    document.getElementById("myCanvas").style.display = '';

var aval=Math.floor(length/tinyDiameter);
var dovom = length-(aval * tinyDiameter);
var sevom=dovom/aval;
tinyDiameter=tinyDiameter+sevom;


side=Math.sqrt((Math.pow((tinyDiameter), 2)) + (Math.pow(largeDiameter, 2)))/2;
sword=2*largeDiameter;

document.getElementById("lengthAmount").innerHTML =length;
document.getElementById("widthAmount").innerHTML = width;
document.getElementById("sideAmount").innerHTML = side;
document.getElementById("tinyDiameterAmount").innerHTML = tinyDiameter;
document.getElementById("largeDiameterAmount").innerHTML = largeDiameter;
document.getElementById("swordAmount").innerHTML = sword;


document.getElementById("myCanvas").height = width;
document.getElementById("myCanvas").width = length;




var c = document.getElementById("myCanvas");
var ctx = c.getContext("2d");








var i;
var j=0;

for(i=-(tinyDiameter) ; i<length ;i=(j-1)*tinyDiameter)
{  

ctx.moveTo(i, largeDiameter);
ctx.lineTo(i+tinyDiameter,0);
ctx.lineTo(i+(2*tinyDiameter),largeDiameter);
ctx.lineTo(i+tinyDiameter,2*largeDiameter);
ctx.lineTo(i, largeDiameter);
j++

}

ctx.stroke();





var i;
var j=0;

for(i=-(tinyDiameter) ; i<length ;i=(j-1)*tinyDiameter)
{  

ctx.moveTo(i, width-largeDiameter);
ctx.lineTo(i+tinyDiameter,width);
ctx.lineTo(i+(2*tinyDiameter),width-largeDiameter);
ctx.lineTo(i+tinyDiameter,width-(2*largeDiameter));
ctx.lineTo(i, width-largeDiameter);
j++

}
ctx.stroke();






for(i=tinyDiameter ; i<length ; i=i+tinyDiameter){
ctx.moveTo(i, 2*largeDiameter);
ctx.lineTo(i,3*largeDiameter);
}


ctx.stroke();
}


}

</script> 
 
</body>
</html>