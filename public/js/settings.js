$(document).ready(function(){
    $("#submit").click(function(){
        processForm();
    });
});

$(document).ready(function(){
    $("#newcont").click(function(){
            processFormCont();
        });
});

$(document).ready(function(){
    $("#addr").click(function(){
            processFormAddr(); 
        });
});

$(document).ready(function(){
    $("#btn").click(function(){
           processFormNumber();
        });
});

$(document).ready(function(){
   $("#lookfor").keyup(function(){
      var que = $(this).val();
      if(que != '')
      {
         $.ajax({
            url: '../../api/search',
            type: 'post',
            contentType: 'application/x-www-form-urlencoded,charset=UTF-8',
            dataType: 'text', 
            data: {query: que},
            success: function(data)
            {
               $("#find").fadeIn();
               $("#find").html(data);
            }
         });
      }
   });
});

$(document).ready(function(){
   $("#search").click(function(){
      if($("#lookfor").val() != '')
      {
         $.ajax({
            url: '../../api/searching',
            type: 'post',
            contentType: 'application/x-www-form-urlencoded,charset=UTF-8',
            dataType: 'text', 
            data: {query: $("#lookfor").val()},
            success: function(data)
            {
               alert('data');
            }
         });
      }
   });
});

$(document).ready(function(){
  $("#find").mouseleave(function(){
    $("#find").fadeOut();
  });
});

$(document).ready(function(){
  if($("#lookfor").focus() == false || $("#lookfor").val() == ""){
    $("#find").fadeOut();
  }
});

$(document).on('click', 'li', function(){
   $("#lookfor").val($(this).text());
   $("#find").fadeOut();
});

function processForm(){
    $.ajax({
        url: 'api/newuseradd',
        type: 'post',
        contentType: 'application/x-www-form-urlencoded,charset=UTF-8',
        dataType: 'text', 
        data: {
                name: $("#name").val(),
                lastName: $("#lastName").val(),
                postalCode: $("#postalCode").val(),
                city: $("#city").val(),
                state: $("#state").val(),
                country: $("#country").val(),
                email: $("#email").val(),
                password: $("#password").val()
              },
        success: function(status){
            if(status == "User was registered!"){
                document.getElementById('status').style.display = "block";
                document.getElementById('status').innerHTML = status;
            }
            else
            {
                document.getElementById('status2').style.display = "block";
                document.getElementById('status2').innerHTML = status;
            }
        },
        error: function(status, err, des){
                document.getElementById('status2').style.display = "block";
                document.getElementById('status2').innerHTML =  err +": "+ des;       
        }
    });
}

function processFormCont(){
    $.ajax({
        url: 'api/newcontactadd',
        type: 'post',
        contentType: 'application/x-www-form-urlencoded,charset=UTF-8',
        dataType: 'text', 
        data: {
                userId: $("#userId").val(),
                name: $("#name").val(),
                middleName: $("#middleName").val(),
                lastName: $("#lastName").val(),
                webPage: $("#webPage").val(),
                jobTitle: $("#jobTitle").val(),
                gender: $("#gender").val(),
                birthday: $("#birthday").val(),
                email: $("#email").val(),
                phone: $("#phone").val(),
                postalCode: $("#postalCode").val(),
                city: $("#city").val(),
                state: $("#state").val(),
                country: $("#country").val(),
                street: $("#street").val(),
                streetNumber: $("#streetNumber").val()
              },
        success: function(status){
            if(status == "Contact was saved!"){
                document.getElementById('status').style.display = "block";
                document.getElementById('status').innerHTML = status;
            }
            else
            {
                document.getElementById('status2').style.display = "block";
                document.getElementById('status2').innerHTML = status;
            }
        },
        error: function(status, err, des){
                document.getElementById('status2').style.display = "block";
                document.getElementById('status2').innerHTML =  err +": "+ des;       
        }
    });
}

function processFormAddr(){ 
    $.ajax({
        url: '../../../api/newaddressadd',
        type: 'post',
        contentType: 'application/x-www-form-urlencoded,charset=UTF-8',
        dataType: 'text', 
        data: {
                contId: $("#contId").val(),
                postalCode: $("#postalCode").val(),
                city: $("#city").val(),
                street: $("#street").val(),
                streetNumber: $("#streetNumber").val(),
                state: $("#state").val(),
                country: $("#country").val()
              },
        success: function(status){
            if(status == "The new address was registered!"){
                document.getElementById('status').style.display = "block";
                document.getElementById('status').innerHTML = status;
            }
            else
            {
                document.getElementById('status2').style.display = "block";
                document.getElementById('status2').innerHTML = status;
            }
        },
        error: function(status, err, des){
                document.getElementById('status2').style.display = "block";
                document.getElementById('status2').innerHTML =  err +": "+ des;       
        }
    });
}

function processFormNumber(){
   // alert($("#contId").val()+" "+$("#phoneNumber").val());
    $.ajax({
        url: '../../../api/newphoneadd',
        type: 'post',
        contentType: 'application/x-www-form-urlencoded,charset=UTF-8',
        dataType: 'text', 
        data: {
                contId: $("#contId").val(),
                phoneNumber: $("#phoneNumber").val()
              },
        success: function(status){
            if(status == "The new phone number was registered!"){
                document.getElementById('status').style.display = "block";
                document.getElementById('status').innerHTML = status;
            }
            else
            {
                document.getElementById('status2').style.display = "block";
                document.getElementById('status2').innerHTML = status;
            }
        },
        error: function(status, err, des){
                document.getElementById('status2').style.display = "block";
                document.getElementById('status2').innerHTML =  err +": "+ des;       
        }
    });
}

// clean the form fields
function cleanform() {
   document.getElementById('city').value=("");
   document.getElementById('state').value=("");
}

function my_callback(content) {
   if (!("erro" in content)) {
       // update de fields 
       document.getElementById('city').value=(content.localidade);
       document.getElementById('state').value=(content.uf);
       document.getElementById('street').value=(content.logradouro);
   } else {
       // in case postalcode is not find
       cleanform();
   }  
}
    
function getpcode(codevalue) {
   // variable postacode after get fixed
   var pcode = codevalue.replace(/\D/g, '');
   // test if it's empty
   if (pcode != "") {
      // regular expression to validate the code
      var testpcode = /^[0-9]{8}$/;

      // test the code format
      if(testpcode.test(pcode)) {
        // fill the fields when it's looking for information
         document.getElementById('city').value="...";
         document.getElementById('state').value="...";
         document.getElementById('street').value="...";
         // create tha javascript element
         var script = document.createElement('script');
         //callback cync.
         script.src = 'https://viacep.com.br/ws/'+ pcode + '/json/?callback=my_callback';
         // insert information in the document
         document.body.appendChild(script);
         document.getElementById('country').value="Brazil";
      } else {
        // if postalcode is invalid
        cleanform();
      }
      
   } else {
       // if value is null
      cleanform();
   }
}