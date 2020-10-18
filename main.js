
var day;
var d= new Date();
var y = d.getFullYear();
  var k = d.getDate();
  var month= ["January","February","March","April","May","June","July",
            "August","September","October","November","December"];
  var m= month[d.getMonth()];
var today=new Date().getDay();
switch (today) {
  case 0:
    day = "Sunday";
    break;
  case 1:
    day = "Monday";
    break;
  case 2:
     day = "Tuesday";
    break;
  case 3:
    day = "Wednesday";
    break;
  case 4:
    day = "Thursday";
    break;
  case 5:
    day = "Friday";
    break;
  case 6:
    day = "Saturday";
}
document.getElementById("day").innerHTML=day+","+m + k+","+y;

  


  

        $(window).on("scroll", function () {
        if ($(window).scrollTop() >= 80) {           
            $('.title').show();
        }else if($(window).scrollTop()){

            $('.title').hide();

        }
       
    });




    