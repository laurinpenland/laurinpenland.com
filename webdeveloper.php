<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<title>Web Developer</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Web developer portfolio for Laurin Penland." />
		<title>Laurin Penland</title>
		<link href="styles/stylesheet.css" type="text/css" rel="stylesheet" />
		<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Cutive+Mono&family=Major+Mono+Display&display=swap" rel="stylesheet">
	</head>



  <body class="web-developer">
	<?php
		include('includes/header.php');
	?>
    <div class="name web-developer-name">
      <h1>Laurin Penland</h1>
    </div>

	<article>
	  <h2>Web Developer</h2>

	  <p>I love to build accessible, responsive, and beautiful websites.</p>

	  <p>Much of my work has been related to libraries and archival collections. I currently work as a web developer for the TriCollege Consortium (Bryn Mawr, Haverford, and Swarthmore libraries). One of my recent projects was to improve the discoverability of special collections materials by integrating ArchivesSpace with Alma. If you're curious about the project, you can watch a <a href="https://www.youtube.com/watch?v=yxJ_vVuqS-4"> webinar </a> on the ArchivesSpace YouTube channel.</p>

	  <p>I have experience working on sites that use a variety of frameworks including Ruby on Rails, MEAN stack, the LAMP stack, and Drupal. Future goals include becoming more expert at these frameworks, writing more tests (including creating automated accessibility tests), and learning more about DevOps tools.</p>

	  <h2>Fluencies</h2>
	  <ul class="fluencies">
		<li>Programming languages: HTML5, CSS3, JavaScript, Ruby, TypeScript, SQL, PHP, Python</li>
		<li>Databases: Access, Oracle, mySQL, MongoDB, PostgreSQL</li>
		<li>Frameworks: Rails, MEAN stack (MongoDB, Node.js, Angular, and Express), LAMP stack, Drupal</li>
		<li>Operating systems: Mac, Microsoft, Linux, Unix</li>
		<li>Other: Git, GitHub, GitLab, Jira, Docker, AdobeXD, Photoshop, Postman, RSpec, axe DevTools</li>
	  </ul>

    <h2>Portfolio</h2>
    <p>You can view a few of my personal projects on <a href="https://github.com/laurinpenland">GitHub.</a></p>
	<h3>Finding Family in Archives at Duke</h3>
	<p>For a capstone project in an advanced CSS and HTML class, I created <a href="https://laurinpenland.github.io/finding-family-duke-archives.io/">a website that helps people research their ancestors in the archives at Duke</a>. The website is meant to be warm and welcoming, especially for those embarking on their search for the first time. The design is inspired by photographs and letters found at the library.</p>
	<p><a href="https://github.com/laurinpenland/finding-family-duke-archives.io">View the repository on GitHub.</a></p>


	<figure class="portfolio-image">
	  <a href= "https://github.com/laurinpenland/finding-family-duke-archives" target="_blank">
	  <img src="./images/FindingFamily.jpg" class="portfolio-image" alt="home page for Finding Family in Duke Archives website"/>
	  </a>
	  <figcaption>Website that helps researchers find family members in the archives at Duke.</figcaption>
    </figure>
	<h3>Archival Supplies</h3>
	<p>For a capstone project in advance scripting and markup, I built a website using the MEAN (MongoDB, Express, Angular, and Node.js) stack. I used Express to create an API, and the site includes reactive forms, behavior subjects, and observables. For the design, I used Bootstrap, Angular Material, and custom CSS. The purpose of the site is to facilitate supply ordering.</p>
	<p><a href="https://github.com/laurinpenland/archival-supplies">View the repository on Github.</a></p>
	<figure class="portfolio-image">
	  <a href="https://github.com/laurinpenland/archival-supplies" target="_blank">
		<img src="./images/mean-stack-website.png" class="portfolio-image" alt="home page for Archival Supplies website"/>
	  </a>
	  <figcaption>Website for archival products used by the Rubenstein Library.</figcaption>
    </figure>

  </article>


  <footer>
	<p>Website created by Laurin Penland. <a href="mailto:laurinpenland@laurinpenland.com">Contact Laurin.</a></p>
	<p>The background photograph is an altered digital image of "Equivalents," 1924, by Alfred Stieglitz, courtesy of the <a href="http://www.getty.edu/art/collection/objects/62747/alfred-stieglitz-equivalents-american-1924/" target="_blank"><i>Getty's Open Content Program</i></a>.</p>
	</footer>
  </body>

</html>
