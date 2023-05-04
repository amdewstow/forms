<?php
    //load via autoload
    //require( 'vendor/autoload.php' );
    //or require directly
    require( '../src/forms.php' );
    use forms\forms;
    $f = new forms();
    echo '<!DOCTYPE html>
<html>
   <head>
      <title>Form Examples</title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
   <body>
       <div style="max-width: 1920px;margin: auto;  width: 50%;">';
    echo "<table border='1px'>";
    //
    echo "\n<tr>";
    echo "\n<td>PHP Code<br>\$f = new forms();</td>";
    echo "\n<td>Description</td>";
    echo "\n<td>Result</td>";
    echo "\n<td>HTML Source</td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    echo "<td colspan='4'><hr><h3>Inputs</h3></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    echo "\n<td>\$f->input( 'first_name' );</td>";
    echo "\n<td>Text</td>";
    echo "\n<td>" . $f->input( 'first_name' ) . "</td>";
    echo "\n<td><textarea cols='60'>" . $f->input( 'first_name' ) . "</textarea></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    echo "\n<td>\$f->input_label( 'First Name:','first_name' );</td>";
    echo "\n<td>Text with a label</td>";
    echo "\n<td>" . $f->input_label( 'First Name:', 'first_name' ) . "</td>";
    echo "\n<td><textarea cols='60'>" . $f->input_label( 'First Name:', 'first_name' ) . "</textarea></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    echo "\n<td>\$f->input_number( 'age' );</td>";
    echo "\n<td>Number</td>";
    echo "\n<td>" . $f->input_number( 'age' ) . "</td>";
    echo "\n<td><textarea cols='60'>" . $f->input_number( 'age' ) . "</textarea></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    echo "\n<td>\$f->input_password( 'password_a',null,null,'Enter New Password' );</td>";
    echo "\n<td>Password with placeholder set</td>";
    echo "\n<td>" . $f->input_password( 'password_a', null, null, 'Enter New Password' ) . "</td>";
    echo "\n<td><textarea cols='60'>" . $f->input_password( 'password_a', null, null, 'Enter New Password' ) . "</textarea></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    echo "\n<td>\$f->input_hidden( 'setting_a','rabdargab' );</td>";
    echo "\n<td>Hidden</td>";
    echo "\n<td>" . $f->input_hidden( 'setting_a', 'rabdargab' ) . "</td>";
    echo "\n<td><textarea cols='60'>" . $f->input_hidden( 'setting_a', 'rabdargab' ) . "</textarea></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    echo "\n<td>
        \$f->input_radio_label_right('A', 'rad_a','A','radio_inputsl',null,null,true );<br>
        \$f->input_radio_label_right('B' 'rad_b','B','radio_inputsl' );
        </td>";
    echo "\n<td>Radio Inputs</td>";
    $radio = $f->input_radio_label_right( 'A', 'rad_a', 'A', 'radio_inputsl', true );
    $radio .= "\n<br>" . $f->input_radio_label_right( 'B', 'rad_b', 'B', 'radio_inputsl' );
    echo "\n<td>" . $radio . "</td>";
    echo "\n<td><textarea rows='6' cols='60'>" . $radio . "</textarea></td>";
    echo "</tr>";
    echo "\n<tr>";
    echo "\n<td>
        \$f->input_checkbox_label_right('Aa', 'check_a','A' );<br>
        \$f->input_checkbox_label_right('Bb' 'check_b','B' );
        </td>";
    echo "\n<td>Checkbox Inputs</td>";
    $radio = $f->input_checkbox_label_right( 'Aa', 'check_a', 'A' );
    $radio .= "\n<br>" . $f->input_checkbox_label_right( 'Bb', 'check_b', 'B' );
    echo "\n<td>" . $radio . "</td>";
    echo "\n<td><textarea rows='6' cols='60'>" . $radio . "</textarea></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    echo "\n<td>\$f->input_file( 'cv' );</td>";
    echo "\n<td>File</td>";
    echo "\n<td>" . $f->input_file( 'cv' ) . "</td>";
    echo "\n<td><textarea cols='60'>" . $f->input_file( 'cv' ) . "</textarea></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    echo "\n<td>\$f->input( 'first_name','Bob' );</td>";
    echo "\n<td>Text with value set</td>";
    echo "\n<td>" . $f->input( 'first_name', 'Bob' ) . "</td>";
    echo "\n<td><textarea cols='60'>" . $f->input( 'first_name', 'Bob' ) . "</textarea></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    echo "\n<td>\$f->input( 'first_name','Bob',null );</td>";
    echo "\n<td>Text with value set, null name</td>";
    echo "\n<td>" . $f->input( 'first_name', 'Bob', null ) . "</td>";
    echo "\n<td><textarea cols='60'>" . $f->input( 'first_name', 'Bob', null ) . "</textarea></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    echo "\n<td>\$f->input( 'first_name','Bob','FIRST_NAME' );</td>";
    echo "\n<td>Text with value set, name set</td>";
    echo "\n<td>" . $f->input( 'first_name', 'Bob', 'FIRST_NAME' ) . "</td>";
    echo "\n<td><textarea cols='60'>" . $f->input( 'first_name', 'Bob', 'FIRST_NAME' ) . "</textarea></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    echo "\n<td>\$f->input( 'first_name',null,'FIRST_NAME' ,'Bob');</td>";
    echo "\n<td>Text with name set, placeholder set</td>";
    echo "\n<td>" . $f->input( 'first_name', null, 'FIRST_NAME', 'Bob' ) . "</td>";
    echo "\n<td><textarea cols='60'>" . $f->input( 'first_name', null, 'FIRST_NAME', 'Bob' ) . "</textarea></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    echo "\n<td>\$f->input( 'first_name',null,'FIRST_NAME' ,'Bob','clicked_name()');</td>";
    echo "\n<td>Text with name set, placeholder set, on click set</td>";
    echo "\n<td>" . $f->input( 'first_name', null, 'FIRST_NAME', 'Bob', 'clicked_name()' ) . "</td>";
    echo "\n<td><textarea cols='60'>" . $f->input( 'first_name', null, 'FIRST_NAME', 'Bob', 'clicked_name()' ) . "</textarea></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    echo "\n<td>\$f->input( 'first_name',null,'FIRST_NAME' ,'Bob','clicked_name()','changed_name()');</td>";
    echo "\n<td>Text with name set, placeholder set, on click set, on change set</td>";
    echo "\n<td>" . $f->input( 'first_name', null, 'FIRST_NAME', 'Bob', 'clicked_name()', 'changed_name()' ) . "</td>";
    echo "\n<td><textarea rows='4'  cols='60'>" . $f->input( 'first_name', null, 'FIRST_NAME', 'Bob', 'clicked_name()', 'changed_name()' ) . "</textarea></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    $extras              = array( );
    $extras[ 'data-id' ] = 99;
    $extras[ 'class' ]   = 'name_inputs';
    echo "\n<td>\$extras =  array (
        <br>&nbsp; 'data-id' => 99,
        <br>&nbsp; 'class' => 'name_inputs'
        <br>);
        <br>\$f->input(  'first_name','BOB',null,null,null,null,\$extras);</td>";
    echo "\n<td>Text with name set, value set, extras set</td>";
    echo "\n<td>" . $f->input( 'first_name', 'BOB', null, null, null, null, $extras ) . "</td>";
    echo "\n<td><textarea cols='60'>" . $f->input( 'first_name', 'BOB', null, null, null, null, $extras ) . "</textarea></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    $extras              = array( );
    $extras[ 'data-id' ] = 62;
    $extras[ 'class' ]   = 'name_inputs';
    $extras[ 'foo' ]     = 'bar';
    echo "\n<td>\$extras = array (
        <br>&nbsp; 'data-id' => 62,
        <br>&nbsp; 'class' => 'name_inputs',
        <br>&nbsp; 'foo' => 'bar'
        <br>);
        <br>\$f->input('first_name',null,null,null,null,null,\$extras);</td>";
    echo "\n<td>Text with name set, extras set</td>";
    echo "\n<td>" . $f->input( 'first_name', null, null, null, null, null, $extras ) . "</td>";
    echo "\n<td><textarea cols='60'>" . $f->input( 'first_name', null, null, null, null, null, $extras ) . "</textarea></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    echo "<td colspan='4'><h3>Selects</h3></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    $options        = array( );
    $options[ -1 ]  = "Question";
    $options[ 1 ]   = "Yes";
    $options[ 0 ]   = "No";
    $options[ 'x' ] = "Maybe?";
    echo "\n<td>\$options = array (
        <br>&nbsp; -1 => 'Question',
        <br>&nbsp; 1 => 'Yes',
        <br>&nbsp; 0 => 'No',
        <br>&nbsp; 'x' => 'Maybe?'
        <br>);
        <br>\$f->select('askq',\$options);</td>";
    echo "\n<td>Select</td>";
    echo "\n<td>" . $f->select( 'askq', $options ) . "</td>";
    echo "\n<td><textarea cols='60' rows='7'>" . $f->select( 'askq', $options ) . "</textarea></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    echo "\n<td>\$options = array (
        <br>&nbsp; -1 => 'Question',
        <br>&nbsp; 1 => 'Yes',
        <br>&nbsp; 0 => 'No',
        <br>&nbsp; 'x' => 'Maybe?'
        <br>);
        <br>\$f->select(  'askqs',\$options,null,1);</td>";
    echo "\n<td>Select with option selected</td>";
    echo "\n<td>" . $f->select( 'askqs', $options, null, 1 ) . "</td>";
    echo "\n<td><textarea cols='60' rows='7'>" . $f->select( 'askqs', $options, null, 1 ) . "</textarea></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    $nested_options                      = array( );
    $nested_options[ 'Group A' ]         = array( );
    $nested_options[ 'Group A' ][ 'A1' ] = 'One';
    $nested_options[ 'Group A' ][ 'A2' ] = 'Two';
    $nested_options[ 'Group B' ]         = array( );
    $nested_options[ 'Group B' ][ 'B1' ] = '1';
    $nested_options[ 'Group B' ][ 'B2' ] = '2';
    echo "\n<td>\$nested_options = array (
        <br>&nbsp; 'Group A' => array ( 
        <br>&nbsp; &nbsp; 'A1' => 'One',
        <br>&nbsp; &nbsp; 'A2' => 'Two' 
        <br>&nbsp; ),
        <br>&nbsp; 'Group B' => array (
        <br>&nbsp; &nbsp; 'B1' => '1',
        <br>&nbsp; &nbsp; 'B2' => '2'
        <br>&nbsp; )
        <br>);
        <br><br>\$f->select(  'askqc',\$options,null,1);</td>";
    echo "\n<td>Select with option groups</td>";
    echo "\n<td>" . $f->select( 'askqc', $nested_options, null, 1 ) . "</td>";
    echo "\n<td><textarea cols='60' rows='7'>" . $f->select( 'askqc', $nested_options, null, 1 ) . "</textarea></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    echo "\n<td><br>\$f->time_select(null,null,null,null,'time_a' );</td>";
    echo "\n<td>Select for time of day</td>";
    echo "\n<td>" . $f->time_select( null, null, null, null, 'time_a' ) . "</td>";
    echo "\n<td><textarea cols='60' rows='7'>" . $f->time_select( null, null, null, null, 'time_a' ) . "</textarea></td>";
    echo "</tr>";
    echo "\n<tr>";
    echo "\n<td><br>\$f->time_select(10, 14,15,'time_b',null,'Appointment time' );</td>";
    echo "\n<td>Select for time of day, with start hour set, end hour set, per set, Placeholder set</td>";
    echo "\n<td>" . $f->time_select( 10, 14, 15, 'h:ia', 'time_b', null, 'Appointment time' ) . "</td>";
    echo "\n<td><textarea cols='60' rows='7'>" . $f->time_select( 10, 14, 15, 'h:ia', 'time_b', null, 'Appointment time' ) . "</textarea></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    echo "<td colspan='4'><h3>Buttons</h3></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    echo "\n<td>\$f->input_button( 'go_now','Go' );</td>";
    echo "\n<td>Button with text</td>";
    echo "\n<td>" . $f->input_button( 'go_now', 'Go' ) . "</td>";
    echo "\n<td><textarea cols='60'>" . $f->input_button( 'go_now', 'Go' ) . "</textarea></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    echo "\n<td>\$f->input_reset( 'rs_button','Reset Form' );</td>";
    echo "\n<td>Reset button with text</td>";
    echo "\n<td>" . $f->input_reset( 'rs_button', 'Reset Form' ) . "</td>";
    echo "\n<td><textarea cols='60'>" . $f->input_reset( 'rs_button', 'Reset Form' ) . "</textarea></td>";
    echo "</tr>";
    // 
    echo "\n<tr>";
    echo "\n<td>\$f->input_submit( 'sbutton','Submit Form' );</td>";
    echo "\n<td>Submit button with text</td>";
    echo "\n<td>" . $f->input_submit( 'sbutton', 'Submit Form' ) . "</td>";
    echo "\n<td><textarea cols='60'>" . $f->input_submit( 'sbutton', 'Submit Form' ) . "</textarea></td>";
    echo "</tr>";
    //
    //
    echo "\n<tr>";
    echo "<td colspan='4'><h3>Other Examples</h3></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    echo "\n<td>\$f->input_render( 'color','color_picker' );</td>";
    echo "\n<td>Example Custom input type</td>";
    echo "\n<td>" . $f->input_render( 'color', 'color_picker' ) . "</td>";
    echo "\n<td><textarea cols='60'>" . $f->input_render( 'color', 'color_picker' ) . "</textarea></td>";
    echo "</tr>";
    //
    echo "\n<tr>";
    echo "\n<td>\$f->input_render( 'range','temp' );</td>";
    echo "\n<td>Example Custom input type</td>";
    echo "\n<td>" . $f->input_render( 'range', 'temp' ) . "</td>";
    echo "\n<td><textarea cols='60'>" . $f->input_render( 'range', 'temp' ) . "</textarea></td>";
    echo "</tr>";
    //
    echo "</table>";
    echo '</div></body></html>';