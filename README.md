# forms
class to generate forms

A forms engine designed to allow for a lot of flexibility. 

# Install
To Install with composer

Add this to your composer.json

    "repositories": [
        {
          "type": "package",
          "package": {
            "name": "amdewstow/forms",
            "version": "1.0.0",
            "type": "git",
            "source": {
              "url": "https://github.com/amdewstow/forms.git",
              "type": "git",
              "reference": "main"
            }
          }
        }
    ]

Then

composer require amdewstow/forms


basic usage see demos/

<table border='1px'>
<tr>
<td>PHP Code<br>$f = new forms();</td>
<td>Description</td>
<td>Result</td>
<td>HTML Source</td></tr>
<tr><td colspan='4'><hr><h3>Inputs</h3></td></tr>
<tr>
<td>$f->input( 'first_name' );</td>
<td>Text</td>
<td><input type="text" id="first_name" name="first_name" ></td>
<td><textarea cols='60'><input type="text" id="first_name" name="first_name" ></textarea></td></tr>
<tr>
<td>$f->input_label( 'First Name:','first_name' );</td>
<td>Text with a label</td>
<td>
<label>First Name:<input type="text" id="first_name" name="first_name" ></label></td>
<td><textarea cols='60'>
<label>First Name:<input type="text" id="first_name" name="first_name" ></label></textarea></td></tr>
<tr>
<td>$f->input_number( 'age' );</td>
<td>Number</td>
<td><input type="number" id="age" name="age" ></td>
<td><textarea cols='60'><input type="number" id="age" name="age" ></textarea></td></tr>
<tr>
<td>$f->input_password( 'password_a',null,null,'Enter New Password' );</td>
<td>Password with placeholder set</td>
<td><input type="password" id="password_a" name="password_a" placeholder="Enter New Password" ></td>
<td><textarea cols='60'><input type="password" id="password_a" name="password_a" placeholder="Enter New Password" ></textarea></td></tr>
<tr>
<td>$f->input_hidden( 'setting_a','rabdargab' );</td>
<td>Hidden</td>
<td><input type="hidden" id="setting_a" name="setting_a" value="rabdargab" ></td>
<td><textarea cols='60'><input type="hidden" id="setting_a" name="setting_a" value="rabdargab" ></textarea></td></tr>
<tr>
<td>
        $f->input_radio_label_right('A', 'rad_a','A','radio_inputsl',null,null,true );<br>
        $f->input_radio_label_right('B' 'rad_b','B','radio_inputsl' );
        </td>
<td>Radio Inputs</td>
<td>
<label><input type="radio" id="rad_a" name="radio_inputsl" value="A" checked="checked" >A</label>
<br>
<label><input type="radio" id="rad_b" name="radio_inputsl" value="B" >B</label></td>
<td><textarea rows='6' cols='60'>
<label><input type="radio" id="rad_a" name="radio_inputsl" value="A" checked="checked" >A</label>
<br>
<label><input type="radio" id="rad_b" name="radio_inputsl" value="B" >B</label></textarea></td></tr>
<tr>
<td>
        $f->input_checkbox_label_right('Aa', 'check_a','A' );<br>
        $f->input_checkbox_label_right('Bb' 'check_b','B' );
        </td>
<td>Checkbox Inputs</td>
<td>
<label><input type="checkbox" id="check_a" name="check_a" value="A" >Aa</label>
<br>
<label><input type="checkbox" id="check_b" name="check_b" value="B" >Bb</label></td>
<td><textarea rows='6' cols='60'>
<label><input type="checkbox" id="check_a" name="check_a" value="A" >Aa</label>
<br>
<label><input type="checkbox" id="check_b" name="check_b" value="B" >Bb</label></textarea></td></tr>
<tr>
<td>$f->input_file( 'cv' );</td>
<td>File</td>
<td><input type="file" id="cv" name="cv" ></td>
<td><textarea cols='60'><input type="file" id="cv" name="cv" ></textarea></td></tr>
<tr>
<td>$f->input( 'first_name','Bob' );</td>
<td>Text with value set</td>
<td><input type="text" id="first_name" name="first_name" value="Bob" ></td>
<td><textarea cols='60'><input type="text" id="first_name" name="first_name" value="Bob" ></textarea></td></tr>
<tr>
<td>$f->input( 'first_name','Bob',null );</td>
<td>Text with value set, null name</td>
<td><input type="text" id="first_name" name="first_name" value="Bob" ></td>
<td><textarea cols='60'><input type="text" id="first_name" name="first_name" value="Bob" ></textarea></td></tr>
<tr>
<td>$f->input( 'first_name','Bob','FIRST_NAME' );</td>
<td>Text with value set, name set</td>
<td><input type="text" id="first_name" name="FIRST_NAME" value="Bob" ></td>
<td><textarea cols='60'><input type="text" id="first_name" name="FIRST_NAME" value="Bob" ></textarea></td></tr>
<tr>
<td>$f->input( 'first_name',null,'FIRST_NAME' ,'Bob');</td>
<td>Text with name set, placeholder set</td>
<td><input type="text" id="first_name" name="FIRST_NAME" placeholder="Bob" ></td>
<td><textarea cols='60'><input type="text" id="first_name" name="FIRST_NAME" placeholder="Bob" ></textarea></td></tr>
<tr>
<td>$f->input( 'first_name',null,'FIRST_NAME' ,'Bob','clicked_name()');</td>
<td>Text with name set, placeholder set, on click set</td>
<td><input type="text" id="first_name" name="FIRST_NAME" placeholder="Bob" onclick="clicked_name()" ></td>
<td><textarea cols='60'><input type="text" id="first_name" name="FIRST_NAME" placeholder="Bob" onclick="clicked_name()" ></textarea></td></tr>
<tr>
<td>$f->input( 'first_name',null,'FIRST_NAME' ,'Bob','clicked_name()','changed_name()');</td>
<td>Text with name set, placeholder set, on click set, on change set</td>
<td><input type="text" id="first_name" name="FIRST_NAME" placeholder="Bob" onclick="clicked_name()" onchange="changed_name()" ></td>
<td><textarea rows='4'  cols='60'><input type="text" id="first_name" name="FIRST_NAME" placeholder="Bob" onclick="clicked_name()" onchange="changed_name()" ></textarea></td></tr>
<tr>
<td>$extras =  array (
        <br>&nbsp; 'data-id' => 99,
        <br>&nbsp; 'class' => 'name_inputs'
        <br>);
        <br>$f->input(  'first_name','BOB',null,null,null,null,$extras);</td>
<td>Text with name set, value set, extras set</td>
<td><input type="text" id="first_name" name="first_name" value="BOB" data-id="99" class="name_inputs" ></td>
<td><textarea cols='60'><input type="text" id="first_name" name="first_name" value="BOB" data-id="99" class="name_inputs" ></textarea></td></tr>
<tr>
<td>$extras = array (
        <br>&nbsp; 'data-id' => 62,
        <br>&nbsp; 'class' => 'name_inputs',
        <br>&nbsp; 'foo' => 'bar'
        <br>);
        <br>$f->input('first_name',null,null,null,null,null,$extras);</td>
<td>Text with name set, extras set</td>
<td><input type="text" id="first_name" name="first_name" data-id="62" class="name_inputs" foo="bar" ></td>
<td><textarea cols='60'><input type="text" id="first_name" name="first_name" data-id="62" class="name_inputs" foo="bar" ></textarea></td></tr>
<tr><td colspan='4'><h3>Selects</h3></td></tr>
<tr>
<td>$options = array (
        <br>&nbsp; -1 => 'Question',
        <br>&nbsp; 1 => 'Yes',
        <br>&nbsp; 0 => 'No',
        <br>&nbsp; 'x' => 'Maybe?'
        <br>);
        <br>$f->select('askq',$options);</td>
<td>Select</td>
<td><select id="askq" name="askq" > 
<option value="-1" selected >Question</option>
<option value="1" >Yes</option>
<option value="0" >No</option>
<option value="x" >Maybe?</option> 
</select></td>
<td><textarea cols='60' rows='7'><select id="askq" name="askq" > 
<option value="-1" selected >Question</option>
<option value="1" >Yes</option>
<option value="0" >No</option>
<option value="x" >Maybe?</option> 
</select></textarea></td></tr>
<tr>
<td>$options = array (
        <br>&nbsp; -1 => 'Question',
        <br>&nbsp; 1 => 'Yes',
        <br>&nbsp; 0 => 'No',
        <br>&nbsp; 'x' => 'Maybe?'
        <br>);
        <br>$f->select(  'askqs',$options,null,1);</td>
<td>Select with option selected</td>
<td><select id="askqs" name="askqs" > 
<option value="-1" >Question</option>
<option value="1" selected >Yes</option>
<option value="0" >No</option>
<option value="x" >Maybe?</option> 
</select></td>
<td><textarea cols='60' rows='7'><select id="askqs" name="askqs" > 
<option value="-1" >Question</option>
<option value="1" selected >Yes</option>
<option value="0" >No</option>
<option value="x" >Maybe?</option> 
</select></textarea></td></tr>
<tr>
<td>$nested_options = array (
        <br>&nbsp; 'Group A' => array ( 
        <br>&nbsp; &nbsp; 'A1' => 'One',
        <br>&nbsp; &nbsp; 'A2' => 'Two' 
        <br>&nbsp; ),
        <br>&nbsp; 'Group B' => array (
        <br>&nbsp; &nbsp; 'B1' => '1',
        <br>&nbsp; &nbsp; 'B2' => '2'
        <br>&nbsp; )
        <br>);
        <br><br>$f->select(  'askqc',$options,null,1);</td>
<td>Select with option groups</td>
<td><select id="askqc" name="askqc" > 
<optgroup label="Group A">
<option value="A1" >One</option>
<option value="A2" >Two</option>
</optgroup>
<optgroup label="Group B">
<option value="B1" >1</option>
<option value="B2" >2</option>
</optgroup> 
</select></td>
<td><textarea cols='60' rows='7'><select id="askqc" name="askqc" > 
<optgroup label="Group A">
<option value="A1" >One</option>
<option value="A2" >Two</option>
</optgroup>
<optgroup label="Group B">
<option value="B1" >1</option>
<option value="B2" >2</option>
</optgroup> 
</select></textarea></td></tr>
<tr>
<td><br>$f->time_select(null,null,null,null,'time_a' );</td>
<td>Select for time of day</td>
<td><select id="time_a" name="time_a" > 
<option value="-1" selected >Select a time</option>
<option value="07:00 AM" >07:00 AM</option>
<option value="07:30 AM" >07:30 AM</option>
<option value="08:00 AM" >08:00 AM</option>
<option value="08:30 AM" >08:30 AM</option>
<option value="09:00 AM" >09:00 AM</option>
<option value="09:30 AM" >09:30 AM</option>
<option value="10:00 AM" >10:00 AM</option>
<option value="10:30 AM" >10:30 AM</option>
<option value="11:00 AM" >11:00 AM</option>
<option value="11:30 AM" >11:30 AM</option>
<option value="12:00 PM" >12:00 PM</option>
<option value="12:30 PM" >12:30 PM</option>
<option value="01:00 PM" >01:00 PM</option>
<option value="01:30 PM" >01:30 PM</option>
<option value="02:00 PM" >02:00 PM</option>
<option value="02:30 PM" >02:30 PM</option>
<option value="03:00 PM" >03:00 PM</option>
<option value="03:30 PM" >03:30 PM</option>
<option value="04:00 PM" >04:00 PM</option>
<option value="04:30 PM" >04:30 PM</option>
<option value="05:00 PM" >05:00 PM</option>
<option value="05:30 PM" >05:30 PM</option>
<option value="06:00 PM" >06:00 PM</option> 
</select></td>
<td><textarea cols='60' rows='7'><select id="time_a" name="time_a" > 
<option value="-1" selected >Select a time</option>
<option value="07:00 AM" >07:00 AM</option>
<option value="07:30 AM" >07:30 AM</option>
<option value="08:00 AM" >08:00 AM</option>
<option value="08:30 AM" >08:30 AM</option>
<option value="09:00 AM" >09:00 AM</option>
<option value="09:30 AM" >09:30 AM</option>
<option value="10:00 AM" >10:00 AM</option>
<option value="10:30 AM" >10:30 AM</option>
<option value="11:00 AM" >11:00 AM</option>
<option value="11:30 AM" >11:30 AM</option>
<option value="12:00 PM" >12:00 PM</option>
<option value="12:30 PM" >12:30 PM</option>
<option value="01:00 PM" >01:00 PM</option>
<option value="01:30 PM" >01:30 PM</option>
<option value="02:00 PM" >02:00 PM</option>
<option value="02:30 PM" >02:30 PM</option>
<option value="03:00 PM" >03:00 PM</option>
<option value="03:30 PM" >03:30 PM</option>
<option value="04:00 PM" >04:00 PM</option>
<option value="04:30 PM" >04:30 PM</option>
<option value="05:00 PM" >05:00 PM</option>
<option value="05:30 PM" >05:30 PM</option>
<option value="06:00 PM" >06:00 PM</option> 
</select></textarea></td></tr>
<tr>
<td><br>$f->time_select(10, 14,15,'time_b',null,'Appointment time' );</td>
<td>Select for time of day, with start hour set, end hour set, per set, Placeholder set</td>
<td><select id="time_b" name="time_b" > 
<option value="-1" selected >Appointment time</option>
<option value="10:00am" >10:00am</option>
<option value="10:15am" >10:15am</option>
<option value="10:30am" >10:30am</option>
<option value="10:45am" >10:45am</option>
<option value="11:00am" >11:00am</option>
<option value="11:15am" >11:15am</option>
<option value="11:30am" >11:30am</option>
<option value="11:45am" >11:45am</option>
<option value="12:00pm" >12:00pm</option>
<option value="12:15pm" >12:15pm</option>
<option value="12:30pm" >12:30pm</option>
<option value="12:45pm" >12:45pm</option>
<option value="01:00pm" >01:00pm</option>
<option value="01:15pm" >01:15pm</option>
<option value="01:30pm" >01:30pm</option>
<option value="01:45pm" >01:45pm</option>
<option value="02:00pm" >02:00pm</option> 
</select></td>
<td><textarea cols='60' rows='7'><select id="time_b" name="time_b" > 
<option value="-1" selected >Appointment time</option>
<option value="10:00am" >10:00am</option>
<option value="10:15am" >10:15am</option>
<option value="10:30am" >10:30am</option>
<option value="10:45am" >10:45am</option>
<option value="11:00am" >11:00am</option>
<option value="11:15am" >11:15am</option>
<option value="11:30am" >11:30am</option>
<option value="11:45am" >11:45am</option>
<option value="12:00pm" >12:00pm</option>
<option value="12:15pm" >12:15pm</option>
<option value="12:30pm" >12:30pm</option>
<option value="12:45pm" >12:45pm</option>
<option value="01:00pm" >01:00pm</option>
<option value="01:15pm" >01:15pm</option>
<option value="01:30pm" >01:30pm</option>
<option value="01:45pm" >01:45pm</option>
<option value="02:00pm" >02:00pm</option> 
</select></textarea></td></tr>
<tr><td colspan='4'><h3>Buttons</h3></td></tr>
<tr>
<td>$f->input_button( 'go_now','Go' );</td>
<td>Button with text</td>
<td><input type="button" id="go_now" name="go_now" value="Go" ></td>
<td><textarea cols='60'><input type="button" id="go_now" name="go_now" value="Go" ></textarea></td></tr>
<tr>
<td>$f->input_reset( 'rs_button','Reset Form' );</td>
<td>Reset button with text</td>
<td><input type="reset" id="rs_button" name="rs_button" value="Reset Form" ></td>
<td><textarea cols='60'><input type="reset" id="rs_button" name="rs_button" value="Reset Form" ></textarea></td></tr>
<tr>
<td>$f->input_submit( 'sbutton','Submit Form' );</td>
<td>Submit button with text</td>
<td><input type="submit" id="sbutton" name="sbutton" value="Submit Form" ></td>
<td><textarea cols='60'><input type="submit" id="sbutton" name="sbutton" value="Submit Form" ></textarea></td></tr>
<tr><td colspan='4'><h3>Other Examples</h3></td></tr>
<tr>
<td>$f->input_render( 'color','color_picker' );</td>
<td>Example Custom input type</td>
<td><input type="color" id="color_picker" name="color_picker" ></td>
<td><textarea cols='60'><input type="color" id="color_picker" name="color_picker" ></textarea></td></tr>
<tr>
<td>$f->input_render( 'range','temp' );</td>
<td>Example Custom input type</td>
<td><input type="range" id="temp" name="temp" ></td>
<td><textarea cols='60'><input type="range" id="temp" name="temp" ></textarea></td></tr></table>