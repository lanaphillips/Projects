<div id="gift-certificate-form">
	<form method="post" action="/forms/process_forms/gift-certificate-form.php">

		<input type="text" name="Spam" class="spam" />

		<div class="purchaser-info">

			<h2>Your Contact Info</h2>

			<label for="firstName">First Name:</label>
			<input type="text" name="firstName" id="firstName" />

			<label for="lastName">Last Name:</label>
			<input type="text" name="lastName" id="lastName" />

			<label for="Phone">Phone:</label>
			<input type="text" name="Phone" id="Phone" />

			<label for="Email">Email: *</label>
			<input type="email" name="Email" id="Email" required />

		</div>

		<div class="recipient-info">

			<h2>Recipient's Info</h2>

			<label for="rName">Recipient's Name:</label>
			<input type="text" name="rName" id="rName" /><!-- r = recipient -->

			<label for="Amount">Gift Amount:</label>
			<input type="text" name="Amount" id="Amount" />

			<label for="Street">Street Address:</label>
			<input type="text" name="Street" id="Street" />

			<label for="cityStateZip">City, State &amp; Zip:</label>
			<input type="text" name="cityStateZip" id="cityStateZip" />

		</div>

		<input type="submit" name="submit" value="Submit" class="submit-button" />

		<p>* Required</p>

	</form>
</div>