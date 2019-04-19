var accessToken = "50146251ea8540d6a1881718e673099a";
    var baseUrl = "https://api.dialogflow.com/v1/";
    $(document).ready(function() {
      $("#input").keypress(function(event) {
        if (event.which == 13) {
          event.preventDefault();
          send();
          this.value = '';
        }
      });
      $("#rec").click(function(event) {
        switchRecognition();
      });
     
      $("#btn01").click(function(event) 
      {
        setResponse('Hi! I am TopCat AI BoT. To get information about TopCat you may press any of the Quick Buttons or you may simply ask/type your question. Want some sample questions? Here they are: || "What is TopCat?" || "Where is TopCat?" || "What services does TopCat offer? || "Show contact details of TopCat?" || "Want to know about discounts at TopCat"');
        setButton("What is Topcat");
        setButton("Topcat price");
        setButton("Contact Details");
        setButton("Discounts");
      });
      $("#btn02").click(function(event) 
      {
        setResponse('Hi Hooman! I am the Bunker AI Assistant. To get information about the Bunkers, you may press the Quick Buttons or you may simply ask/type your question. Want some sample questions? Here they go: || "Tell me about Bunkers" ||"What is the price of bunkers?" || "What are the services at OffBeat Bunkers?" || "How can I book a bunker?" || "Give me the contact details for OffBeat Bunkers"'); 
        setButton("Offbeat Bunker Details");
        setButton("Bunker Booking");
        setButton("Bunker Contact Number");
        setButton("Bunker facilities");
      });
      $("#btn03").click(function(event) 
      {
        setResponse("I'm here to give you answers related to 8-Bit. Go ahead Ask me."); 
        setButton("8 bit Details");
        setButton("Book 8 Bit");
        setButton("8 Bit Contact Number");
      });
      $("#btn04").click(function(event) 
      {
        setResponse("Hello! Are you seeking information related to Fitness & Lifestyle? Go ahead, type in your message! I'm here to help you."); 
        setButton("Fitness Studio");
        setButton("Fitness & Lifestyle Price");
        setButton("Fitness & Lifestyle contact");
      });
      $("#btn05").click(function(event) 
      {
        setResponse("Seeking information about Y-East? Please tell me How may I help you?"); 
        setButton("What is YEast");
        setButton("Where is YEast");
        setButton("YEast Price");
      });
      $("#btn06").click(function(event) 
      {
        setResponse('Looking for an appointment Hooman? Please say/type "appointment" and I will complete the proceedings for you.'); 
      });
      $("#btn07").click(function(event) 
      {
        setResponse('Hi Hooman! To get information about Certifications you may press any of the Quick Buttons or you may simply ask/type your question. Want some sample questions? Here they go: || "What Certifications do you offer?" || "Career prospects of the certifications?" || "What is the price of a certificate course? || "Who do I contact for more details on certifications?" || "How can I book a seat for a certification?"|| "What is the average salary of Salesforce certified professional?"'); 
        setButton("Certifications Offered");
        setButton("Career Prospects");
        setButton('Price of a course');
        setButton('Book a seat');
        setButton('Average Salary');
      });
      $("#btn08").click(function(event) 
      {
        setResponse('Do not panic Hooman! Just say "Emergency" or press a quick button. I am here to help you!'); 
        setButton("Call Police");
        setButton("Call Ambulance");
        setButton("Call Fire Brigade");
      });
      $("#btn09").click(function(event) 
      {
        setResponse("How can I help?");
        setButton("Campus location");
        setButton("Call Campus");       
      });
      $("#btn10").click(function(event) 
      {
        setResponse("Momo-I-AM is here for you. Tell me what do you want to know?");     
        setButton("Menu");
        setButton("Details");
      });
      $("#btn11").click(function(event) 
      {
        setResponse('HELLO! This is button 11');
      });

    });

// Contact Details : KOLKATA KNOWLEDGE CAMPUS 124 B L Saha Road, Kolkata 700 053 Phone/Fax: +91 33 2403 2300/01 DURGAPUR KNOWLEDGE CAMPUS Arrah, Shibtala Via Muchipara, Durgapur 713 212 Phone/Fax: +91 343 253 3813-15

/*    var isAndroid = /(android)/i.test(navigator.userAgent);
    console.log("android Testing: "+isAndroid);
      if(!isAndroid)
      {
        location.assign("https://www.gilabs.co.in/");
      }
*/
    var recognition;
    function startRecognition() {   
      recognition = new (window.SpeechRecognition || window.webkitSpeechRecognition || window.mozSpeechRecognition ||
      window.msSpeechRecognition)();
      recognition.onstart = function(event) {
        updateRec();
      };
      recognition.onresult = function(event) {
        var text = "";
          for (var i = event.resultIndex; i < event.results.length; ++i) {
            text += event.results[i][0].transcript;
          }
          setInput(text);
        stopRecognition();
      };
      recognition.onend = function() {
        stopRecognition();
      };
      recognition.lang = "en-US";
      recognition.start();
    }
  
    function stopRecognition() {
      if (recognition) {
        recognition.stop();
        console.log("++RecognitionStopped");  
        recognition = null;
      }
      updateRec();
    }
    function switchRecognition() {
      if (recognition) {
        stopRecognition();
      } else {
        startRecognition();
      }
    }
    function setInput(text) {
      $("#input").val(text);
      send();
    }
    function updateRec() {
      $("#rec").text(recognition ? "Stop" : "Speak");
    }
    function send() {
     console.log("++insideSend()_Function"); 
           
            var text = $("#input").val();
            console.log("++ValueofText==>"+text); 
            $('.response').append('<span class="user">' + '<b>YOU:</b> '+ text + '</span>\r\n');   

            //conversation.push("Me: " + text + '\r\n');
      $.ajax({
           
        type: "POST",
           
        url: baseUrl + "query?v=20150910",
      //  console.log("++lineAfter_baseUrl");  
        contentType: "application/json; charset=utf-8",
        dataType: "json",
     //   console.log("++lineBefore_headers");  
        headers: {
      //    console.log("++lineBefore_Authorization"); 
          "Authorization": "Bearer " + accessToken
     //     console.log("++Authorization_Done"); 
        },
        data: JSON.stringify({ query: text, lang: "en", sessionId: "somerandomthing" }),
        success: function(data) 
                {
                  console.log("++Success");   
                  var respText = data.result.fulfillment.speech;
                  console.log("Respuesta: " + respText);
                  setResponse(respText);
                  responsiveVoice.speak(respText,"Hindi Female");
                  $("#response").scrollTop($("#response").height());
        },
        error: function() {
          console.log("++Error");  
          setResponse("Internal Server Error");
        }
      });
      //setResponse("Thinking...");
    }
    function setResponse(val) {
            $('.response').append('<span class="bot">' + '<b>BOT:</b> '+ val + '</span>\r\n');
            //conversation.push("AI: " + val + '\r\n<br><br>');
     // $("#response").text(conversation.join(""));
    }

    function setButton(val) {
      $('.response').append('<button class="quickButton" onclick= "setButtonVal(this.innerHTML)">' + val + '</button>\r\n');
            
    }

    function setButtonVal(i) {
      $("#input").val(i);
      send();
     // $("#input").innerHTML = "";
    }
   // var conversation = [];
    
