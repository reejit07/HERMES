var messages = [], //array that hold the record of each string in chat
  lastUserMessage = "", //keeps track of the most recent input string from the user
  botMessage = "", //var keeps track of what the chatbot is going to say
  botName = "SARATHI", //name of the chatbot
  talking = true; //when false the speach function doesn work
   let msg =[""];
   var temp=0;
   var q=0;
   var numberoftimes=0;

  
function chatbotResponse(message) {
 
   talking=true;
  
  message=message.toLowerCase();


 if(message.search("hi")>=0||message.search("hello")>=0||message.search("hola")>=0||message.search("hey")>=0||message.search("namaste")>=0||message.search("nomoskar")>=0)
 {
  botMessage="Hi I am SARATHI,an AI bot. You can ask me anything";

  displayl(botMessage);
  Speech(botMessage);
  

 }
  else{



  message=message+" answer in 10 words";

  botMessage="Sorry,Please try asking something else"; //default message

  let _token =$('meta[name="csrf-token"]').attr('content');

 var jqxhr= $.post('bot1',{question:message,_token:_token},function(result)
  {
  

    botMessage=result;
    displayl(botMessage);
    Speech(botMessage);
    $('#chatborder').scrollTop($('#chatborder').prop('scrollHeight')); 

  });


  jqxhr.fail(function() {
   
  botMessage="Server not reachable.Check your network connectivity";
  displayl(botMessage);
  Speech(botMessage);
  $('#chatborder').scrollTop($('#chatborder').prop('scrollHeight')); 
  });

  }

  
}




$(".send").click(function(){
     
  newEntry();
 z=msg.length; 
});




//clears the placeholder text icon the chatbox
//this function is set to run when the users brings focus to the chatbox, by clicking on it
function placeHolder() {
document.getElementById("chatbox").placeholder = "";
}

$(document).ready(function(){

$(".chat_on").click(function(){
    $(".Layout").toggle();
    $(".chat_on").hide();
    document.getElementById("chatbox").select();
});

   $(".divX").click(function(){
    $(".Layout").hide();
      $(".chat_on").show(300);
       temp=0;
        
});


});





function newEntry() {


  if (document.getElementById("chatbox").value != "") {
    //pulls the value from the chatbox ands sets it to lastUserMessage

    if(numberoftimes==0)
    {
       
      document.getElementById("firstmsg").style.display="none"; 
      numberoftimes++;
    }


    lastUserMessage = document.getElementById("chatbox").value;
    //sets the chat box to be clear
    document.getElementById("chatbox").value = "";
    //adds the value of the chatbox to the array messages
    
    msg.push(lastUserMessage);
    
    displayr(lastUserMessage);

    $('#chatborder').scrollTop($('#chatborder').prop('scrollHeight')); 
  
    //sets the variable botMessage in response to lastUserMessage
    chatbotResponse(lastUserMessage);
    $('#chatborder').scrollTop($('#chatborder').prop('scrollHeight')); 
  
  }
}




var z=0;
//runs the keypress() function when a key is pressed
document.onkeypress = keyPress;
//if the key pressed is "enter" runs the function newEntry()
function keyPress(e) {
  var x = e || window.event;
  var key = (x.keyCode || x.which);
  if (key == 13 || key == 3) {
    //runs this function when enter is pressed
    newEntry();
  }
  z=msg.length; 
}

var z=0;
$(document).keyup(function(e) {
        if (e.which === 38) {
        
         if(msg[z-1]!=undefined)
         {
           document.getElementById("chatbox").value = msg[z-1];
         z=z-1;
         }
        }
        
         if (e.which === 40) {
        
         if(msg[z]!=undefined)
         {
           document.getElementById("chatbox").value = msg[z];
         z=z+1;
         }
        }
        
    });




  
  function displayl(message)
{
   animationstop();
   
  document.getElementById("chatborder").innerHTML +="<br><div class='container'><p style='position:relative; width:80%; align:right; border-radius:5px; box-shadow: 0 1px 3px rgba(0,0,0,0.2);   font-size:100%; text-align: center;'> <strong>SARATHI: </strong><span class='messagebody'>"
  +message+"</span></p></div>";
}

function displayr(message)
{

  document.getElementById("chatborder").innerHTML +="<br><div class='container'><p style=' background-color: #F3F3F3; position:relative; left:15%; border-radius:5px;   box-shadow: 0 1px 3px rgba(0,0,0,0.2); width:80%; align:right;  font-size:100% ; text-align: center;'><span class='messagebody'>"
  +message+"</span></p></div>";

  animationstart();
}

let interval;

function animationstart()
{

  interval=setInterval(loading,200);


}


function animationstop()
{

  clearInterval(interval);
  document.getElementById("hermes").style.display="none";
  
  
}



function loading()
{
    if($("#hermes").is(':visible'))
    $("#hermes").fadeOut();
    else
    $("#hermes").fadeIn();

}


//text to Speech
//https://developers.google.com/web/updates/2014/01/Web-apps-that-talk-Introduction-to-the-Speech-Synthesis-API
function Speech(say) {

  if ("speechSynthesis" in window && talking) {
  
    var utterance = new SpeechSynthesisUtterance(say);
    //msg.voice = voices[10]; // Note: some voices dont support altering params
    //msg.voiceURI = "native";
    //utterance.volume = 1; // 0 to 1
    //utterance.rate = 0.1; // 0.1 to 10
    //utterance.pitch = 1; //0 to 2
    //utterance.text = "Hello World";
    //utterance.lang = "en-US";
    speechSynthesis.speak(utterance);
  }
}