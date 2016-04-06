// JavaScript Document
function continueToApplication(){
   
   
  function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
  };
 
  $("#get_started input,select").removeClass('error');
  $("#get_started input,select").each(function() {
       if (this.value=="") {
           $(this).addClass('error');
       }
   });
   
 var phone = $('#get_started #phone_number');
 checkphone = phone.val().match(new RegExp('.{1,4}$|.{1,3}', 'g')).join("-");
     if(!checkphone)
    {
        $("#phone_number").addClass('error');
    }  
  
 var mailid = $('#get_started #email_id').val();  
    if( !isValidEmailAddress( mailid ) ) {  $("#email_id").addClass('error'); }
var numItems = $('#get_started .error').length;
 
if(numItems<1){
  
  var loantypeid1 = 1;
  var loantypeid2 = 7;
  var loantypeid3 = 10; 
  var fname = $('#get_started #first_name').val();
  var lname = $('#get_started #last_name').val();
  var mailid = $('#get_started #email_id').val();
  var phone = $('#get_started #phone_number').val();
  var state = $('#get_started #state').val();
  
   var storeid = '';
if (state == 'WI'){ storeid = 7; }else if (state == 'SC'){storeid = 8; }else if (state == 'MO'){ storeid = 6;}else if (state == 'IL'){storeid = 3;}else if (state == 'AK'){storeid = 3;}else if (state == 'AL'){storeid = 24;}else if (state == 'AR'){storeid = 3;}else if (state == 'AZ'){storeid = 3;}else if (state == 'CA'){storeid = 13;}else if (state == 'CO'){storeid = 3;}else if (state == 'CT'){storeid = 3;}else if (state == 'DC'){storeid = 3;}else if (state == 'DE'){storeid = 17;}else if (state == 'FL'){storeid = 3;}else if (state == 'FM'){storeid = 3;}else if (state == 'GA'){storeid = 26;}else if (state == 'GU'){storeid = 3;}else if (state == 'HI'){storeid = 3;}else if (state == 'IA'){storeid = 3;}else if (state == 'ID'){storeid = 22;}else if (state == 'IN'){storeid = 3;}else if (state == 'KS'){storeid = 21;}else if (state == 'KY'){storeid = 3;}else if (state == 'LA'){storeid = 3;}else if (state == 'MA'){storeid = 3;}else if (state == 'MD'){storeid = 28;}else if (state == 'ME'){storeid = 3;}else if (state == 'MH'){storeid = 3;}else if (state == 'MI'){storeid = 3;}else if (state == 'MN'){storeid = 3;}else if (state == 'MP'){storeid = 3;}else if (state == 'MS'){storeid = 3;}else if (state == 'NC'){storeid = 3;}else if (state == 'ND'){storeid = 3;}else if (state == 'NE'){storeid = 3;}else if (state == 'NH'){storeid = 3;}else if (state == 'NJ'){storeid = 3;}else if (state == 'NM'){storeid = 16;}else if (state == 'NV'){storeid = 3;}else if (state == 'OH'){storeid = 30;}else if (state == 'OK'){storeid = 3;}else if (state == 'OR'){storeid = 3;}else if (state == 'PA'){storeid = 3;}else if (state == 'PR'){storeid = 3;}else if (state == 'PW'){storeid = 3;}else if (state == 'RI'){storeid = 3;}else if (state == 'SD'){storeid = 3;}else if (state == 'TN'){storeid = 25;}else if (state == 'TX'){storeid = 29;}else if (state == 'UT'){storeid = 14;}else if (state == 'VA'){storeid = 20;}else if (state == 'VI'){storeid = 3;}else if (state == 'WA'){storeid = 3;}else if (state == 'WI'){storeid = 7;}else if (state == 'WV'){storeid = 3;}else if (state == 'WY'){storeid = 3;}
if(state == 'KS')
{
var address='https://www.opploans-app.com/MemberPage.aspx?subpage=applyForLoan&firstname=' + fname + '&lastname=' + lname + '&email=' + mailid + '&state=' + state + '&homephone=' + phone + '&storeid=' + storeid + '&loanTypeId=' + loantypeid2;
window.open(address, '_self');
}
else if(state == 'MD')
{
var address='https://www.opploans-app.com/MemberPage.aspx?subpage=applyForLoan&firstname=' + fname + '&lastname=' + lname + '&email=' + mailid + '&state=' + state + '&homephone=' + phone + '&storeid=' + storeid + '&loanTypeId=' + loantypeid2;
window.open(address, '_self');
}
else if(state == 'TN')
{
var address='https://www.opploans-app.com/MemberPage.aspx?subpage=applyForLoan&firstname=' + fname + '&lastname=' + lname + '&email=' + mailid + '&state=' + state + '&homephone=' + phone + '&storeid=' + storeid + '&loanTypeId=' + loantypeid2;
window.open(address, '_self');
}
else if(state == 'VA')
{
var address='https://www.opploans-app.com/MemberPage.aspx?subpage=applyForLoan&firstname=' + fname + '&lastname=' + lname + '&email=' + mailid + '&state=' + state + '&homephone=' + phone + '&storeid=' + storeid + '&loanTypeId=' + loantypeid2;
window.open(address, '_self');
}
else if(state == 'WI')
{
var address='https://www.opploans-app.com/MemberPage.aspx?subpage=applyForLoan&firstname=' + fname + '&lastname=' + lname + '&email=' + mailid + '&state=' + state + '&homephone=' + phone + '&storeid=' + storeid + '&loanTypeId=' + loantypeid3;
window.open(address, '_self');
}
else
{
 var address='https://www.opploans-app.com/MemberPage.aspx?subpage=applyForLoan&firstname=' + fname + '&lastname=' + lname + '&email=' + mailid + '&state=' + state + '&homephone=' + phone + '&storeid=' + storeid + '&loanTypeId=' + loantypeid1;
window.open(address, '_self');
}
 
}
 
} 