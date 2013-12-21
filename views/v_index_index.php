<!DOCTYPE html>

<html>

	<div class="drop_menu" id="signin_div" style="display: none;">
		<form id='signin_form'>
			<label for='name'>You are?</label>
			<input type='text' id='name' name='name'>
			<input type='submit' value='TAKE ME IN!'>
		</form>
		<span id='signin_results'>nada</span>
	</div>
	<div class="drop_menu" id="register_div" style="display: none;">
		<form id='reg_form'>
			<label for='name'>You are?</label>
			<input type='text' id='name' name='name'>
			<input type='submit' value='SIGN ME UP!'>
		</form>
		<span id='reg_results'>nada</span>
	</div>

	<br>
	<div id="title"><h1>DUCKS OF A DIFFERENT COLOUR</h1></div>
	
	<div id="patches">
		<div style="float: left; margin-left: 200px; margin-right: 20px;">COLOR KEY:: </div>
		<div class="patch" style="background-color: #FFFF11"></div>
		<div style="float: left;">HIDING SPOT</div>
		<div class="patch" style="background-color: #FF3333"></div>
		<div style="float: left;">NO DUCKS</div>
		<div class="patch" style="background-color: #CC88FF"></div>
		<div style="float: left;">2-DUCK CHAIN</div>
		<div class="patch" style="background-color: #99FF11"></div>
		<div style="float: left;">3-DUCK CHAIN</div>
		<div class="patch" style="background-color: #33CCFF"></div>
		<div style="float: left;">4-DUCK CHAIN</div>
		<div class="patch" style="background-color: #FFAA11"></div>
		<div style="float: left;">5-DUCK CHAIN</div>
	</div>

	<div id="frame">
		
		<div id="board">
			<div>
				<?php include 'squares.php'; ?>
			</div>

			<div>
				<br>
				<div id="message" style="clear: both;">&nbsp;</div>
				<br>

				<!-- Set buttons for starting and hiding -->
				<div id="buttons">
					<input type='button' id='start' value='START OVER'>
					<input type='button' id='suit' value='GET SUITED!'>
					<input type='button' id='reveal' value='START TIMER'>
				</div>
				<a href="/users/signup">SIGN UP</a>
			</div>
			<!-- 
			<div class="square open" id="e1"></div>
			<div class="square open" id="e2"></div>
			<div class="square open" id="e3"></div>
			<div class="square open" id="e4"></div>
			<div class="square open" id="e5"></div>
			-->

	 	</div>

		<div id='stats'>
			<div id='defense' style='font-size:13px;'>
				<br><br><br>
				<div><h3>Limey! These ducks are having a party!</h3>
					You can find them if you just poke around a little.
					Ducks, as you know, like to stay in single file lines with ducks of the same color.
					Pointing leftward-rightward, or upward-downward, but always a line,
					and always close together. But of course, ducks are polite creatures,
					and a line will happily break apart briefly, if it is to let another
					line of ducks through.</div><br>
				<div>Click <strong>GET SUITED!</strong> to start those ducks hiding!
					Then click a square to try and find them.</div><br>
					<div>And watch out, Ol' Bannigan is looking for them too!
						If he finds them all first, <em>he eats them.</em></div><br>
			</div>
			<div id="bann_number">How many ducks are still at the party?</div><div id='ducks_left'></div>
			<br>
			<div id="bann_status"></div>
			<div id="badelynge_hit"></div>
		</div>

	</div>

</html>