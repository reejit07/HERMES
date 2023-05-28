


var messages = [], //array that hold the record of each string in chat
  lastUserMessage = "", //keeps track of the most recent input string from the user
  botMessage = "", //var keeps track of what the chatbot is going to say
  botName = "SARATHI", //name of the chatbot
  talking = true; //when false the speach function doesn work
   let msg =[""];
   var temp=0;
   var q=0;
  
//edit this function to change what the chatbot says
function chatbotResponse() {
  talking = true;
  botMessage = "I didnt get what you said"; //the default message
  
  
      if(search_word(lastUserMessage,"CONTACT"))
     {
         
            botMessage="EMAIL: hermesmessenger000@gmail.com";
         
     
     }
     
     
        if (search_word(lastUserMessage,"YOUR")&&search_word(lastUserMessage,"NAME")) {
    botMessage ="SARATHI";
  }
  
  
       
       
       //vaccine
       if(lastUserMessage=="VACCINE")
     {
           botMessage="Please elaborate your vaccine related issue!";
        
               
     }
      
      
       if(search_word(lastUserMessage,"REGISTER")&&search_word(lastUserMessage,"VACCINE"))
             botMessage="To register go to navbar->miscellaneous->vaccine corner";
         
          if(search_word(lastUserMessage,"DEREGISTER")&&search_word(lastUserMessage,"VACCINE"))
              botMessage="To deregister go to navbar->miscellaneous->vaccine corner->navbar->deregister";
      
      
      
      
      //room
      
      
       if(search_word(lastUserMessage,"CREATE")||search_word(lastUserMessage,"JOIN")&&search_word(lastUserMessage,"ROOM"))
         {
             botMessage="Enter roomname and key then click enter";
             
         }
      
      
      if(lastUserMessage==="ROOM")
     {
           botMessage="Please elaborate your room related issue!";
           
        
      
         
     }
     
         if(search_word(lastUserMessage,"INVITE")&&search_word(lastUserMessage,"ROOM"))
         {
             
               botMessage="First create room then share roomname and key";
               
         }
         
          if(lastUserMessage==="WHAT IS KEY"||lastUserMessage==="WHY KEY")
         {
             
               botMessage="Key is a entity used for encrypting your message";
         }
         
     
     //key
          if(search_word(lastUserMessage,"KEY"))
         {
             
               botMessage="Key is a entity used for encrypting your message";
         }
     
     
     //profile
      if(search_word(lastUserMessage,"PROFILE"))
     
     {
           
         botMessage="To look for your name navbar->profile";
      
     
     }
     
     //change password
     
     if(lastUserMessage=="PASSWORD")
     {
         
          botMessage="Please elaborate your password related issue!";
         
     
         
         
     }
     
     if(search_word(lastUserMessage,"CHANGE")&&search_word(lastUserMessage,"PASSWORD"))
     
     {
         botMessage="To change password navbar->change password";
         
     }
      
         if(search_word(lastUserMessage,"FORGOT")&&search_word(lastUserMessage,"PASSWORD"))
     
     {
         botMessage="No worries, click forgot password enter OTP and new password will be emailed to you";
         
     }
      
       
   if (lastUserMessage === "YEAH" || lastUserMessage ==="OK"||lastUserMessage ==="YES"||lastUserMessage ==="NO")
  {
     const hc = ["Okayee","Nice"];
    botMessage = hc[Math.floor(Math.random()*(hc.length))];
  }



     
       
      if(lastUserMessage==="HOW ARE YOU?"||lastUserMessage=== "HOW'S IT GOING?"||lastUserMessage==="HOW ARE YOU"||lastUserMessage=== "HOW'S IT GOING") 
       {
           const hii = ["I am doing well","Fine","Not so good not so bad"]
    botMessage = hii[Math.floor(Math.random()*(hii.length))];
           
       }
       
       
       if(search_word(lastUserMessage,"BYE")) 
       {
           const hiiw = ["Tata","Byeee","Come soon my friend"]
    botMessage = hiiw[Math.floor(Math.random()*(hiiw.length))];
           
       }
       
        if(search_word(lastUserMessage,"JOKE")||search_word(lastUserMessage,"JOKES")) 
       {
           const hiiw = ["What’s the best thing about Switzerland?I don’t know, but the flag is a big plus.THats funny right","Wife: Why do you wear your specs only when I come in.Husband: The doctor has ordered me to wear my specs whenever I get an headache. THats funny right ","Customer in a hotel: Waiter, this soup tastes funny! Waiter: Oh!, the chef must have been laughing when he prepared it sir. THats funny right"]
    botMessage = hiiw[Math.floor(Math.random()*(hiiw.length))];
           
       }
       
       
        if(search_word(lastUserMessage,"SONG")||search_word(lastUserMessage,"SONGS")) 
       {
           const hiiw = ["My plane touches down at eleven forty-fiveI'm comin thru, want you bout to show you whyI got the game from the pimps and players Oops I sound awful SORRY","Not now!my voice is cracking","Ooops ,I ran out of songs!!"]
    botMessage = hiiw[Math.floor(Math.random()*(hiiw.length))];
           
       }
       
      
      
        if(q==1)
       {
         if(lastUserMessage==="YES")    
       {
            botMessage ="Though we are young,we need love too, like grown-ups do, yeah.We need a song,a young love songfor me and you,for me and you.it's about time someone wrote one for us.it's about time someone wrote one for us.I know this is true, look at me and you, yeah).We ride alone.all over the world, (all over the world)all over the world. Let them laugh and call it happy love. (Ha, ha, ha, happy love).. Oops I sound awful SORRY";
            q=0;
       }
           else if(lastUserMessage==="NO")
           {
                botMessage ="No issue ;-)";
               q=0
           }
           else
           {
               botMessage="Please reply YES OR NO";
               
           }
       }
      
       
       if(search_word(lastUserMessage,"LOVE")&&search_word(lastUserMessage,"YOU"))
       {
          
            botMessage ="That's so amazing to hear it?Hey can I sing a song for you?";
            q=1;
       } 
      
       
         if(search_word(lastUserMessage,"GREAT")||search_word(lastUserMessage,"WOW")||search_word(lastUserMessage,"WONDERFUL")||search_word(lastUserMessage,"NICE"))
       {
          
            botMessage ="I felt good that you liked it";
          
       } 
       

  
   
   
   if(lastUserMessage==="CLR")
   {
     
      messages=["","&nbsp;","&nbsp;","&nbsp;","&nbsp;","&nbsp;","&nbsp;","&nbsp;","&nbsp;","&nbsp;","&nbsp;"];
       temp=0;
      botMessage=">>>DEVELOPED BY @infopythonCodes<<<";
      times=-1;
      for(var i=2;i<11;i++)
      {
     document.getElementById("chatlog" + i).style.backgroundColor = "white";
     document.getElementById("chatlog" + i).style.padding = "0";
      }
      
   }
   
   
   
  
   
//--------  
if(botMessage!="I didnt get what you said")
     msg.push(lastUserMessage);
  else
  {
      //love sync
   $.ajax({
       url:'bot1',
       async:false,
       type:'post',
        data:{ question: lastUserMessage , answer: botMessage} ,
        success: function (data) {
            botMessage=data;
        },
   })


  msg.push(lastUserMessage);
  }     

  
}
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//****************************************************************
//
//
//
//this runs each time enter is pressed.
//It controls the overall input and output

var times=0;

function newEntry() {
  //if the message from the user isnt empty then run 
  if (document.getElementById("chatbox").value != "") {
    //pulls the value from the chatbox ands sets it to lastUserMessage
    lastUserMessage = document.getElementById("chatbox").value;
    //sets the chat box to be clear
    document.getElementById("chatbox").value = "";
    //adds the value of the chatbox to the array messages
     var str="YOU :";
    messages.push("<strong>" + str.fontcolor("white") + "</strong> "+lastUserMessage.fontcolor( "white" ));
    //Speech(lastUserMessage);  //says what the user typed outloud
    //sets the variable botMessage in response to lastUserMessage
    chatbotResponse();
    var str1=botName+" :";
    //add the chatbots name and message to the array messages
    messages.push("<strong>" + str1.fontcolor("white") + "</strong> " + botMessage.fontcolor("white"));
    // says the message using the text to speech function written below
    if(botMessage!=">>>DEVELOPED BY @infopythonCodes<<<")
    {
    Speech(botMessage);
    }
        times=times+2;
    //outputs the last few array elements of messages to html
    for (var i = 1; i < 11; i++) {
      if (messages[messages.length - i])
        document.getElementById("chatlog" + i).innerHTML = messages[messages.length - i];
      
        
            
          
       
    }
      for(var t=times;t>0;t--)
              {
               
                         if(t%2==0){
               document.getElementById("chatlog" + t).style.backgroundColor = "grey";
                 document.getElementById("chatlog" + t).style.padding= "5px";
                document.getElementById("chatlog" + t).style.borderRadius = "2px";
                  }
               else
               {
               document.getElementById("chatlog" + t).style.backgroundColor = "#3AAFA9";
                 document.getElementById("chatlog" + t).style.padding= "5px";
                document.getElementById("chatlog" + t).style.borderRadius = "2px";
               }
               
                     
                     
                 }
             
  
  }
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
        
    });``







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

   
        $(".Layout").show();
        $(".chat_on").hide();
  
});


function search_word(text, word){
    
    var x = 0, y=0;
   
    for (i=0;i< text.length;i++)
        {
        if(text[i] == word[0])
            {
            for(j=i;j< i+word.length;j++)
               {
                if(text[j]==word[j-i])
                  {
                    y++;
                  }
                if (y==word.length){
                    x++;
                }
            }
            y=0;
        }
    }

   if (x>0)
   return true;
   else
   return false;
 
}



  