<article>
  <!--
  <h1>Bricks Core</h1>
  <p>Bricks Core is an abstract application. It lets you build and add new modules absolutely indipendent eaeach other. The proccess is the same as build a wall.</p>
  -->
  <h1 id="title">Survey form</h1>
  	<div><p id="description">Let me know your favorite music genre</p>
  	<form id="survey-form"></div>
  		<div><label id="name-label">* Name</label>
  		<input type="text" name="name" id="name" required placeholder="Enter your name">
  		<label id="email-label">* Email</label>
  		<input type="email" name="email" id="email" required placeholder="Enter your name">
  		<label id="number-label">* Age</label>
  		<input type="number" name="age" id="number" min="16" max="120" required placeholder="Enter your email"></div>
  			<div><label>How did you find out about rock/metal music?
  			<select id="dropdown">
  			<option disabled selected>Select an option</option>
  			<option>Friend</option>
  			<option>Radio</option>
  			<option>TV</option>
  			<option>Internet</option>
  			<option>School</option>
  			<option>Other</option>
  			</select></label></div>
  		<div><label>Do you like it?
  			<input type="radio" name="radio-buttons" value="1">Yes
  			<input type="radio" name="radio-buttons" value="2">No
  		</label></div>
  		<div><label>Which genre you prefer?
  			<input type="checkbox" name="checkbox" value="1">Alternative
  			<input type="checkbox" name="checkbox" value="2">Black
  			<input type="checkbox" name="checkbox" value="3">Death
  		</label></div>
  		
  		<textarea></textarea>
  		<button id="submit">Submit</button>
  		<script src="https://cdn.freecodecamp.org/testable-projects-fcc/v1/bundle.js"></script>
</article>