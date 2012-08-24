<?php

class SpecialSkinShop extends SpecialPage {

        function __construct() {
                parent::__construct( 'SkinShop' );
        }

        public function execute( $par ) {
			$out = $this->getOutput();
			$this->setHeaders();
			
			$out->addModules( 'ext.skinshop' );
			$out->addHTML( '
				<div id="skinshop-payment">
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="cmd" value="_s-xclick">
					<input type="hidden" name="hosted_button_id" value="JZTP7QRW8NQBY">
					<table id="skinshop-table">
					<tr><td><input type="hidden" name="on0" value="Skin">Skin</td></tr><tr><td><select name="os0">
							<option value="BlueCloud">BlueCloud : $4.99 USD - yearly</option>
							<option value="Hope">Hope : $3.99 USD - yearly</option>
							<option value="Nimbus">Nimbus : $4.99 USD - yearly</option>
							<option value="phpBB">phpBB : $4.99 USD - yearly</option>
							<option value="Truglass">Truglass : $4.99 USD - yearly</option>
					</select> </td></tr>
					<tr><td><input type="hidden" name="on1" value="Domain">' . wfMsg( 'skinshop-domain' ) . '</td></tr><tr><td><input type="text" name="os1" maxlength="200"></td></tr>
					</table>
					<input type="hidden" name="currency_code" value="USD">
					<input type="image" src="https://www.paypalobjects.com/en_US/GB/i/btn/btn_subscribeCC_LG.gif" border="0" name="submit" alt="PayPal . The safer, easier way to pay online.">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_GB/i/scr/pixel.gif" width="1" height="1">
					</form>
				</div>'
			);
		}
}