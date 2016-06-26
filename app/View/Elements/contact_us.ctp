<div id="modal1" class="modal_div"> <!-- скрытый див с уникальным id = modal1 -->
	<span class="modal_close"></span>
	<span class="title_z">CONTACT US</span>
    <form method="POST" name="form1" action="/pages/contactus" >
		<input  name="data[Page][name]" id="name" maxlength="200" class="modal_f" type="text" size="1"  required placeholder="Name..."/>
		<input   name="data[Page][phone]" id="user_phone" maxlength="200" class="modal_f " type="text" size="1"  required placeholder="Number..."/>
		<button type="submit" name="submit1" >Send</button>
	</form>
</div>
<div id="overlay"></div>

<div id="modal2" class="modal_div"> <!-- скрытый див с уникальным id = modal1 -->
	<span class="modal_close"></span>
	<span class="title_z">Give feedback</span>
        <form method="POST" name="form1" action="/reviews/give_feedback" >
			<input  name="data[Review][title]" id="name" maxlength="200" class="modal_f" type="text" size="1"  required placeholder="Name..."/>
			<input   name="data[Review][website]"  maxlength="200" class="modal_f " type="text" size="1"  required placeholder="Site..."/>
			<textarea   class="modal_f" required placeholder=" Text..." name="data[Review][body]"> </textarea>
			<button type="submit" name="submit1" >Send</button>
		</form>
	</div>
	<div id="overlay"></div>

<div id="modal3" class="modal_div"> <!-- скрытый див с уникальным id = modal1 -->
	<span class="modal_close"></span>
	<span class="title_z">ORDER</span>
    <form method="POST" name="form1" action="/pages/contactus" >
		<input  name="data[Page][name]" id="name" maxlength="200" class="modal_f" type="text" size="1"  required placeholder="Name..."/>
		<input   name="data[Page][phone]" id="user_phone" maxlength="200" class="modal_f " type="text" size="1"  required placeholder="Number..."/>
		<button type="submit" name="submit1" >Send</button>
	</form>
</div>
<div id="overlay"></div>