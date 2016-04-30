<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Stefan Kowal | You Cannot Win</title>
	<?php include("head.php"); ?>
  </head>

  <body>
	<div class="container-marketing" id="topcontainer">
		<div class="container">
			<?php include("header.php"); ?>
			<div class="row">
				<div class="col-md-12">
					<h1 style="color: white;">You Cannot Win is</h1>
					<h3 style="color: grey;"> a 3D, first-person puzzle game motivated by my frustrations
					with linear games. It was initially	an experiment to see if NetLogo 3D had the tools to
					allow for game development. NetLogo is typically used for
					complex simulations and research on models, but as it turns out, can be used to make games too.
					<i>You Cannot Win</i>  bears an obvious influence from the classic Deathstar trench from Star Wars, but as each
					puzzle is completed, it should become clear that the game is a conversation about player expectations
					and player freedom. Besides the typical obstructions found in the trench, there is text that seems
					to offer tutorial information, but actually condescends and leads the player astray from the puzzle's
					solutions. 
					</h3>
					<h3><a class="smallertitle">Check out this video to get a taste. The music was made and allowed for use by The Moderator. Support him <a href="http://cultclassicrecords.bandcamp.com/album/the-world-within">here.</a></a></h3>
					<div class="embed-responsive embed-responsive-4by3">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/jcZFg1S1Oj0" frameborder="0" allowfullscreen></iframe>
					</div>
					<h3 style="color: white">Lessons Learned</h3>
					<h3 style="color: white"><ul>
						<li>Scope. I had many more puzzles in mind but failed to implement them in time.</li>
						<li>How do you make solutions to puzzles fair?</li>
						<li>Illusion. You've got to work with what you've got.</li>
					</ul></h3>
				</div>
			</div>	
			
			<h3 style="color: grey;">The main idea with <i>You Cannot Win</i> is that you need to ignore what the "Narrator" --
			the entity that communicates with the player via text -- tells you. I wanted to develop a series of cascading puzzles
			that would be solved by doing the <i>opposite</i> of what the Narrator asks of you. The first puzzle seems to
			require that the player hit a target on a giant, approaching wall, but actually requires the player fly over the
			wall, thereby not playing the impossible game the Narrator has put before the player. I was only able to implement two of
			these "impossible puzzles", and my original goal was to have 2 or three more, each with a different way of defying the puzzles
			put before the player by the Narrator. I wasn't able to finish these puzzles in the time I had available, and it was an 
			important lesson in understanding what can be done in the scope of the project.
			</h3>
			 
			 <h3><a class="smallertitle">As I've previously discussed, each puzzle is embedded with another puzzle. The nested 
			 puzzles can be solved, but the puzzles presented by the Narrator are impossible, thus the title of the game. My frustration
			with linear games is that they give you a puzzle and rules that determine how you can play the game. I believe that games should be
			about how the player wants to play them, not what the developer forces upon the player. Speaking to that, the goal of <i>You Cannot Win</i>
			is for the player to break the impossible puzzles, thereby giving the player the power. Of course, it's a bit of a catch-22 because
			I've still programmed in solutions, but that's... beside the point. Anyway, the lesson I learned here is that developing puzzles is
			complex: solutions can't be so difficult that the player has no chance to figure out "that perfect thing" to succeed. It's a balancing act of
			good design (arguably not found in this game) that I have to strive for in future games. 
			 </a></h3>
			 
			 <h3 style="color: grey;">The trench in the game is an optical illusion: the player camera doesn't move forward at all. The 
			 walls also don't move but are given a color gradient that gives an impression of distance. The blocks and bits of space junk
			 are the only elements that move toward the player, and they too inherit the color gradient as they move forward. These pieces are randomly generated and once they
			 get behind the player are relocated to the front of the trench to begin their journey anew.
			 I realized early in development that to create an actual trench would be impossible: the length would consume too many
			 resources, and the ability to restart puzzles would require the player be transported around the trench, thereby creating a jarring experience.
			 I also placed tiny, white, stationary objects directly above the maze to give the appearance of stars far in the distance. I'd always known that
			 games trick the player into believing the world around them, but for the first time discovered first-hand the value of illusion.
			 </h3>
			
			<h1 style="color: white">What's next for this game?</h1>
			
			<h3 style="color: grey;">I have no further plans to recreate or modify the existing game, but the lessons I've learned related to
			puzzle design and narration have been things I'll carry with me for a while.</h3>
			 			
			<?php include("footer.php"); ?>
  </body>
 </html>