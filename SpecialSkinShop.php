<?php

class SpecialSkinShop extends SpecialPage {

	public function __construct() {
		parent::__construct( 'SkinShop' );
	}

	public function execute( $par ) {
		global $wgSkinShopAvailable;
		$out = $this->getOutput();
		$this->setHeaders();
		$out->addModules( 'ext.skinshop' );

		$shopHooks = new ShopLibraryHooks( $links );
		$out->addHTML( $shopHooks->buildSWShopHeader() );

		/*
		 * Split array, and output description and image for each skin purchasable.
		 */
		foreach( $wgSkinShopAvailable as $shopskin ) {
			$out->addHTML( '<div class="skinshop-skindesc">' );
			$out->addHTML( '<h2>' . wfMessage( $shopskin )->plain(). '</h2>' );
			$out->addHTML( '<img alt="' . $shopskin . '" border="0" src="img/skin-' . $shopskin . '.png">' );
			$out->addWikiMsg( 'skinshop-' . $shopskin . '-desc' );	
			$out->addHTML( '<div class="skinshop-skinprice">' . wfMessage( 'skinshop-price' )->plain() . ' $' . wfMessage( 'skinshop-' . $shopskin . '-price' )->plain() . '</div>' );
			$out->addHTML( '</div>' );
		};

		/*
		 * Do the WordPress plugin thing and add an annoying attribution line to the bottom of options pages... but in a less annoying way?
		 */
		$out->addHTML( '<hr />' );
		$out->addHTML( wfMessage( 'skinshop-attribution' )->plain() . '<a href="http://www.lewiscawte.me">Lewis Cawte</a>.' );
	}

	public function addtoSWSkinShopHeader( $links ) {
		$links = Linker::link( SpecialPage::getTitleFor( 'SkinShop' ), 'Skin Shop' );
	}
}
