<?php
/**
 * The main template file
 */

get_header();
?>

<main>


<div class="banner">
<div class="banner_layer">
	<div class="banner_content">

		<div class="banner_reference">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/images/epitech_moto.png" alt="Epitech leitmotiv">
			<p>
				L'école de référence de l'expertise informatique forme depuis 20 ans les experts qui dessineront le monde de demain.
			</p>
			<ul>
				<li>Une école accessible à toutes et à tous après le baccalauréat</li>
				<li>Une pédagogie active unique qui forge des personnalités</li>
				<li>Un écosystème international</li>
				<li>Des carrières à fort impact</li>
			</ul>
		</div>

		<div class="banner_discover">
			<div class="banner_discover_layer">
				<p>DÉCOUVREZ NOTRE CAMPUS AU COEUR DE L'AFRIQUE</p>

			<button class="banner_discover_meet"><a href="">VENEZ NOUS RENCONTRER</a></button>
				<button class="banner_discover_experience">
					<a href="">VIVEZ L'EXPÉRIENCE EPITECH</a>
				</button>
			</div>
		</div>

	</div>
</div>
</div>


<div class="profils">
	<h4> { A chaque profil sa formation } </h4>
	<div class="profils_cards">
		<div class="profil_bachelor_card">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/bachelor.jpg" alt="">
		   <div class="card_content">
				<h5><a href="">Bachelor</a></h5>
				<h5>Formation post-bac en 3 ans</h5>
				<p>
					En 3 années, Epitech transforme votre passion pour l'informatique en une expertise reconnue. Vous devenez un professionnel capable de s'adapter aux défis du marché du travail et à même d'impacter positivement le monde.
				</p>
				<div class="card_buttons">
				<button class="doc_bachelor_btn"><i class="fa-solid fa-file-arrow-down"></i>&nbsp;DOCUMENTATION</button>
					<button class="candidature_bachelor_btn" >CANDIDATURE</button>
				</div>
		   </div>
		</div>
		<div class="profil_master_card">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/master.jpg" alt="">
			<div class="card_content">
				<h5><a href="">Master</a></h5>
				<h5>Bac +2 ou Bac +3 en alternance</h5>
				<p>
					Le MSc Pro d'Epitech est en tremplin vers le monde de l'entreprise. Cette formation en rythme alterné, en 2 ou 3 ans porte sur des disciplines très variées et conduit à une qualification experte en Innovation technologique
				</p>
				<div class="card_buttons">
					<button class="doc_master_btn"><i class="fa-solid fa-file-arrow-down"></i>&nbsp;DOCUMENTATION</button>
					<button class="candidature_master_btn">CANDIDATURE</button>
				</div>
			</div>
		</div>
		<div class="profil_coding_card">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/coding.jpg" alt="">
		   <div class="card_content">
				<h5><a href="">Coding Academy</a></h5>
				<h5>Devenez développeur et boostez votre carrière</h5>
				<p>
					Vous avez tout au moins un Bac +2, ou vous êtes en reconversion professionnelle ? La Coding Academy est la solution adaptée pour vous. Devenez développeur Full Stack en 22 semaines et (re) construisez votre carrière.
				</p>
				<div class="card_buttons">
					<button class="doc_coding_btn"><i class="fa-solid fa-file-arrow-down"></i>&nbsp;DOCUMENTATION</button>
					<button class="candidature_coding_btn" >CANDIDATURE</button>
				</div>
		   </div>
		</div>
	</div>
</div>


</main>


<?php; ?>

<?php

