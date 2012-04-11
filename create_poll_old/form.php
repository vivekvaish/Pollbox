<?php 
//Set permission level threshold for this page remove if page is good for all levels
$permission_level=1;

include"/../auth_check_header.php";

?>	

<html>
<head>
<title> Create POll</title>


<link href="form.css" rel="stylesheet" type="text/css" />
<link href="bootstrap.css" rel="stylesheet" type="text/css" />
<link href="bootstrap-responsive.css" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<!-- date function-->

<!--
****************************************************************************************

	Copy paste these 2 lines of code to every page you want the calendar to be available at
-->
<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
<!-- 
	OR if you want to use the calendar in a right-to-left website
	just use the other CSS file instead and don't forget to switch g_jsDatePickDirectionality variable to "rtl"!
	
	<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.css" />
-->
<script type="text/javascript" src="jsDatePick.min.1.3.js"></script>
<!-- 
	After you copied those 2 lines of code , make sure you take also the files into the same folder :-)
    Next step will be to set the appropriate statement to "start-up" the calendar on the needed HTML element.
    
    The first example of Javascript snippet is for the most basic use , as a popup calendar
    for a text field input.
-->
<script type="text/javascript">
	window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"poll_expiry_date",
			dateFormat:"%d-%M-%Y"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
	};
</script>


 <link rel="stylesheet" href="style.css" type="text/css" media="screen" />


<link rel="stylesheet" type="text/css" href="Avada.css" />

</head>

<body>
    <?php
if($username)
{
	echo "Welcome ".$username;
}
else
{
	echo "Welcome ". $user_profile['name'];
}
//echo "Welcome ".$id;
?>
 <p><a href="logout.php">Log out </a><a href="/./logout.php"></a></p>
        <div class=navbar2>	
        <form method="post" name="poll_form" >
        <table>
		<tr>
          <td><span id='hum'></span></td>
         </tr>
		 <tr><td><br /></td></tr>
         <tr>
          <td><b>Poll Title*:</b></td><td><input type="text" name="title" onBlur="validate_title()" id="poll_title" size="25"></td>
         </tr>
		 <tr><td><br /></td></tr>
         <tr>
            <td><b>Poll Description*:</b></td> <td> <textarea rows="3" name="description" onBlur="validate_des()" cols="40" id="poll_des"></textarea><input type="hidden" id="poll_des_type" name="des_content_type" value="text"></td>
         </tr>
         <tr><td><br /></td></tr>
		 
		 <tr>
            <td><b>Expiry Date:</b></td><td><input name="poll_expiry_date" type="text" id="poll_expiry_date" size="12" readonly="readonly" /> </td>
         </tr>
         <tr><td><br /></td></tr>
		 <tr>
            <td><b>Tags:</b></td><td> <textarea rows="2" name="tags" cols="30" id="poll_tags"></textarea></td>
         </tr>
         <tr><td><br /></td></tr>
		 <tr>
		 <td><b>Visibility :</b></td><td><select name="visibility" id="poll_visibility">
								<option value="public">Public</option>
								<option value="custom">Custom</option></select></td>
		 </tr>
		 <tr><td><br /></td></tr>
        <tr><td><b>Vote Type*:</b></td><td><input type="radio" name="poll_method" value="like-dislike">Like/Dislike</td></tr>
        <tr><td></td><td><input type="radio" name="poll_method" value="stars">Stars</td></tr>
		<tr><td></td><td><input type="radio" name="poll_method" value="list">List</td></tr>
        <tr><td><br /></td></tr> 
		        <!--<tr><td><b> Category:</b></td><td><select name="category" id="poll_category">
                        <option value="cloths">Cloths</option>
                        <option value="gadgets">Gadgets</option>
                        <option value="code snippets">Code Snippets</option>
                        <option value="Books">Books</option>
                        <option value="accesories">Accesories</option>
                        <option value="Others">Others</option>
                        </select></td></tr> 
          <tr><td><br /></td></tr>-->
		  <tr><td><b> Comments Enabled : </b></td> <td> <select name="comments_enabled" id="comments_enabled"> 
                        <option value="false">False</option>
						<option value="true">True</option>
                                                </select></td></tr> 
		  <tr><td><br /></td></tr>
          <tr><td><b> Upload Options: </b><input type="hidden" name="options_type" id="options_type" value="text"><input type="hidden" name="total_op" id="total_option" value="2"></td><td></td></tr>
              
          <tr><td></td><td><div id="option_text_block" class="unhide_block"><h2>Text Option:</h2><span>Option 1: <input type="text" name="o1" id="option1"><br>Option 2: <input type="text" name="o2" id="option2"><br/></span><a href="#" onClick="add_text_option()">Add Another Option</a><br/><br/><a href="#" onClick="unhideBlock('option_image_block')">Or Add Image</a></div>
          </td></tr>
                  
          <tr><td></td><td><div id="option_image_block" class="hide_block"><h2>Image Option:</h2><span></span><a href="#" onClick="add_image_option()">Add Another ImageURL</a><br/><br/><a href="#" onClick="unhideBlock('option_text_block')">Or Add Text</a></div>
          </td></tr>
          <tr><td><br /></td></tr>
                <tr><td>
               <input type="checkbox" name="chk">I agree to the <a href="terms.html">terms and conditions</a>
              </td></tr>
              <tr><td><br /></td></tr>
              <tr><td>
              <input type="submit" onClick="send_data()" name="CreatePoll" value="Publish Poll">
              </td></tr>  
    </table>  
    
    </form>
	    <p><a href="../activity_page.php">Activity page</a></p>
<p><a href="../my_poll.php">My poll</a></p>
    </div>	
    <hr>
    
        
    </div>    

<!--<br>Option 3: <input type="text" name="o3"><br/>Option 4: <input type="text" name="o4">-->


</body>

    <script type="text/javascript">
	var x;
	var i,poll_radio;
	
	function validate_title()
	{
	    if ( document.getElementById('poll_title').value == "" )
    {
     //alert ( "Please fill in the 'Poll Title' box." );
	 return 0;
	}	 
	else return 1;
    }
	
	function validate_des()
	{
	    if ( document.getElementById('poll_des').value == "" )
    {
    // alert ( "Please fill in the 'Poll Description' box." );
     return 0;
	}	 
	 else return 1;
    }
	
	function validate_type()
	{
		var i,poll_radio;
		var radio = document.poll_form;
		if(radio.poll_method[0].checked == true)
		{
			poll_radio = radio.poll_method[0].value;
		    return 1;
		}
		else if (radio.poll_method[1].checked == true)
		{
			poll_radio = radio.poll_method[1].value;
		    return 1;
		}
		else if (radio.poll_method[2].checked == true)
		{
		poll_radio = radio.poll_method[2].value;
		return 1;
		}
		else
		{
		//alert(" Please choose either of three options from Vote Type.");
		return 0;
		}
	}	
	
	/*function validate_tags()
	{
	    if ( document.getElementById('poll_tags').value == "" )
			{
			 alert ( "Please fill in the 'Poll Tags' box." );
			}	 
		else
		{
			var val = document.getElementById('poll_tags').value;
			var val_arr = val.split(',');
			var new_val = "\"";
			for (i = 0 ; i < val_arr.length ; i++)
			{
				new_val = new_val+val_arr[i]+"\""+","+"\"";
			}
			new_val = new_val.substring(0,new_val.length-2);
			document.getElementById('poll_tags').value = new_val;
		}
    }*/
	
	var today = new Date();
	today.setHours(0,0,0,0);

	function validate()
	{

		var splitDate = document.getElementById('poll_expiry_date').value.split("-");
		var refDate = new Date(splitDate[2]+" "+splitDate[1]+" "+splitDate[0]);
		if (refDate <= today)
			{
			 alert('Must input a future date')
			 document.getElementById('poll_expiry_date').value = ""; 
			 //nForm['poll_expiry_date'].focus();
			 return 0;
			}	
		return 1;
	}
	
	
	function send_data()
	{   
		if (validate() && validate_title() && validate_des() && validate_type()== 1)
	{
		
		var i,poll_radio;
		var radio = document.poll_form;
		if(radio.poll_method[0].checked == true)
		{
			poll_radio = radio.poll_method[0].value;
		}
		else if (radio.poll_method[1].checked == true)
		{
			poll_radio = radio.poll_method[1].value;
		}
		else if (radio.poll_method[2].checked == true)
		{
		poll_radio = radio.poll_method[2].value;
		}
	
		//options
		var total_option = parseInt(document.getElementById("total_option").value);
		var temp;

		var val = document.getElementById('poll_tags').value;
		var val_arr = val.split(' ');
		
		
		var obj = {who : "<?php $username ?>", expiry_date : document.getElementById('poll_expiry_date').value,visibility : document.getElementById('poll_visibility').value,
					poll: {title : document.getElementById('poll_title').value, des_content_type : document.getElementById('poll_des_type').value, description : document.getElementById('poll_des').value,
						tags : val_arr, comments_enabled : document.getElementById('comments_enabled').value, poll_method : poll_radio, options_type : document.getElementById("options_type").value, 
							options_list : []}};
			
		var op_obj;
		for (i = 1; i<= total_option ; i++)
		{
			//temp = 'opt'+1;
			op_obj = {};
			op_obj.content = document.getElementById('option'+i).value;
			console.log(op_obj.content);
			op_obj.choosers = "";
			obj.poll.options_list[i-1]=op_obj;
		}		
		
		
		
//		$(document).ready(function{
	  //  $.post("http://10.100.70.53:3000/api/poll", "");
//	});
		$.post("http://10.100.70.53:3000/api/poll", obj),
		function() {
		alert ("done");}
		var currentTime = new Date();
		//$.post("test.php", Object.toJSON(obj) );
		alert("Post done successfully on " + currentTime);
		}
		else
		{
		alert (" The form is not completed !! ")
		}
	}
	
	function unhideBlock(elem)
	{
		if(elem == 'option_image_block')
		{
			//unhiding image block
			x = document.getElementById(elem);
			x.className='unhide_block';
			//adding image option
			document.getElementById("total_option").value = '0';
			add_image_option();
			add_image_option();
			//changing option type
			document.getElementById("options_type").value = 'image';
			
			//hiding text block
			document.getElementById('option_text_block').className='hide_block';
			//removing text option
			x = document.getElementById("option_text_block");
			var options_t = x.childNodes[1];
			var num_t = options_t.childNodes.length;
			for (i=0; i < num_t ; i++)
			{
				options_t.removeChild(options_t.childNodes[0]);
			}
		}
		else //elem == option_text_block
		{
			//unhiding text block
			x = document.getElementById(elem);
			x.className='unhide_block';
			//adding text option
				document.getElementById("total_option").value = '0';
				add_text_option();
				add_text_option();
			//changing option type
			document.getElementById("options_type").value = 'text';
			
			
			
			//hiding image block
			document.getElementById('option_image_block').className='hide_block';
			//removing image option
			x = document.getElementById("option_image_block");
			var options_t = x.childNodes[1];
			var num_t = options_t.childNodes.length;
			for (i=0; i < num_t ; i++)
			{
				options_t.removeChild(options_t.childNodes[0]);
			}
		}
		//alert(x.className); // this is to stop execution of the function
	}
	function add_text_option()
	{
		x = document.getElementById("option_text_block");
		var options = x.childNodes[1];

//		alert(x.childNodes.length+" , 0"+ x.childNodes[0]+" , 1"+ x.childNodes[1]+" , 2"+ x.childNodes[2]+" , "+num);
		
		var num = options.childNodes.length / 3 + 1;
		options.appendChild(document.createTextNode('Option '+num+': '));
		var newInput = document.createElement('input');
		newInput.type = 'text';
		newInput.name='o'+num;
		newInput.id = 'option'+num;
		options.appendChild(newInput);
		options.appendChild(document.createElement('br'));
		
		document.getElementById("total_option").value = num;
		
	}
	
	function add_image_option()
	{
		x = document.getElementById("option_image_block");
		var options = x.childNodes[1];

//		alert(x.childNodes.length+" , 0"+ x.childNodes[0]+" , 1"+ x.childNodes[1]+" , 2"+ x.childNodes[2]+" , "+num);
		
		var num = options.childNodes.length / 3 + 1;
		options.appendChild(document.createTextNode('ImageURL '+num+': '));
		var newInput = document.createElement('input');
		newInput.type = 'text';
		newInput.name='I'+num;
		newInput.id = 'option'+num;
		options.appendChild(newInput);
		options.appendChild(document.createElement('br'));
		document.getElementById("total_option").value = num;
	}

</script>
</html>