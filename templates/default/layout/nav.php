<nav role="navigation">
	<ul class="navbar" id="mainNav">
		<li>
			<a href="<?PHP echo SITE_URL_ROOT;?>quienessomos"<?php if($current_sec == "quienessomos"){echo ' class="selected"';}?>>
				Quiénes Somos
			</a>
		</li>
		<li>
			<a href="#"<?php if($current_sec == "programas"){echo ' class="selected"';}?> id="algo">
				Programas
			</a>
			<ul id="colapsar">
				<li>
					<a href="<?PHP echo SITE_URL_ROOT;?>programas/chivassocial">
						ChivaSocial
					</a>
				</li>
				<li>
					<a href="<?PHP echo SITE_URL_ROOT;?>programas/suenachivas">
						Sueña Chivas
					</a>
				</li>
				<li>
					<a href="<?PHP echo SITE_URL_ROOT;?>programas/undiaconchivas">
						Un Día con Chivas
					</a>
				</li>
				<li>
					<a href="<?PHP echo SITE_URL_ROOT;?>programas/juegalimpio">
						Jugando Limpio
					</a>
				</li>
				<li>
					<a href="<?PHP echo SITE_URL_ROOT;?>programas/algomaravilloso">
						Haz Algo Maravilloso
					</a>
				</li>
				<li>
					<a href="<?PHP echo SITE_URL_ROOT;?>programas/levantalamano">
						Levanta la Mano
					</a>
				</li>
				<li>
					<a href="<?PHP echo SITE_URL_ROOT;?>programas/educare">
						Educare Ciudad Juárez
					</a>
				</li>
				<li>
					<a href="<?PHP echo SITE_URL_ROOT;?>programas/reforestacion">
						Reforestación
					</a>
				</li>
				<li>
					<a href="<?PHP echo SITE_URL_ROOT;?>programas/apadrinamiento">
						Apadrinamiento
					</a>
				</li>
				<li>
					<a href="<?PHP echo SITE_URL_ROOT;?>programas/donemoslatidos">
						Donemos latidos
					</a>
				</li>
			</ul>
		</li>				
		<li>
			<a href="<?PHP echo SITE_URL_ROOT;?>vision"<?php if($current_sec == "vision"){echo ' class="selected"';}?>>
				Visión
			</a>
		</li>
		<li>
			<a href="<?PHP echo SITE_URL_ROOT;?>contacto"<?php if($current_sec == "contacto"){echo ' class="selected"';}?>>
				Contáctanos
			</a>
		</li>
		<li>
			<a href="<?PHP echo SITE_URL_ROOT;?>blog"<?php if($current_sec == "blog"){echo ' class="selected"';}?>>
				Blog
			</a>
		</li>
	</ul>	
</nav>