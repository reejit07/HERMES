

function myFunction()
{

var x=$('#validationDefault07').val().length;

if(x>=1)
$("#check1").show();  
else
{
$("#check1").hide();  
$("#mychart3_bar").css("backgroundColor","red");
    $("#mychart3_bar").animate({
      width:"5%"},2000); 
}
switch (x) {
  case 3:
    $("#mychart3_bar").css("backgroundColor","red");
    $("#mychart3_bar").animate({
      width:"15%"},2000); 
    break;
  case 5: 
    $("#mychart3_bar").css("backgroundColor","yellow");
    $("#mychart3_bar").animate({
      width:"30%"},2000); 
    break;
  case 7:
    $("#mychart3_bar").css("backgroundColor","yellow");
    $("#mychart3_bar").animate({
      width:"60%"},2000);   
    break;
  case 8:
    $("#mychart3_bar").css("backgroundColor","green");
    $("#mychart3_bar").animate({
      width:"80%"},2000);   
    break;

  case 10:
    $("#mychart3_bar").css("backgroundColor","green");
    $("#mychart3_bar").animate({
      width:"100%"},2000);  
    break;

}

  


 


} 

