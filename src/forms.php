<?php
    namespace forms;
    class forms {
        var $debug = false;
        public function __construct( ) {
        }
        public function set_debug( $debug = false ) {
            $this->debug = $debug;
        }
        /**
         * helper function to return 'selected'
         * @param string $a var1
         * @param string $b var2
         * @return string the HTML
         */
        public function is_selected_value( $a, $b ) {
            $o = ' value="' . $a . '" ';
            if ( $a == $b ) {
                $o .= "selected ";
            }
            return $o;
        }
        /**
         * Helper function to return 'checked'
         * @param string $a var1
         * @param string $b var2
         * @return string the HTML
         */
        public function is_checked_value( $a, $b ) {
            $o = ' value="' . $a . '" ';
            if ( $a == $b ) {
                $o .= "checked ";
            }
            return $o;
        }
        /**
         * Text escaper
         * @param string $text Text to be escaped
         * @return string the escaped text
         */
        public function text_out( $text = '' ) {
            return htmlspecialchars( $text, ENT_QUOTES );
        }
        public function add_label( $label_text = '', $wrap ) {
            return "\n<label>" . $label_text . $wrap . "</label>";
        }
        public function add_label_right( $label_text = '', $wrap ) {
            return "\n<label>" . $wrap . $label_text . "</label>";
        }
        /**
         * Mother Function that makes html for various inputs
         * @param string $type input type: text, number, hidden, etc
         * @param string $id html element id (if null $name is used)
         * @param string $val the value
         * @param string $name html element name (if null $id is used)
         * @param string $placeholder html element placeholder, gets escaped
         * @param string $onclick onclick function
         * @param string $onchange onchange function
         * @param array $extra associative array of inline others: data-id=>###, class=>red_form
         * @return string the HTML
         */
        public function input_render( $type = 'text', $id = null, $val = null, $name = null, $placeholder = null, $onclick = null, $onchange = null, $extra = array( ) ) {
            $r    = array( );
            $r[ ] = "<input";
            $r[ ] = "type=\"" . $type . "\"";
            if ( $id != null ) {
                $r[ ] = "id=\"" . $id . "\"";
                if ( $name == null ) {
                    $r[ ] = "name=\"" . $id . "\"";
                } else {
                    $r[ ] = "name=\"" . $name . "\"";
                }
            } else if ( $name != null ) {
                $r[ ] = "id=\"" . $name . "\"";
                $r[ ] = "name=\"" . $name . "\"";
            }
            //
            if ( $val != null ) {
                $r[ ] = "value=\"" . $this->text_out( $val ) . "\"";
            }
            if ( !is_array( $extra ) ) {
                $extra = array( );
            }
            //
            if ( $placeholder != null ) {
                $extra[ "placeholder" ] = $this->text_out( $placeholder );
            }
            if ( $onclick != null ) {
                $extra[ "onclick" ] = $onclick;
            }
            if ( $onchange != null ) {
                $extra[ "onchange" ] = $onchange;
            }
            if ( count( $extra ) > 0 ) {
                foreach ( $extra as $ekk => $evv ) {
                    $r[ ] = $ekk . "=\"" . $evv . "\"";
                }
            }
            //
            $r[ ] = ">";
            return implode( " ", $r );
        }
        /**
         * Makes html for input text
         * @param string $id html element id (if null $name is used)
         * @param string $val the value
         * @param string $name html element name (if null $id is used)
         * @param string $placeholder html element placeholder, gets escaped
         * @param string $onclick onclick function
         * @param string $onchange onchange function
         * @param array $extra associative array of inline others: data-id=>###, class=>red_form
         * @return string the HTML
         */
        public function input( $id = null, $val = null, $name = null, $placeholder = null, $onclick = null, $onchange = null, $extra = array( ) ) {
            return $this->input_render( 'text', $id, $val, $name, $placeholder, $onclick, $onchange, $extra );
        }
        /**
         * Makes html for input text with label
         * @param string $label_text Text for the label
         * @param string $id html element id
         * @param string $val the value
         * @param string $name html element name
         * @param string $placeholder html element placeholder, gets escaped
         * @param string $onclick onclick function
         * @param string $onchange onchange function
         * @param array $extra associative array of inline others: data-id=>###, class=>red_form
         * @return string the HTML
         */
        public function input_label( $label_text, $id = null, $val = null, $name = null, $placeholder = null, $onclick = null, $onchange = null, $extra = array( ) ) {
            return $this->add_label( $label_text, $this->input( $id, $val, $name, $placeholder, $onclick, $onchange, $extra ) );
        }
        /**
         * Makes html for input text
         * @param string $id html element id (if null $name is used)
         * @param string $val the Button text
         * @param string $name html element name (if null $id is used)
         * @param string $onclick onclick function
         * @param array $extra associative array of inline others: data-id=>###, class=>red_form
         * @return string the HTML
         */
        public function input_button( $id = null, $val = null, $name = null, $onclick = null, $extra = array( ) ) {
            return $this->input_render( 'button', $id, $val, $name, null, $onclick, null, $extra );
        }
        /**
         * Makes html for input text with label
         * @param string $label_text Text for the label
         * @param string $id html element id
         * @param string $val the Button text
         * @param string $name html element name
         * @param string $onclick onclick function
         * @param array $extra associative array of inline others: data-id=>###, class=>red_form
         * @return string the HTML
         */
        public function input_button_label( $label_text, $id = null, $val = null, $name = null, $onclick = null, $extra = array( ) ) {
            return $this->add_label( $label_text, $this->input_button( $id, $val, $name, $onclick, $extra ) );
        }
        /**
         * Makes html for input text
         * @param string $id html element id (if null $name is used)
         * @param string $val the Button text
         * @param string $name html element name (if null $id is used)
         * @param string $onclick onclick function
         * @param array $extra associative array of inline others: data-id=>###, class=>red_form
         * @return string the HTML
         */
        public function input_submit( $id = null, $val = 'Submit', $name = null, $onclick = null, $extra = array( ) ) {
            return $this->input_render( 'submit', $id, $val, $name, null, $onclick, null, $extra );
        }
        /**
         * Makes html for input text with label
         * @param string $label_text Text for the label
         * @param string $id html element id
         * @param string $val the Button text
         * @param string $name html element name
         * @param string $onclick onclick function
         * @param array $extra associative array of inline others: data-id=>###, class=>red_form
         * @return string the HTML
         */
        public function input_submit_label( $label_text, $id = null, $val = null, $name = null, $onclick = null, $extra = array( ) ) {
            return $this->add_label( $label_text, $this->input_submit( $id, $val, $name, $onclick, $extra ) );
        }
        /**
         * Makes html for input text
         * @param string $id html element id (if null $name is used)
         * @param string $val the Button text
         * @param string $name html element name (if null $id is used)
         * @param string $onclick onclick function
         * @param array $extra associative array of inline others: data-id=>###, class=>red_form
         * @return string the HTML
         */
        public function input_reset( $id = null, $val = 'Submit', $name = null, $onclick = null, $extra = array( ) ) {
            return $this->input_render( 'reset', $id, $val, $name, null, $onclick, null, $extra );
        }
        /**
         * Makes html for input text with label
         * @param string $label_text Text for the label
         * @param string $id html element id
         * @param string $val the Button text
         * @param string $name html element name
         * @param string $onclick onclick function
         * @param array $extra associative array of inline others: data-id=>###, class=>red_form
         * @return string the HTML
         */
        public function input_reset_label( $label_text, $id = null, $val = null, $name = null, $onclick = null, $extra = array( ) ) {
            return $this->add_label( $label_text, $this->input_reset( $id, $val, $name, $onclick, $extra ) );
        }
        /**
         * Makes html for hidden input
         * @param string $id id and name
         * @param string $val the value
         * @return string the HTML
         */
        public function input_hidden( $id = null, $val = null, $name = null ) {
            return $this->input_render( 'hidden', $id, $val, $name );
        }
        /**
         * Makes html for input number
         * @param string $id html element id
         * @param string $val the value
         * @param string $name html element name
         * @param string $placeholder html element placeholder, gets escaped
         * @param string $onclick onclick function
         * @param string $onchange onchange function
         * @param array $extra associative array of inline others: data-id=>###, class=>red_form
         * @return string the HTML
         */
        public function input_number( $id = null, $val = null, $name = null, $placeholder = null, $onclick = null, $onchange = null, $extra = array( ) ) {
            return $this->input_render( 'number', $id, $val, $name, $placeholder, $onclick, $onchange, $extra );
        }
        /**
         * Makes html for input number
         * @param string $label_text Text for the label 
         * @param string $id html element id
         * @param string $val the value
         * @param string $name html element name
         * @param string $placeholder html element placeholder, gets escaped
         * @param string $onclick onclick function
         * @param string $onchange onchange function
         * @param array $extra associative array of inline others: data-id=>###, class=>red_form
         * @return string the HTML
         */
        public function input_number_label( $label_text = '', $id = null, $val = null, $name = null, $placeholder = null, $onclick = null, $onchange = null, $extra = array( ) ) {
            return $this->add_label( $label_text, $this->input_render( 'number', $id, $val, $name, $placeholder, $onclick, $onchange, $extra ) );
        }
        /**
         * Makes html for input password
         * @param string $id html element id
         * @param string $val the value
         * @param string $name html element name
         * @param string $placeholder html element placeholder, gets escaped
         * @param string $onclick onclick function
         * @param string $onchange onchange function
         * @param array $extra associative array of inline others: data-id=>###, class=>red_form
         * @return string the HTML
         */
        public function input_password( $id = null, $val = null, $name = null, $placeholder = null, $onclick = null, $onchange = null, $extra = array( ) ) {
            return $this->input_render( 'password', $id, $val, $name, $placeholder, $onclick, $onchange, $extra );
        }
        /**
         * Makes html for input password with a label
         * @param string $label_text Text for the label 
         * @param string $id html element id
         * @param string $val the value
         * @param string $name html element name
         * @param string $placeholder html element placeholder, gets escaped
         * @param string $onclick onclick function
         * @param string $onchange onchange function
         * @param array $extra associative array of inline others: data-id=>###, class=>red_form
         * @return string the HTML
         */
        public function input_password_label( $label_text = '', $id = null, $val = null, $name = null, $placeholder = null, $onclick = null, $onchange = null, $extra = array( ) ) {
            return $this->add_label( $label_text, $this->input_render( 'password', $id, $val, $name, $placeholder, $onclick, $onchange, $extra ) );
        }
        /**
         * Makes html for input file
         * @param string $id id and name
         * @param string $val the value
         * @return string the HTML
         */
        public function input_file( $id = null, $val = null, $name = null, $placeholder = null, $onclick = null, $onchange = null, $extra = array( ) ) {
            return $this->input_render( 'file', $id, $val, $name, $placeholder, $onclick, $onchange, $extra );
        }
        /**
         * Makes html for input file
         * @param string $label_text Text for the label 
         * @param string $id id and name
         * @param string $val the value
         * @return string the HTML
         */
        public function input_file_label( $label_text = '', $id = null, $val = null, $name = null, $placeholder = null, $onclick = null, $onchange = null, $extra = array( ) ) {
            return $this->add_label( $label_text, $this->input_render( 'file', $id, $val, $name, $placeholder, $onclick, $onchange, $extra ) );
        }
        public function select( $id = null, $vals = null, $name = null, $selected = -1, $onclick = null, $onchange = null, $extra = array( ) ) {
            $r    = array( );
            $r[ ] = '<select';
            if ( $id != null ) {
                $r[ ] = "id=\"" . $id . "\"";
                if ( $name == null ) {
                    $r[ ] = "name=\"" . $id . "\"";
                } else {
                    $r[ ] = "name=\"" . $name . "\"";
                }
            } else if ( $name != null ) {
                $r[ ] = "id=\"" . $name . "\"";
                $r[ ] = "name=\"" . $name . "\"";
            }
            //
            if ( !is_array( $extra ) ) {
                $extra = array( );
            }
            if ( $onclick != null ) {
                $extra[ "onclick" ] = $onclick;
            }
            if ( $onchange != null ) {
                $extra[ "onchange" ] = $onchange;
            }
            if ( count( $extra ) > 0 ) {
                foreach ( $extra as $ekk => $evv ) {
                    $r[ ] = $ekk . "=\"" . $evv . "\"";
                }
            }
            $r[ ] = ">";
            $r[ ] = $this->select_just_options( $vals, $selected );
            $r[ ] = "\n" . '</select>';
            return implode( " ", $r );
        }
        public function select_just_options( $ar, $picked = null ) {
            //makes selection options , array of choices, id/name
            $out = array( );
            foreach ( $ar as $kk => $vv ) {
                if ( is_array( $vv ) ) {
                    $out[ ] = '<optgroup label="' . $kk . '">';
                    foreach ( $vv as $kki => $vvi ) {
                        $out[ ] = '<option' . $this->is_selected_value( $kki, $picked ) . '>' . $this->text_out( $vvi ) . '</option>';
                    }
                    $out[ ] = '</optgroup>';
                } else {
                    $out[ ] = '<option' . $this->is_selected_value( $kk, $picked ) . '>' . $this->text_out( $vv ) . '</option>';
                }
            }
            return "\n" . implode( "\n", $out );
        }
        public function time_select( $start = 7, $end = 18, $per = 30, $time_format = 'h:i A', $id = null, $name = null, $placeholder = null, $selected = -1, $onclick = null, $onchange = null, $extra = array( ) ) {
            $ar = $this->time_select_array( $start, $end, $per, $time_format, $placeholder );
            return $this->select( $id, $ar, $name, $selected, $onclick, $onchange, $extra );
        }
        public function time_select_array( $start = 7, $end = 18, $per = 30, $time_format = null, $placeholder = null ) {
            if ( $start == null ) {
                $start = 7;
            }
            if ( $end == null ) {
                $end = 18;
            }
            if ( $per == null ) {
                $per = 30;
            }
            if ( $placeholder == null ) {
                $placeholder = "Select a time";
            }
            if ( $time_format == null ) {
                $time_format = 'h:i A';
            }
            $ar = array( );
            if ( $start < 10 ) {
                $start = "0" . $start;
            }
            if ( $end < 10 ) {
                $end = "0" . $end;
            }
            $ar[ -1 ] = $placeholder;
            $n        = strtotime( '01/01/2018 ' . $start . ':00:00' );
            $e        = strtotime( '01/01/2018 ' . $end . ':00:00' );
            for ( $k = $n; $k <= $e; $k += ( $per * 60 ) ) {
                $ar[ date( $time_format, $k ) ] = date( $time_format, $k );
            }
            return $ar;
        }
        /**
         * Makes html for input radio
         * @param string $id html element id
         * @param string $val the value
         * @param string $name html element name
         * @param bool $checked should radio start selected
         * @param string $onclick onclick function
         * @param string $onchange onchange function
         * @param array $extra associative array of inline others: data-id=>###, class=>red_form
         * @return string the HTML
         */
        public function input_radio( $id = null, $val = null, $name = null, $checked = false, $onclick = null, $onchange = null, $extra = array( ) ) {
            if ( $checked == true ) {
                $extra[ 'checked' ] = 'checked';
            }
            return $this->input_render( 'radio', $id, $val, $name, null, $onclick, $onchange, $extra );
        }
        /**
         * Makes html for input radio with a label
         * @param string $label_text Text for the label 
         * @param string $id html element id
         * @param string $val the value
         * @param string $name html element name
         * @param string $placeholder html element placeholder, gets escaped
         * @param string $onclick onclick function
         * @param string $onchange onchange function
         * @param array $extra associative array of inline others: data-id=>###, class=>red_form
         * @return string the HTML
         */
        public function input_radio_label( $label_text, $id = null, $val = null, $name = null, $checked = false, $onclick = null, $onchange = null, $extra = array( ) ) {
            if ( $checked == true ) {
                $extra[ 'checked' ] = 'checked';
            }
            return $this->add_label( $label_text, $this->input_render( 'radio', $id, $val, $name, null, $onclick, $onchange, $extra ) );
        }
        /**
         * Makes html for input radio with a label on the right
         * @param string $label_text Text for the label 
         * @param string $id html element id
         * @param string $val the value
         * @param string $name html element name
         * @param string $placeholder html element placeholder, gets escaped
         * @param string $onclick onclick function
         * @param string $onchange onchange function
         * @param array $extra associative array of inline others: data-id=>###, class=>red_form
         * @return string the HTML
         */
        public function input_radio_label_right( $label_text, $id = null, $val = null, $name = null, $checked = false, $onclick = null, $onchange = null, $extra = array( ) ) {
            if ( $checked == true ) {
                $extra[ 'checked' ] = 'checked';
            }
            return $this->add_label_right( $label_text, $this->input_render( 'radio', $id, $val, $name, null, $onclick, $onchange, $extra ) );
        }
        /**
         * Makes html for input checkbox
         * @param string $id html element id
         * @param string $val the value
         * @param string $name html element name
         * @param string $placeholder html element placeholder, gets escaped
         * @param string $onclick onclick function
         * @param string $onchange onchange function
         * @param array $extra associative array of inline others: data-id=>###, class=>red_form
         * @return string the HTML
         */
        public function input_checkbox( $id = null, $val = null, $name = null, $placeholder = null, $onclick = null, $onchange = null, $extra = array( ) ) {
            return $this->input_render( 'checkbox', $id, $val, $name, $placeholder, $onclick, $onchange, $extra );
        }
        /**
         * Makes html for input checkbox with a label
         * @param string $label_text Text for the label 
         * @param string $id html element id
         * @param string $val the value
         * @param string $name html element name
         * @param string $placeholder html element placeholder, gets escaped
         * @param string $onclick onclick function
         * @param string $onchange onchange function
         * @param array $extra associative array of inline others: data-id=>###, class=>red_form
         * @return string the HTML
         */
        public function input_checkbox_label( $label_text, $id = null, $val = null, $name = null, $placeholder = null, $onclick = null, $onchange = null, $extra = array( ) ) {
            return $this->add_label( $label_text, $this->input_render( 'checkbox', $id, $val, $name, $placeholder, $onclick, $onchange, $extra ) );
        }
        /**
         * Makes html for input checkbox with a label on the right
         * @param string $label_text Text for the label 
         * @param string $id html element id
         * @param string $val the value
         * @param string $name html element name
         * @param string $placeholder html element placeholder, gets escaped
         * @param string $onclick onclick function
         * @param string $onchange onchange function
         * @param array $extra associative array of inline others: data-id=>###, class=>red_form
         * @return string the HTML
         */
        public function input_checkbox_label_right( $label_text, $id = null, $val = null, $name = null, $placeholder = null, $onclick = null, $onchange = null, $extra = array( ) ) {
            return $this->add_label_right( $label_text, $this->input_render( 'checkbox', $id, $val, $name, $placeholder, $onclick, $onchange, $extra ) );
        }
        /////////////////////////
        /////////////////////////
        /////////////////////////
        /////////////////////////
        public function checkbox_array( $ar, $l = null ) {
            $o = array( );
            foreach ( $ar as $kk => $vv ) {
                $o[ ] = $this->chk( $l . $kk, $vv[ 0 ], $vv[ 1 ] );
            }
            return $o;
        }
        public function chk( $c, $h, $v, $dis = false, $onclick = '' ) {
            $vv = '';
            if ( $v == false ) {
                $vv = '';
            }
            if ( $v == true ) {
                $vv = ' checked ';
            }
            if ( $dis ) {
                $diss    = ' onclick="return false;" ';
                $onclick = '';
            } else {
                $diss = '';
            }
            return '
    <label class="nomargin" for="' . $c . '">
    <input type="checkbox" name="' . $c . '" id="' . $c . '" ' . $vv . $diss . $onclick . ' value="1"/>
    <input type="hidden" name="' . md5( $c ) . '" id="' . md5( $c ) . '" value="1"/>
  ' . $h . '</label>
    ';
        }
        public function chkk( $c, $h, $v = false, $dis = false, $onclick = '' ) {
            $vv = '';
            if ( $v == false ) {
                $vv = '';
            }
            if ( $v == true ) {
                $vv = ' checked ';
            }
            if ( $dis ) {
                $diss    = ' onclick="return false;" ';
                $onclick = '';
            } else {
                $diss = '';
            }
            return '<label for="' . $c . '"><input type="checkbox" name="' . $c . '" id="' . $c . '" ' . $vv . $diss . $onclick . ' value="1"/>' . $h . '</label>';
        }
        public function nakked_chk( $c, $v = false, $dis = false, $onclick = '' ) {
            $vv = '';
            if ( $v == false ) {
                $vv = '';
            }
            if ( $v == true ) {
                $vv = ' checked ';
            }
            if ( $dis ) {
                $diss    = ' onclick="return false;" ';
                $onclick = '';
            } else {
                $diss = '';
            }
            return '<input type="checkbox" name="' . $c . '" id="' . $c . '" ' . $vv . $diss . $onclick . ' value="1"/>';
        }
        //
        public function bool_select( $id = null, $name = null, $selected = -1, $onclick = null, $onchange = null ) {
            $ar        = array( );
            $ar[ '1' ] = "Yes";
            $ar[ '0' ] = "No";
            return $this->select( $id, $ar, $name, $selected, $onclick, $onchange );
        }
        public function bool_select_label( $text, $id = null, $name = null, $selected = -1, $onclick = null, $onchange = null ) {
            return '<label>' . $text . $this->bool_select( $id, $name, $selected, $onclick, $onchange ) . '</label>';
        }
    }