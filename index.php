<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

	$name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
	$number = mysqli_real_escape_string($conn, $_POST['number']);
	$msg = mysqli_real_escape_string($conn, $_POST['message']);

	$select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
	if(mysqli_num_rows($select_message) > 0){
	   $message[] = 'message sent already!';
	}else{

    mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}



?>

<!DOCTYPE html>
<html lang ="fr">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Netty Ayanda Graphiste et Consultante marketing</title>
	<meta name="description"content="Besoin d'un logo professionel ? Un site web mal référencé ? Des conseils en stratégie marketing ? Discutons de votre projet pour un tarif sur-mesure .">

	<!--font awesome cdn link -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

	<!-- aos css link  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- custom css file link -->
	<link rel="stylesheet" href="style.css">

     <!-- Boxicons CSS -->
	 <link href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" rel="stylesheet" />
	 <script src="script.js" defer></script>
   
	 <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
     <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
     <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
     <link rel="manifest" href="favicon/site.webmanifest">
     <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
     <meta name="msapplication-TileColor" content="#da532c">
     <meta name="theme-color" content="#ffffff">
	
</head>

<body onload="showModal()">

<?php

if(isset($message)){
	foreach($message as $message){
		echo'<div class= "message">
		<span>'.$message.'</span>	
		<i class="fas fa-times" onclick="this.parentElement.remove();"></i>
		</div>';
	}
}
	

?>


<!--header section starts-->

<header class="header">

	<div id="menu-btn" class="fas fa-bars"></div>

	<div class="user">
		<img src="images/Logo8.jpg"alt="">
	</div>
	

<nav class="navbar">
 <a href="#home" class="active">home</a>		
 <a href="#about">about</a>	
 <a href="#services">services</a>	
 <a href="#gallerie ">gallerie</a>	
 <a href="#contact">contact</a>	
</nav>

<div class="follow">

   <a href="https://www.instagram.com/nettyayanda8"target="-blank>
   <a href="#" class="fab fa-instagram"></a>

   <a href="https://www.linkedin.com/in/netty-ayanda-983a21278/"target="-blank>
   <a href="#" class="fab fa-linkedin"></a>

   <a href="https://www.behance.net/nettyayanda"target="-blank>
   <a href="#" class="fab fa-behance"></a>
</div>

</header>

<!--header section ends-->

<!-- home section starts-->

<section class="home" id="home">


	<div class="image" data-aos="fade-right">
	   <img src="images/img-1.jpg" alt="">
	</div>
 
	<div class="content">
	   <h3 data-aos="fade-up">Salut moi c'est Netty Ayanda !</h3>
	   <span data-aos="fade-up">Graphiste & Consultante marketing</span>
	   <p data-aos="fade-up">Des conseils personnalisés avec des tarifs sur-mesure.</p>
	   <a data-aos="fade-up" href="#about" class="btn">about</a>
	</div>

	
	<div class="video-container">
		<div class="overlay"></div>
		<video src="images/video8.mp4" autoplay muted loop preload="auto" data-keepplaying
			class="home-video-section">
		</video>
	
</section>

<!--home section ends-->


<!-- about section starts -->

<section class="about" id="about">

	<h1 class="heading" data-aos="fade-up"> <span>biographie</span> </h1>
 
	<div class="biographie">
 
	   <p data-aos="fade-up">Passioné de design et de dessin depuis très jeune , j'ai commencé à me perfectionner en autodidacte.En commençant par le bénévolat et en travaillant pendant 5 ans pour l'agence Publicis , cette expérience m'a encouragé à devenir indépendante afin de m'épanouir pleinement et de travailler pour un plus large public.</p>
 
	   <div class="bio">
		  <h3 data-aos="zoom-in"> <span>name :</span> Netty Ayanda </h3>
		  <h3 data-aos="zoom-in"> <span>email : </span> nettyayanda@gmail.com</h3>
		  <h3 data-aos="zoom-in"> <span>ville : </span> Nice, France</h3>
		  <h3 data-aos="zoom-in"> <span>contact : </span> 06 78 56 47 89</h3>
		  <h3 data-aos="zoom-in"> <span>age : </span> 28 ans </h3>
		  <h3 data-aos="zoom-in"> <span>experience : </span> 5 ans</h3>
	   </div>

	  

</div>

<div class="skills" data-aos="fade-up">

<h1 class="heading"> <span>skills</span> </h1>

<div class="progress">

<div class="bar" data-aos="fade-left"> <h3><span>Design Graphique</span> <span>95%</span></h3> </div>
<div class="bar" data-aos="fade-right"> <h3><span>Marketing Digital</span> <span>80%</span></h3> </div>
<div class="bar" data-aos="fade-left"> <h3><span>Seo</span> <span>65%</span></h3></div>
<div class="bar" data-aos="fade-right"> <h3><span>Wordpress</span> <span>80%</span></h3> </div>
</div>

</div>

<div class="edu-exp">
 
	<h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

	<div class="row">

		<div class="box-container">

            <h3 class="title"data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2020 - 2022 )</span>
               <h3>Digital Brand manager</h3>
               <p>Digital college -Paris La Défense</p>
            </div>

			<div class="box" data-aos="fade-right">
				<span>( 2017 - 2019 )</span>
				<h3>Chef de  projet marketing digital et communication</h3>
				<p>ECS European communication school Paris 16 ème</p>
			 </div>

			 <div class="box" data-aos="fade-right">
				<span>( 2014 - 2016 )</span>
				<h3>graphiste designer</h3>
				<p>Ecole Boulle enseignement supérieur Paris 12 ème </p>
			 </div>

			</div>

			<div class="box-container">
   
			   <h3 class="title" data-aos="fade-left">experience</h3>
   
			   <div class="box" data-aos="fade-left">
				  <span>( 2015 - 2020 )</span>
				  <h3>Graphiste Designer et chef de projet junior</h3>
				  <p>Publicis</p>
			   </div>

			   <div class="box" data-aos="fade-left">
				<span>( 2010 - 2013 )</span>
				<h3>Graphiste designer</h3>
				<p>Cornélius communication</p>
			 </div>
 
			 <div class="box" data-aos="fade-left">
				<span>( 2008 - 2009 )</span>
				<h3>Illustratrice</h3>
				<p>Edition petit coquin</p>
			 </div>
 
		  </div>
 
	   </div>
 
	</div>
 
 </section>
 
<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

	<h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>
 
	<div class="box-container">
 

	   <div class="box" data-aos="zoom-in">
		<i class="fas fa-paint-brush"></i>
		<h3>Design graphique</h3>
		<p>logo, charte graphique ,image de marque , support de communication , mise en page , catalogue, illustration</p>
	 </div>

	
	 <div class="box" data-aos="zoom-in">
		<i class="fas fa-chart-line"></i>
		<h3>seo marketing</h3>
		<p>Audit,stratégie de référencement, stratégie éditoriale,optimisation seo, reporting ,rédaction web, netlinking</p>
	 </div>

	 <div class="box" data-aos="zoom-in">
		<i class="fas fa-bullhorn"></i>
		<h3>Marketing digital</h3>
		<p>Gestion des réseaux sociaux , ligne éditoriale , e-réputation , montage video , campagne emailing , publicité payante </p>
	 </div>

	 <div class="box" data-aos="zoom-in">
         <i class="fab fa-wordpress"></i>
         <h3>wordpress</h3>
         <p>Création du thème,nom de domaine , hébergement,installation wordpress,configuration du thème , ajout des pluggins,création et ajout de contenu , optimisation seo </p>
      </div>
  </div>

</section>

<!-- services section ends -->

<!-- clients section starts  -->

<section class="clients" id="clients">

	<h1 class="heading" data-aos="fade-up"> <span>clients</span> </h1>
 
	<div class="box-container">

		<div class="box" data-aos="zoom-in">
			<img src="images/Logo 1.jpg" alt="">
			
		 </div>
   
		 <div class="box" >
			<img src="images/Logo2.png" alt="">
			
		 </div>

		 <div class="box" >
			<img src="images/Logo (3).png" alt="">
			
		 </div>

		 <div class="box" >
			<img src="images/Logo (4).png" alt="">
			
		 </div>

		 <div class="box" >
			<img src="images/Logo (5).png" alt="">
			
		 </div>

		 <div class="box" >
			<img src="images/Logo (6).png" alt="">
			
		 </div>
	</div>

	</section>

<!-- clients section ends -->

<!-- gallerie section starts -->

<section class="gallerie " id="gallerie">

	<h1 class="heading" data-aos="fade-up"> <span>gallerie</span> </h1>
 
<div class="container">

	<div class="image-container">
		<div class="image"><img src="images/portrait2.jpg" alt=""></div>
		<div class="image"><img src="images/portrait1.jpg" alt=""></div>
		<div class="image"><img src="images/triptyque.png" alt=""></div>
		<div class="image"><img src="images/duoimage1.png" alt=""></div>
		<div class="image"><img src="images/duoimage2.png" alt=""></div>
		<div class="image"><img src="images/portrait3.jpg" alt=""></div>
		<div class="image"><img src="images/portrait4.jpg" alt=""></div>
		<div class="image"><img src="images/animal.jpg" alt=""></div>
		<div class="image"><img src="images/horse.jpg" alt=""></div>
		
</div>

<div class="popup-image">
	<span>&times;</span>
    <img src="images/portrait2 (1).jpg" alt="">
</div>

</div>



<script>

document.querySelectorAll('.image-container img') .forEach(image=>{
	image.onclick =() =>{
		document.querySelector('.popup-image').style.display='block';
		document.querySelector('.popup-image img').src=image.getAttribute('src');
	}
});

document.querySelector('.popup-image span') .onclick = () =>
document.querySelector('.popup-image').style.display='none';


</script>


<!-- gallerie section ends -->


<!--contact section starts-->
<section class="contact" id="contact">

<h1 class="heading"> <span>contactez-moi</span> </h1>

<form action="" method="post">
	<div class="flex">
	   <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
	   <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
	</div>
	<input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
	<textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
	<input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
 </form>

 <div class="box-container">

	<div class="box" data-aos="zoom-in">
	   <i class="fas fa-phone"></i>
	   <h3>téléphone</h3>
	   <p>06 78 56 47 89</p>
	</div>

	<div class="box" data-aos="zoom-in">
		<i class="fas fa-envelope"></i>
		<h3>email</h3>
		<p>nettyayanda@gmail.com</p>
	 </div>


	 <div class="box" data-aos="zoom-in">
		<i class="fas fa-map-marker-alt"></i>
		<h3>adresse</h3>
		<p>Nice, France</p>
	 </div>

  </div>

</section>

<!--contact section ends-->

<!--cookie starts-->


<div id="modalbox">
	<img src="images/cookies.png" class="cookies">
	<p>We use cookies to optimize user experience and content.</p>
	<button type="button" onclick="closeModal()">Accept</button>
	<img src="images/close.png" class="close-icon"onclick="closeModal()">
</div>
<script>
	let modalBox=document.getElementById("modalbox");

  function showModal(){
	setTimeout (() =>{
		modalBox.style.display="block";

	},3000)
  }

function closeModal(){
	modalBox.style.display="none";
}



</script>

<!--cookie ends-->






<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Origami agence</span> </div>







<!--custom js file link-->
<script src="script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>





