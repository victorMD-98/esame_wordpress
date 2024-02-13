<?php
/**
 * Displays footer site info
 *
 * @package Inspiro
 * @subpackage Inspiro_Lite
 * @since Inspiro 1.0.0
 * @version 1.0.0
 */

?>
<div class="site-info">
	<?php
	if ( function_exists( 'the_privacy_policy_link' ) ) {
		the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
	}
	?>
	<span class="copyright">
		
		<div>
			<p>
				<a href="" target="_blank">
					Condizioni generali
				</a>
			</p>
			<p>
				<a href="" target="_blank">
					Note Legali
				</a>
			</p>
			<p>
				<a href="" target="_blank">
					Dati Personali
				</a>
			</p>
			<p>
				<a href="" target="_blank">
					Diritto di recesso
				</a>
			</p>
		</div>
		<span>
			
		</span>
		<div>
			<p>
				<a href="" target="_blank">
				Area Self
				</a>
			</p>
			<p>
				<a href="" target="_blank">
				Helpcenter
				</a>
			</p>
			<p>
				<a href="" target="_blank">
				Corporate Fitness
				</a>
			</p>
			<p>
				<a href="" target="_blank">
				Lavora con noi
				</a>
			</p>
		</div>
	</span>
</div><!-- .site-info -->
