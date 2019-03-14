<article class="article">
  <!--
  <h1>Bricks Core</h1>
  <p>Bricks Core is an abstract application. It lets you build and add new modules absolutely indipendent eaeach other. The proccess is the same as build a wall.</p>
  -->
    <h1 id="title">Survey form</h1>
  		<form id="survey-form">
  		<p id="description">Let me know your favorite metal/rock music genre</p>
      <div class="left"><label id="name-label">* Name</label></div>
  		<div class="right"><input type="text" name="name" id="name" required placeholder="Enter your name"></div>
  		<div class="left"><label id="email-label">* Email</label></div>
  		<div class="right"><input type="email" name="email" id="email" required placeholder="Enter your name"></div>
  		<div class="left"><label id="number-label">* Age</label></div>
  		<div class="right"><input type="number" name="age" id="number" min="16" max="120" required placeholder="Enter your email"></div>
  			<div class="left"><label>How did you find out about rock/metal music?</label></div>
  			<div class="right"><select class="dropdown" id="dropdown">
  			<option disabled selected>Select an option</option>
  			<option value="1">Friend</option>
  			<option value="2">Radio</option>
  			<option value="3">TV</option>
  			<option value="4">Internet</option>
  			<option value="5">School</option>
  			<option value="6">Other</option>
        </select></div>
  		<div class="left"><label>Do you like it?</label></div>
  			<div class="right">
  			<input type="radio" name="radio-buttons" class="radio" value="1">Yes
  			<input type="radio" name="radio-buttons" class="radio" value="2">No
  			</div>
  		<div class="left"><label>Which genre you prefer?</label></div>
  			<div class="right"><ul style="list-style: none;" class="checkbox">
  				<li><input type="checkbox" name="checkbox" value="1">Alternative</li>
  				<li><input type="checkbox" name="checkbox" value="2">Black</li>
  				<li><input type="checkbox" name="checkbox" value="3">Death</li>
  				<li><input type="checkbox" name="checkbox" value="4">None</li></ul> 			
      </div>
      <div><textarea placeholder="Write additional info here.."></textarea></div>
  		<div><button id="submit">Submit</button></div>
  		<script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>
</article>