<?php include('inc/head.php'); ?>
<body>
	<div class="container">
		<div class="page">
			<?php include('inc/sidebar.php'); ?>
			<div class="content">
				<div class="content_top">
					<div class="inner">
						<div class="btn_group">
							<a href="#" class="btn">de/produkte</a>
						</div>
						<div class="btn_group">
							<a href="#" class="btn blue">Save</a>
							<a href="#" class="btn">Save preview</a>
							<a href="#" class="btn">view page</a>
						</div>
					</div>
				</div>
				<div class="tabs_nav" data-connect="1">
					<div class="tab_nav">Content</div>
					<div class="tab_nav">Meta</div>
					<div class="tab_nav">Settings</div>
				</div>
				<div class="content_main container_scroll">
					<div class="inner">
						<div class="tabs" data-connect="1">
							<div class="tab">
								<h1>Headline 1</h1>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
								<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
								<div class="field_row">
									<label for="textfield">Textfield</label>
									<div class="field">
										<input type="text" name="textfield" id="textfield" />
									</div>
									<div class="clear"></div>
								</div>
								<div class="field_row">
									<label for="selectbox">Selectbox</label>
									<div class="field">
										<select name="selectbox" id="selectbox">
											<option value="0">-- please select --</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
										</select>
									</div>
									<div class="clear"></div>
								</div>
								<div class="field_row">
									<label for="checkbox">Checkbox</label>
									<div class="field">
										<input type="checkbox" name="checkbox" id="checkbox" value="1" />
									</div>
									<div class="clear"></div>
								</div>
								<div class="field_row">
									<div class="label">Checkbox group</div>
									<div class="field">
										<input type="checkbox" name="checkbox_g1" id="checkbox_g1" value="1" />
										<label for="checkbox_g1">Checkbox 1</label>
										<input type="checkbox" name="checkbox_g2" id="checkbox_g2" value="1" />
										<label for="checkbox_g2">Checkbox 2</label>
										<input type="checkbox" name="checkbox_g3" id="checkbox_g3" value="1" />
										<label for="checkbox_g3">Checkbox 3</label>
										<div class="clear"></div>
									</div>
									<div class="clear"></div>
								</div>
								<div class="field_row">
									<div class="label">Radio group</div>
									<div class="field">
										<input type="radio" name="radio" id="radio_g1" value="1" />
										<label for="radio_g1">Radio 1</label>
										<input type="radio" name="radio" id="radio_g2" value="2" />
										<label for="radio_g2">Radio 2</label>
										<input type="radio" name="radio" id="radio_g3" value="3" />
										<label for="radio_g3">Radio 3</label>
										<div class="clear"></div>
									</div>
									<div class="clear"></div>
								</div>
								<div class="field_row">
									<label for="editor1">Editor 1</label>
									<div class="field">
										<textarea name="editor1" id="editor1" class="editor">Das ist ein Test</textarea>
									</div>
									<div class="clear"></div>
								</div>
								<div class="field_row">
									<label for="editor2">Editor 2</label>
									<div class="field">
										<textarea name="editor2" id="editor2" class="editor">Das ist ein Test</textarea>
									</div>
									<div class="clear"></div>
								</div>
								<div class="field_row">
									<label for="textarea">Textarea</label>
									<div class="field">
										<textarea name="textarea" id="textarea">Das ist ein Test</textarea>
									</div>
									<div class="clear"></div>
								</div>
							</div>
							<div class="tab">
								<h3>Headline 3</h3>
								<ul>
									<li>Lorem ipsum dolor sit amet</li>
									<li>Consetetur sadipscing elitr</li>
									<li>Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</li>
									<li>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</li>
									<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</li>
								</ul>
							</div>
							<div class="tab">
								<h3>Headline 3</h3>
								<ol>
									<li>Lorem ipsum dolor sit amet</li>
									<li>Consetetur sadipscing elitr</li>
									<li>Sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat</li>
									<li>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</li>
									<li>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</li>
								</ol>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php include('inc/footer.php'); ?>
</body>
</html>