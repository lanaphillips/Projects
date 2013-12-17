<div class="form-wrapper">
	<div id="contact-form">
		<form method="post" action="/forms/process_forms/contact-form.php">

			<div class="client-info">

				<h2>Appoinment Request</h2>

				<input type="text" name="Spam" class="spam" />

				<label for="firstName">First Name:</label>
				<input type="text" name="firstName" id="firstName" />

				<label for="lastName">Last Name:</label>
				<input type="text" name="lastName" id="lastName" />
				
				<label for="Tel">Tel:</label>
				<input type="text" name="Tel" id="Tel" />

				<label for="Email">Email:</label>
				<input type="email" name="Email" id="Email" required />

				<label for="Street">Street Address:</label>
				<input type="text" name="Street" id="Street" />

				<label for="cityStateZip">City, State &amp; Zip:</label>
				<input type="text" name="cityStateZip" id="cityStateZip" />
				
				<label for="Message">Comments:</label><br />
				<textarea name="Message" rows="5" cols="20" id="Message"></textarea>

			</div>

			<div class="pet-info">

				<h2>If Interested in a Grooming Visit</h2>

				<label for="Breed">Pet Breed:</label>
				<input type="text" name="Breed" id="Breed" />

				<label for="Weight">Pet Weight:</label>
				<input type="text" name="Weight" id="Weight" />

				<label for="gDate">Date of Last Grooming:</label>
				<input type="text" name="gDate" id="gDate" /> <!-- last grooming date -->
				
				<label for="Requests">Special Grooming Requests:</label><br />
				<textarea name="Requests" rows="5" cols="20" id="Requests"></textarea>

			</div>

			<div class="other-info">

				<h2>How Did You Find/Hear About Us</h2>
				<div class="radio-row">
					<div class="radio-wrapper"><input name="How" type="radio" value="Yellow Pages" /> </div>
					<div><label class="radio-label">Yellow Pages Publication</label></div>
				</div>
				<div class="radio-row">
					<div class="radio-wrapper"><input name="How" type="radio" value="Newspaper" /> </div>
					<div><label class="radio-label">Newspaper Advertisement</label></div>
				</div>
				<div class="radio-row">
					<div class="radio-wrapper"><input name="How" type="radio" value="Referral" /> </div>
					<div><label class="radio-label">Referral</label></div>
				</div>
				<div class="radio-row">
					<div class="radio-wrapper"><input name="How" type="radio" value="Saw Van" /> </div>
					<div><label class="radio-label">Saw Van In Neigborhood</label></div>
				</div>
				<div class="radio-row">
					<div class="radio-wrapper"><input name="How" type="radio" value="Web Search" /> </div>
					<div><label class="radio-label">Web Search</label></div>
				</div>
				<div class="radio-row">
					<div class="radio-wrapper"><input name="How" type="radio" value="Super Media" /> </div>
					<div><label class="radio-label">Super Media</label></div>
				</div>
				<div class="radio-row">
					<div class="radio-wrapper"><input name="How" type="radio" value="Other" /> </div>
					<div><label class="radio-label">Other</label></div>
				</div><br />

				<label for="Other">Other:</label>
				<textarea name="Other" rows="5" cols="20" id="Other"></textarea>
				<br />


			</div>

			<input type="submit" name="submit" value="Submit" class="submit-button" />

		</form>
	</div>
</div>