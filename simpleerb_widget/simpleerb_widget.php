<?php
/*
Plugin Name: SimpleERB Widget (unofficial)
Plugin URI: http://simpleerb.com
Description: Provides shortcode for adding SimpleERB Widget to a page
Version: 0.1 BETA
Author: Jonathan Frascella
Author URI: http://www.gattonero.co.uk
*/

/*
This widget is not authorised by SimpleERB.

Contact me at http://www.gattonero.co.uk or @joffff

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>.
*/

function simpleERB_widget_shortcode($widget_id){

	extract( shortcode_atts(array(
		'widget_id' => 'widget_id'
		), $widget_id));

	return '<div id="serb-booking-widget"></div>
		<script type="text/javascript" src="http://simpleerb-app.5pm.co.uk/widget/init/"></script>
		<script type="text/javascript">
			var wdgt = GetNewWidgetController('.$widget_id.');
			wdgt.Width = 470;
			wdgt.Height = 490;
			wdgt.TargetElementId = "serb-booking-widget";
			wdgt.ShowWidget();
		</script>';


}
add_shortcode( 'serb_widget', 'simpleERB_widget_shortcode' );
?>