<?php

/**
 * Main layout
 */

// Variables
$headings = ['Large', 'Medium', 'Small', 'Extra Small'];
$bodies = ['Large', 'Medium', 'Small'];

// Markup?>

<!doctype html>
<html class="no-js" lang="">
	<head>
		<meta charset="utf-8">
		<title>Front-end Starter Kit</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="/public/styles/index.css">
	</head>

	<body>
		<script>
			window["my-site"] = { components: [], state: {} };
		</script>

		<main id="main" class="main">
			<p>Hello, World</p>
			<?php foreach ($headings as $i => $h) : ?>
				<h<?= $i + 1 ?>>
					Heading <?= $h ?>
				</h<?= $i + 1 ?>>
			<?php endforeach; ?>
			<?php foreach ($bodies as $i => $b) : ?>
				<p>
					Body <?= $b ?>
				</p>
			<?php endforeach; ?>

			<section id="form">
				<form action="/public#form" method="get">
					<h3>Some heading about the form.</h3>
					<label for="name">Your name</label>
					<input
						required
						id="name"
						type="text"
						name="name"
						placeholder="George Costanza"
						value="<?= $_GET['name'] ?? '' ?>" />
					<label for="living">Your living situation</label>
					<input
						id="living"
						type="text"
						name="living"
						placeholder="At home w/ my parents."
						value="<?= $_GET['living'] ?? '' ?>" />
					<label for="employed">Are you currently employed?</label>
					<fieldset>
						<label for="yes">
							<input
								id="yes"
								type="radio"
								name="employed"
								value="Yes"
								<?= $_GET['employed'] ?? '' === 'Yes' ? 'checked' : '' ?> />
							Yes
						</label>
						<label for="no">
							<input
								id="no"
								type="radio"
								name="employed"
								value="No"
								<?= $_GET['employed'] ?? '' === 'No' ? 'checked' : '' ?> />
							No
						</label>
					</fieldset>
					<label for="message">How can we help?</label>
					<textarea
						id="number"
						name="message"
						placeholder="If I had known that sort of thing was frowned on here..."
						><?= $_GET['message'] ?? '' ?></textarea>
					<label for="pester">Can we call you at home?</label>
					<fieldset>
						<label for="yes">
							<input
								id="yes"
								type="checkbox"
								name="pester"
								value="Yes"
								<?= $_GET['pester'] ?? '' === 'Yes' ? 'checked' : '' ?> />
							Yes
						</label>
					</fieldset>
					<fieldset>
						<input type="reset" value="Cancel" />
						<input type="submit" value="Submit" />
					</fieldset>
				</form>
			</section>

			<script>
				window["the-store"].components.push({
					handle: "main",
					id: "main",
				});
			</script>
		</main>

		<script src="/public/scripts/index.js"></script>
	</body>
</html>
