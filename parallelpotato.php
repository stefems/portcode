<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Stefan Kowal | Parallel Potato</title>
	<?php include("head.php"); ?>
  </head>

  <body>
	<div class="container-marketing" id="topcontainer">
		<div class="container">
			<?php include("header.php"); ?>
			<div class="row">
				<div class="col-md-12">
					<h1 style="color: white;">Parallel Potato is</h1>
					<h3 style="color: grey;">a game I developed in Unity in reaction to
					the Dark Souls franchise of video games: I wanted a game in which
					the player didn't die. Ever. In this game the player controls a 
					potato (a red rectangle in the prototype)
					bestowed with the legendary trait of quantum immortality. (In
					this universe "people" are animate vegetables, fruits, potatoes and such.)
					The player, if in a dangerous scenario, can see all of their different
					selves in the many different possible universes, and if they incur a life-threatening
					injury will "pop" into a different self that has not sustained such injury. Thus the
					immortality, and thus the idea of parallel versions of oneself.
					</h3>
					<h3><a class="smallertitle">Check out this video to get a sense of what quantum
					immortality means in the world of Parallel Potato. (Video is in the process of being created.)</a></h3>
					
					<h3 style="color: white">Lessons Learned</h3>
					<h3 style="color: white"><ul>
						<li>Fluid movement in a platformer is critical.</li>
						<li>Prototype the core mechanic ASAP, or at least on paper for a concrete understanding.</li>
						<li>Have others play-test your game. It's not as fun as you think it is.</li>
					</ul></h3>
				</div>
			</div>	
			
			<h3 style="color: grey;">The prototype was a success in many ways, but mostly
			in terms of learning what <i>not</i> to do. An unexpected hurdle in developing this game was
			implementing player movement, specifically in terms of jumping. A design question I asked myself was
			whether or not the player should be able to influence their movement in midair. 
			I answered this with a firm "no", and a decision as simple as that greatly altered
			the feel of the game. Platforming requied and momentum, and failure in a
			simple jump could easily lead to frustration. This didn't pair well with a poor friction system that prevented
			the player from changing direction or jumping for a fraction of a second upon landing. When I developed
			this game I thought too much about the complicated "quantum immortality" and neglected to implement
			simple, fluid movement. Next time the fundamentals are going to be ironed out first and foremost.
			</h3>
			 
			 <h3><a class="smallertitle">I had an idea of what I wanted for the "quantum immortality" gameplay,
			 but an idea is always simpler in your head than it is when implemented. In developing this critical
			 gameplay mechanic I realized how little I actually understood the idea I had. In the beginning I was forced to scrap
			 the idea that the parallel versions would be with the player at all times. This was because the different versions would
			 be on a time delay that rendered them useless when following the player through time-critical jumps (moving patforms).
			 I also gave the player the ability to manually swap between their different versions, but this resulted
			 in swaps into versions that were doomed, and if enough versions were doomed, all versions would die and the player could
			 not perform a swap and the game would end. My lesson: play out the mechanic on paper, <i>extensively.</i> </a></h3>
			 
			 <h3 style="color: grey;">Surely you can be your own tester, right? Wrong. Always wrong. I didn't realize
			 the significance of the design mistakes I made until I saw others struggle. Players won't play your
			 game in the way you expect them to, and I also discovered interesting emergent gameplay that I would never have
			 taken advantage of had I not seen players test the game.</h3>
			
			<h1 style="color: white">What's next for this game?</h1>
			
			<h3 style="color: grey;">Parallel Potato is my baby. I have ideas for lore, for environments, for
			puzzles, for characters, for the player's story, and for better ways to implement the mechanics.
			I think about things I'd like to add to this game on a daily basis, but I'd like to get more experience before I
			undergo this important project. If you'd like to talk to me about what else I learned and how I developed the game, visit
			the <a href="about.php">about</a> page to get into contact with me.</h3>
			 			
			<?php include("footer.php"); ?>
  </body>
 </html>