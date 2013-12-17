<div class="form-wrapper">
	<div id="contact-form">
		<form method="post" action="/forms/process_forms/request-an-appointment.php">

			<input type="text" name="Spam" class="spam" />

			<label for="firstName">First Name:</label>
			<input type="text" name="firstName" id="firstName" />

			<label for="lastName">Last Name:</label>
			<input type="text" name="lastName" id="lastName" />
			
			<label for="Tel">Tel:</label>
			<input type="text" name="Tel" id="Tel" />

			<label for="Email">Email:</label>
			<input type="text" name="Email" id="Email" required />
			
			<label for="Message">Comments:</label><br />
			<textarea name="Message" rows="5" cols="20" id="Message"></textarea>

			<input type="submit" name="submit" value="Submit" class="submit-button" />

		</form>
	</div>
</div>