
<script>
	import { format, formatDistance, formatRelative, subDays } from 'date-fns'
	import { onMount } from "svelte";
	import { text } from "svelte/internal";
	import Card from './components/Card.svelte'
	// import logging from './Login.js'
	
	

	let hue = 0;
	
	let active = false
	let jobs = [];
	let firstname = '', email = '', password = ''
	
	onMount(async () => {
		try{
		const response = await fetch('http://localhost:8899/api/v1/jobs');
		const data = await response.json();
		console.log(data);
		jobs = data.jobs;
		} catch(error){
			console.log(error)
		}
		
	});
	
	const submit = async () =>{
		await fetch('http://localhost:8899/api/register', {
			method: 'POST',
			headers: {'Content-Type': 'application/json'},
			credentials:'include',
			body:JSON.stringify({
				firstname,
				email,
				password
			})

		});
		await goto('/login.svelte');
	}
	var allowCrossDomain = function(req, res, next) {
    res.header('Access-Control-Allow-Origin: True', 'http://localhost:8899');
    res.header('Access-Control-Allow-Credentials', true);
    res.header('Access-Control-Allow-Methods', 'GET,PUT,POST,DELETE');
    res.header("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Type, Accept");
    next();
	};
	
	//  document.querySelector("#login").addEventListener("click",function(){
	//  	document.querySelector(".popup").classList.add("active");
	//  });
	
	
	//  document.querySelector(".popup .close-btn").addEventListener("click",function(){
	//  	document.querySelector(".popup").classList.remove("active");
	//  });
	
	
	
</script>



<main>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
	<h1 id="Header">JOBAZA 
		<button  id="login" on:click="{() => active = !active}">Zaloguj</button>
		
	 </h1>
	 
	 <div  class="popup" class:active={active}>
		 <div class="close-btn" on:click="{() => active = !active}">&times;</div>
		 <div class="form" on:submit|preventDefault={submit}>
			<h2>Login</h2>
			<div class="form-element">
				<label for="name">Name</label>
				<input bind:value={firstname} type="text" id="name" placeholder="Enter Name">
			</div>
			<div class="form-element">
				<label for="email">Email</label>
				<input bind:value={email} type="text" id="email" placeholder="Enter Email">
			</div>
			<div class="form-element">
				<label for="password">Password</label>
				<input bind:value={password} type="password" id="password" placeholder="Enter Password">
			</div>
			<div class="form-element">
				<input type="checkbox" id="remember-me">
				<label for="remember-me">Remember me</label>
			</div>
			<div class="form-element">
				<button on:click={submit} type="submit">Sign in</button>
			</div>
			<div class="form-element">
				<a href="#">Forgot Password?</a>
			</div>
		 </div>
	 </div>
	
	
	<!-- {#each jobs as job}
    <div class="card-div">
		<div class="card">
			<div class="card-image">{job.name}</div>
			<div class="card-text">
				<span class="date">4 days ago</span>
				<h2>Lorem ipsum dolor sit amet.</h2>
			</div>


			<div class="card-image">Lorem ipsum dolor sit amet.</div>
		</div>
	</div>
    {/each} -->
	
	<div class="nav-bar">
		<a class="active" href="#home"></a>
		<a href="#wyszukaj" class="button">Wyszukaj</a>
		<a href="#Ogłoszenia" class="button">Ogloszenia</a>
		<a href="#Pracodawcy" class="button">Pracodawcy</a>
		<a href="#Pomoc" class="button">Pomoc</a>
	</div>
	
	<div class="card-div">
		{#each jobs as job}
		<div class="card">
			<div class="card-image">{job.name}</div>
			<div class="card-text">
				<span class="date">{formatDistance(new Date(job.created_at), new Date(), { addSuffix: true })} from {job.city}</span>
				<h2>Lorem ipsum dolor sit amet.</h2>
				<p>{job.wage / 100} zł </p>
			</div>


			<div class="card-stats">
				<div class="stat">
					<div class="value">4m</div>
					<div class="type">read</div>
				</div>
				<div class="stat border">
					<div class="value">243</div>
					<div class="type">views</div>
				</div>
				<div class="stat">
					<div class="value">124</div>
					<div class="type">comments</div>
				</div>
			</div>
		</div>
		{/each}
		<!-- <div class="card">
			<div class="card-image"> </div>
			<div class="card-text">
				<span class="date">4 days ago</span>
				<h2>Lorem ipsum dolor sit amet.</h2>
				<p>Lorem ipsum dolor sit amet.</p>
			</div>


			<div class="card-stats">
				<div class="stat">
					<div class="value">4m</div>
					<div class="type">read</div>
				</div>
				<div class="stat border">
					<div class="value">243</div>
					<div class="type">views</div>
				</div>
				<div class="stat">
					<div class="value">124</div>
					<div class="type">comments</div>
				</div>
			</div>
		</div> -->
		<!-- <div class="card">
			<div class="card-image">Lorem ipsum dolor sit amet. </div>
			<div class="card-text">
				<span class="date">4 days ago</span>
				<h2>Lorem ipsum dolor sit amet.</h2>
				<p>Lorem ipsum dolor sit amet.</p>
			</div>


			<div class="card-stats">
				<div class="stat">
					<div class="value">4m</div>
					<div class="type">read</div>
				</div>
				<div class="stat border">
					<div class="value">243</div>
					<div class="type">views</div>
				</div>
				<div class="stat">
					<div class="value">124</div>
					<div class="type">comments</div>
				</div>
			</div>
		</div>
		<div class="card">
			<div class="card-image">Lorem ipsum dolor sit amet. </div>
			<div class="card-text">
				<span class="date">4 days ago</span>
				<h2>Lorem ipsum dolor sit amet.</h2>
				<p>Lorem ipsum dolor sit amet.</p>
			</div>


			<div class="card-stats">
				<div class="stat">
					<div class="value">4m</div>
					<div class="type">read</div>
				</div>
				<div class="stat border">
					<div class="value">243</div>
					<div class="type">views</div>
				</div>
				<div class="stat">
					<div class="value">124</div>
					<div class="type">comments</div>
				</div>
			</div>
		</div> -->
	</div>
	
	
</main>



<style>
	:global(body) {
		background-color: #363732;
		align-items: center;
		overflow:hidden;
		box-sizing: border-box;
	}
	.active:hover{
		color: #eee;
	}
	
	#login{
		font-size: 20px;
		float:right;
		cursor: pointer;
		border-radius: 5px;
	}
	.popup{
		position: absolute;
		top:50%;
		left:50%;
		opacity: 0;
		transform: translate(-50%,-50%) scale(1.25);
		width: 380px;
		padding:20px 30px;
		background: #fff;
		box-shadow: 2px 2px 5px 5px rgba(0,0,0,0.15);
		border-radius: 10px;
		transition:
		top 2000ms ease-in-out 200ms,
		opacity 0ms ease-in-out 200ms,
		transform 0ms ease-in-out 200ms;
	}
	.popup.active{
		top:50%;
		opacity: 1;
		transform: translate(-50%,-50%) scale(1);
		transition:
		top 500ms ease-in-out 200ms,
		opacity 500ms ease-in-out 200ms,
		transform 500ms ease-in-out 200ms;
	}
	.popup .close-btn{
		position: absolute;
		top:10px;
		right: 10px;
		width: 15px;
		height: 15px;
		background: #888;
		color: #eee;
		text-align: center;
		line-height: 15px;
		border-radius: 15px;
		cursor: pointer;
	}
	.popup .form h2{
		text-align: center;
		color: #222;
		margin: 10px 0px 20px;
		font-size: 25px;
	}
	.popup .form .form-element{
		margin: 15px 0px;
	}
	.popup .form .form-element label{
		font-size: 14px;
		color:#222;
	}
	.popup .form .form-element input[type="text"],
	.popup .form .form-element input[type="password"],
	.popup .form .form-element input[type="name"]{
		margin-top: 5px;
		display: block;
		width: 100%;
		padding: 10px;
		outline: none;
		border:1px solid #aaa;
		border-radius: 5px;
	}
	.popup .form .form-element input[type="checkbox"]{
		margin-right: 5px;
	}
	.popup .form .form-element button{
		width: 100%;
		height: 40px;
		border:none;
		outline: none;
		font-size: 16px;
		background: #222;
		color: #363732;
		border-radius: 10px;
		cursor: pointer;
	}
	.popup .form .form-element a{
		display: block;
		text-align: right;
		font-size: 15px;
		color: #363732;
		text-decoration: none;
		font-weight: 600;
	}


	.card-div{
		width: 100vw;
		height: 50vh;
		color: #53D8FB;
		display: flex;
		justify-content: center;
		align-items: center;
		overflow: hidden;
		
	}
	
	.card{
		display: grid;
		grid-template-columns: 300px;
		grid-template-rows: 210px;
		grid-template-areas: "image" "text" "stats";
		margin: 20px;

		font-family: 'Fredoka One';
		border-radius: 18px;
		background: #f3f3f3;
		box-shadow: 5px 5px 15px rgba(0,0,0,0.9);
		text-align: center;

		transition: 0.5s ease;
		cursor: pointer;
	}
	.card-image{
		grid-area: image;
		border-top-left-radius: 15px;
		border-top-right-radius: 15px;
		background-size: cover;
	}
	.card-text{
		grid-area: text;
		margin:25px;
	}
	.card-text .date{
		color:#363732;
		font-size: 13px;

	}
	.card-text p{
		color:#363732;
		font-size: 13px;
		font-weight: 300;

	}
	.card-text h2{
		margin-top: 0px;
		font-size: 28px;
		color:#363732;
	}
	.card-stats{
		
		grid-area: stats;
		display: grid;
		grid-template-columns: 1fr 1fr 1fr;
		grid-template-rows: 1fr;
		border-bottom-left-radius: 15px;
		border-bottom-right-radius: 15px;
		background:#53D8FB;
	}
	.card-stats .stat{
		display: flex;
		align-items: center;
		justify-content: center;
		flex-direction: column;
		padding: 10px;
		color:#363732
	}
	.card-stats .type{
		font-size: 11px;
		font-weight: 300;
		text-transform: uppercase;
	}
	.card-stats .value{
		font-size: 22px;
		font-weight: 500;
		
	}
	.card-stats .border{
		border-left:2px solid #363732;
		border-right:2px solid #363732;
	}
	.card:hover{
		transform:scale(1.1);
		box-shadow: 5px 5px 5px rgba(0,0,0,0.6);
	}

	#Header {
		color: #53D8FB;
		text-transform: uppercase;
		font-size: 4em;
		font-weight: 100;
		font-family: 'Fredoka One';
		text-align:center;
	}
	.nav-bar{
		
		background-color: #363732;
		text-align: center;
		margin: 20px auto;
		padding-bottom: 10px;
		width: 100%;
		height: 100%;
		display: flex;
		flex-direction: row;
		justify-content: space-around;
	}
	
	.button {
		height: 100%;
		width: 20%;
		background-color: #53D8FB;
		text-align: center;
		padding: 10px 16px;
		border-radius: 5px;
		margin-left: auto;
		margin-right: auto;
		
		font-family: 'Fredoka One';
		color: #363732;
		font-size: 180%;
		text-decoration: none;
	}
	.button:hover{
		background-color: #eee;
		transition: 0.5s;
	}
	@media (min-width: 640px) {
		main {
			max-width: none;
		}
		.button{
			width: 20%;
		}
	}


	/* Styling card contents */
	.title{
		color: black;
		font-weight: bold;
		margin: 0.5em
	}
	.author{
		text-align: left;
		color: #555;
		font-weight: 200;
		margin: 0.5em;
	}
	.content{
		margin: 0.5em;
		text-align: left;
	}
	#Header{
		color:53D8FB;

	}
</style>