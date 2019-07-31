$(document).ready(function(){
   $('#submit').on("click", function(){
       var user = $('#user').val();
       var message = $('#message').val();
       //var time = getTime();
       var dataString = 'user=' + user + '&message=' + message ;
       
       //Validation
       if(user == '' || message == '')
       {
           alert("Please fill in your name and a message");
       }
       else
       {
           $.ajax({
              type: "POST",
              url: "../shoutit/process.php",
              data: dataString,
              cache: false,
              success: function(html){
                  $('#shouts ul').prepend(html);
              }
           });
       }
       
       return false;
       
   });
   
    
});

//Not required. Date is formatted from php code code base in porocess.php file.
/*function getTime(){
    var d = new Date();
    d.toLocaleTimeString();
    console.log(d);
    return d;
}*/