<div id="contenido">
    <div class="container">
      <div class="divContenedor">
		<h2>LISTA DE RESTAURANTES</h2>
		<div class="divLabels">
			<label for="cboPaises">Paises</label>
		</div>
		<div class="divSelects">
			<select id="cboComunidades">
				<option value="0">Seleccione una comunidad autónoma</option>
				<?php
          echo '<option value="1">'.utf8_encode("Comunidad Valenciana").'</option>';
          echo '<option value="2">'.utf8_encode(Madrid).'</option>';
          echo '<option value="3">'.utf8_encode(Barcelona).'</option>';
				?>
			</select>
		</div>
		<br><br>
		<div class="divLabels">
			<label for="cboCiudades">Ciudades</label>
		</div>
		<div class="divSelects">
			<select id="cboCiudades">
				<option value="0">Seleccione una ciudad</option>
			</select>
		</div>
	</div>
    </div>

</div>
<div class="tags" >
  Introduce un restaurante de la zona
<input id="tags">
</div>

<section id="api_modal">
    <div id="details_restaurant" hidden>
        <div id="details">
            <div id="container">
              <div id="image"></div>
                Name: <div id="name"></div></br>
                Address: <div id="address"></div></br>
                Contact phone: <div id="phone"></div></br>
                Rating: <div id="rating"></div></br>
        </div>
    </div>
</section>
