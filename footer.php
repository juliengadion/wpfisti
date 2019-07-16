<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fistiland
 */

?>
	</div><!-- #content -->

	<footer>
		<div class="container" id="NavFooter">

            <!-- Retour -->

            <div class="row">
                <div class="col-12">
                    <div class="retour">
                        <a href="#top"><i class="fas fa-chevron-circle-up"></i></a>
                    </div>
                </div>
            </div>

            <!-- Liens -->

            <div class="row">
                <div class="col-sm-4 p-0">
                    <h5 class="text-center">Information légales</h5>
                    <ul>
                        <li><a href="" class="Footerli">CGU</a></li>
                        <li><a href="" class="Footerli">RGPD</a></li>
                        <li><a href="" class="Footerli">Réglement interieur du Parc</a></li>
                        <li><a href="" class="Footerli">Réglement interieur des hôtels</a></li>
                    </ul>
                </div>

                <div class="col-sm-4 p-0" id="footermid">
                    <h5 class="text-center">Services</h5>
                    <ul>
                        <li><a href="" class="Footerli">Centre de secours</a></li>
                        <li><a href="" class="Footerli">Tarifs</a></li>
                        <li><a href="" class="Footerli">Contacts</a></li>
                    </ul>
                </div>

                <div class="col-sm-4 p-0">
                    <h5 class="text-center">A propos</h5>
                    <ul>
                        <li><a href="" class="Footerli">News letter</a></li>
                        <li><a href="" class="Footerli">Travailler à Fistiland</a></li>
                        <li><a href="" class="Footerli">Information sur l'entreprise</a></li>
                        <li><a href="" class="Footerli">Nos partenaires</a></li>
                    </ul>
                </div>
            </div>
            
            <p class="text-center mt-4">&#9400; Copyrights Web15Academy All rights reserved 2019</p>
        </div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
</html>
