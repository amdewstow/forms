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
  </tr>  
  <tr>
    <td>$f->input( 'first_name' );</td>
    <td>Text</td>
    <td>&lt;input type=&quot;text&quot; id=&quot;first_name&quot; name=&quot;first_name&quot; &gt;</td>
  </tr>
  <tr>
    <td>$f->input_label( 'First Name:','first_name' );</td>
    <td>Text with a label</td>
    <td>&lt;label&gt;First Name:&lt;input type=&quot;text&quot; id=&quot;first_name&quot; name=&quot;first_name&quot; &gt;&lt;/label&gt;</td>
  </tr>
  <tr>
    <td>$f->input_number( 'age' );</td>
    <td>Number</td>
    <td>&lt;input type=&quot;number&quot; id=&quot;age&quot; name=&quot;age&quot; &gt;</td>
  </tr>
  <tr>
    <td>$f->input_password( 'password_a',null,null,'Enter New Password' );</td>
    <td>Password with placeholder set</td>
    <td>&lt;input type=&quot;password&quot; id=&quot;password_a&quot; name=&quot;password_a&quot; placeholder=&quot;Enter New Password&quot; &gt;</td>
  </tr>
  <tr>
    <td>$f->input_hidden( 'setting_a','rabdargab' );</td>
    <td>Hidden</td>
    <td>&lt;input type=&quot;hidden&quot; id=&quot;setting_a&quot; name=&quot;setting_a&quot; value=&quot;rabdargab&quot; &gt;</td>
  </tr>
  <tr>
    <td>
      $f->input_radio_label_right('A', 'rad_a','A','radio_inputsl',null,null,true );<br>
      $f->input_radio_label_right('B' 'rad_b','B','radio_inputsl' );
    </td>
    <td>Radio Inputs</td>
    <td>
      &lt;label&gt;&lt;input type=&quot;radio&quot; id=&quot;rad_a&quot; name=&quot;radio_inputsl&quot; value=&quot;A&quot; checked=&quot;checked&quot; &gt;A&lt;/label&gt;
      <br>
      &lt;label&gt;&lt;input type=&quot;radio&quot; id=&quot;rad_b&quot; name=&quot;radio_inputsl&quot; value=&quot;B&quot; &gt;B&lt;/label&gt;
    </td>
    
  </tr>
  <tr>
    <td>
      $f->input_checkbox_label_right('Aa', 'check_a','A' );<br>
      $f->input_checkbox_label_right('Bb' 'check_b','B' );
    </td>
    <td>Checkbox Inputs</td>
    <td>
      &lt;label&gt;&lt;input type=&quot;checkbox&quot; id=&quot;check_a&quot; name=&quot;check_a&quot; value=&quot;A&quot; &gt;Aa&lt;/label&gt;
       <br>
      &lt;label&gt;&lt;input type=&quot;checkbox&quot; id=&quot;check_b&quot; name=&quot;check_b&quot; value=&quot;B&quot; &gt;Bb&lt;/label&gt;
    </td>
    
  </tr>
  <tr>
    <td>$f->input_file( 'cv' );</td>
    <td>File</td>
    <td>&lt;input type=&quot;file&quot; id=&quot;cv&quot; name=&quot;cv&quot; &gt;</td>
  </tr>
  <tr>
    <td>$f->input( 'first_name','Bob' );</td>
    <td>Text with value set</td>
    <td>&lt;input type=&quot;text&quot; id=&quot;first_name&quot; name=&quot;first_name&quot; value=&quot;Bob&quot; &gt;</td>
  </tr>
  <tr>
    <td>$f->input( 'first_name','Bob',null );</td>
    <td>Text with value set, null name</td>
    <td>&lt;input type=&quot;text&quot; id=&quot;first_name&quot; name=&quot;first_name&quot; value=&quot;Bob&quot; &gt;</td>
  </tr>
  <tr>
    <td>$f->input( 'first_name','Bob','FIRST_NAME' );</td>
    <td>Text with value set, name set</td>
    <td>&lt;input type=&quot;text&quot; id=&quot;first_name&quot; name=&quot;FIRST_NAME&quot; value=&quot;Bob&quot; &gt;</td>
  </tr>
  <tr>
    <td>$f->input( 'first_name',null,'FIRST_NAME' ,'Bob');</td>
    <td>Text with name set, placeholder set</td>
    <td>&lt;input type=&quot;text&quot; id=&quot;first_name&quot; name=&quot;FIRST_NAME&quot; placeholder=&quot;Bob&quot; &gt;</td>
  </tr>
  <tr>
    <td>$f->input( 'first_name',null,'FIRST_NAME' ,'Bob','clicked_name()');</td>
    <td>Text with name set, placeholder set, on click set</td>
    <td>&lt;input type=&quot;text&quot; id=&quot;first_name&quot; name=&quot;FIRST_NAME&quot; placeholder=&quot;Bob&quot; onclick=&quot;clicked_name()&quot; &gt;</td>
  </tr>
  <tr>
    <td>$f->input( 'first_name',null,'FIRST_NAME' ,'Bob','clicked_name()','changed_name()');</td>
    <td>Text with name set, placeholder set, on click set, on change set</td>
    <td>&lt;input type=&quot;text&quot; id=&quot;first_name&quot; name=&quot;FIRST_NAME&quot; placeholder=&quot;Bob&quot; onclick=&quot;clicked_name()&quot; onchange=&quot;changed_name()&quot; &gt;</td>
    
  </tr>
  <tr>
    <td>$extras =  array (
      <br>&nbsp; 'data-id' => 99,
      <br>&nbsp; 'class' => 'name_inputs'
      <br>);
      <br>$f->input(  'first_name','BOB',null,null,null,null,$extras);
    </td>
    <td>Text with name set, value set, extras set</td>
    <td>&lt;input type=&quot;text&quot; id=&quot;first_name&quot; name=&quot;first_name&quot; value=&quot;BOB&quot; data-id=&quot;99&quot; class=&quot;name_inputs&quot; &gt;</td>
  </tr>
  <tr>
    <td>$extras = array (
      <br>&nbsp; 'data-id' => 62,
      <br>&nbsp; 'class' => 'name_inputs',
      <br>&nbsp; 'foo' => 'bar'
      <br>);
      <br>$f->input('first_name',null,null,null,null,null,$extras);
    </td>
    <td>Text with name set, extras set</td>
    <td>&lt;input type=&quot;text&quot; id=&quot;first_name&quot; name=&quot;first_name&quot; data-id=&quot;62&quot; class=&quot;name_inputs&quot; foo=&quot;bar&quot; &gt;</td>
  </tr>
  <tr>
    <td colspan='3'>
      <h3>Selects</h3>
    </td>
  </tr>
  <tr>
    <td>$options = array (
      <br>&nbsp; -1 => 'Question',
      <br>&nbsp; 1 => 'Yes',
      <br>&nbsp; 0 => 'No',
      <br>&nbsp; 'x' => 'Maybe?'
      <br>);
      <br>$f->select('askq',$options);
    </td>
    <td>Select</td>
    <td>
      &lt;select id=&quot;askq&quot; name=&quot;askq&quot; &gt;
        &lt;option value=&quot;-1&quot; selected &gt;Question&lt;/option&gt;
        &lt;option value=&quot;1&quot; &gt;Yes&lt;/option&gt;
        &lt;option value=&quot;0&quot; &gt;No&lt;/option&gt;
        &lt;option value=&quot;x&quot; &gt;Maybe?&lt;/option&gt;
      &lt;/select&gt;
    </td>
    
  </tr>
  <tr>
    <td>$options = array (
      <br>&nbsp; -1 => 'Question',
      <br>&nbsp; 1 => 'Yes',
      <br>&nbsp; 0 => 'No',
      <br>&nbsp; 'x' => 'Maybe?'
      <br>);
      <br>$f->select(  'askqs',$options,null,1);
    </td>
    <td>Select with option selected</td>
    <td>
      &lt;select id=&quot;askqs&quot; name=&quot;askqs&quot; &gt;
        &lt;option value=&quot;-1&quot; &gt;Question&lt;/option&gt;
        &lt;option value=&quot;1&quot; selected &gt;Yes&lt;/option&gt;
        &lt;option value=&quot;0&quot; &gt;No&lt;/option&gt;
        &lt;option value=&quot;x&quot; &gt;Maybe?&lt;/option&gt;
      &lt;/select&gt;
    </td>    
  </tr>
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
      <br><br>$f->select(  'askqc',$options,null,1);
    </td>
    <td>Select with option groups</td>
    <td>
      &lt;select id=&quot;askqc&quot; name=&quot;askqc&quot; &gt;
        &lt;optgroup label=&quot;Group A&quot;&gt;
          &lt;option value=&quot;A1&quot; &gt;One&lt;/option&gt;
          &lt;option value=&quot;A2&quot; &gt;Two&lt;/option&gt;
        &lt;/optgroup&gt;
        &lt;optgroup label=&quot;Group B&quot;&gt;
          &lt;option value=&quot;B1&quot; &gt;1&lt;/option&gt;
          &lt;option value=&quot;B2&quot; &gt;2&lt;/option&gt;
        &lt;/optgroup&gt;
      &lt;/select&gt;
    </td>    
  </tr>
  <tr>
    <td><br>$f->time_select(null,null,null,null,'time_a' );</td>
    <td>Select for time of day</td>
    <td>
      &lt;select id=&quot;time_a&quot; name=&quot;time_a&quot; &gt;
        &lt;option value=&quot;-1&quot; selected &gt;Select a time&lt;/option&gt;
        &lt;option value=&quot;07:00 AM&quot; &gt;07:00 AM&lt;/option&gt;
        &lt;option value=&quot;07:30 AM&quot; &gt;07:30 AM&lt;/option&gt;
        &lt;option value=&quot;08:00 AM&quot; &gt;08:00 AM&lt;/option&gt;
        &lt;option value=&quot;08:30 AM&quot; &gt;08:30 AM&lt;/option&gt;
        &lt;option value=&quot;09:00 AM&quot; &gt;09:00 AM&lt;/option&gt;
        &lt;option value=&quot;09:30 AM&quot; &gt;09:30 AM&lt;/option&gt;
        &lt;option value=&quot;10:00 AM&quot; &gt;10:00 AM&lt;/option&gt;
        &lt;option value=&quot;10:30 AM&quot; &gt;10:30 AM&lt;/option&gt;
        &lt;option value=&quot;11:00 AM&quot; &gt;11:00 AM&lt;/option&gt;
        &lt;option value=&quot;11:30 AM&quot; &gt;11:30 AM&lt;/option&gt;
        &lt;option value=&quot;12:00 PM&quot; &gt;12:00 PM&lt;/option&gt;
        &lt;option value=&quot;12:30 PM&quot; &gt;12:30 PM&lt;/option&gt;
        &lt;option value=&quot;01:00 PM&quot; &gt;01:00 PM&lt;/option&gt;
        &lt;option value=&quot;01:30 PM&quot; &gt;01:30 PM&lt;/option&gt;
        &lt;option value=&quot;02:00 PM&quot; &gt;02:00 PM&lt;/option&gt;
        &lt;option value=&quot;02:30 PM&quot; &gt;02:30 PM&lt;/option&gt;
        &lt;option value=&quot;03:00 PM&quot; &gt;03:00 PM&lt;/option&gt;
        &lt;option value=&quot;03:30 PM&quot; &gt;03:30 PM&lt;/option&gt;
        &lt;option value=&quot;04:00 PM&quot; &gt;04:00 PM&lt;/option&gt;
        &lt;option value=&quot;04:30 PM&quot; &gt;04:30 PM&lt;/option&gt;
        &lt;option value=&quot;05:00 PM&quot; &gt;05:00 PM&lt;/option&gt;
        &lt;option value=&quot;05:30 PM&quot; &gt;05:30 PM&lt;/option&gt;
        &lt;option value=&quot;06:00 PM&quot; &gt;06:00 PM&lt;/option&gt;
      &lt;/select&gt;
    </td>    
  </tr>
  <tr>
    <td><br>$f->time_select(10, 14,15,'time_b',null,'Appointment time' );</td>
    <td>Select for time of day, with start hour set, end hour set, per set, Placeholder set</td>
    <td>
      &lt;select id=&quot;time_b&quot; name=&quot;time_b&quot; &gt;
        &lt;option value=&quot;-1&quot; selected &gt;Appointment time&lt;/option&gt;
        &lt;option value=&quot;10:00am&quot; &gt;10:00am&lt;/option&gt;
        &lt;option value=&quot;10:15am&quot; &gt;10:15am&lt;/option&gt;
        &lt;option value=&quot;10:30am&quot; &gt;10:30am&lt;/option&gt;
        &lt;option value=&quot;10:45am&quot; &gt;10:45am&lt;/option&gt;
        &lt;option value=&quot;11:00am&quot; &gt;11:00am&lt;/option&&lt;input type=&quot;reset&quot; id=&quot;rs_button&quot; name=&quot;rs_button&quot; value=&quot;Reset Form&quot; &gt;gt;
        &lt;option value=&quot;11:15am&quot; &gt;11:15am&lt;/option&gt;
        &lt;option value=&quot;11:30am&quot; &gt;11:30am&lt;/option&gt;
        &lt;option value=&quot;11:45am&quot; &gt;11:45am&lt;/option&gt;
        &lt;option value=&quot;12:00pm&quot; &gt;12:00pm&lt;/option&gt;
        &lt;option value=&quot;12:15pm&quot; &gt;12:15pm&lt;/option&gt;
        &lt;option value=&quot;12:30pm&quot; &gt;12:30pm&lt;/option&gt;
        &lt;option value=&quot;12:45pm&quot; &gt;12:45pm&lt;/option&gt;
        &lt;option value=&quot;01:00pm&quot; &gt;01:00pm&lt;/option&gt;
        &lt;option value=&quot;01:15pm&quot; &gt;01:15pm&lt;/option&gt;
        &lt;option value=&quot;01:30pm&quot; &gt;01:30pm&lt;/option&gt;
        &lt;option value=&quot;01:45pm&quot; &gt;01:45pm&lt;/option&gt;
        &lt;option value=&quot;02:00pm&quot; &gt;02:00pm&lt;/option&gt;
      &lt;/select&gt;
    </td>    
  </tr>
  <tr>
    <td colspan='4'>
      <h3>Buttons</h3>
    </td>
  </tr>
  <tr>
    <td>$f->input_button( 'go_now','Go' );</td>
    <td>Button with text</td>
    <td>&lt;input type=&quot;button&quot; id=&quot;go_now&quot; name=&quot;go_now&quot; value=&quot;Go&quot; &gt;</td>
  </tr>
  <tr>
    <td>$f->input_reset( 'rs_button','Reset Form' );</td>
    <td>Reset button with text</td>
    <td>&lt;input type=&quot;reset&quot; id=&quot;rs_button&quot; name=&quot;rs_button&quot; value=&quot;Reset Form&quot; &gt;</td>
  </tr>
  <tr>
    <td>$f->input_submit( 'sbutton','Submit Form' );</td>
    <td>Submit button with text</td>
    <td>&lt;input type=&quot;submit&quot; id=&quot;sbutton&quot; name=&quot;sbutton&quot; value=&quot;Submit Form&quot; &gt;</td>
  </tr>
  <tr>
    <td colspan='4'>
      <h3>Other Examples</h3>
    </td>
  </tr>
  <tr>
    <td>$f->input_render( 'color','color_picker' );</td>
    <td>Example Custom input type</td>
    <td>&lt;input type=&quot;color&quot; id=&quot;color_picker&quot; name=&quot;color_picker&quot; &gt;</td>
  </tr>
  <tr>
    <td>$f->input_render( 'range','temp' );</td>
    <td>Example Custom input type</td>
    <td>&lt;input type=&quot;range&quot; id=&quot;temp&quot; name=&quot;temp&quot; &gt;</td>
  </tr>
</table>