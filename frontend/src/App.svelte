<script>
	import { onMount } from "svelte";
	import Card from './components/Card.svelte'

	let hue = 0;
	let name = '';
	
	let articles = [];
	onMount(async () => {
		try{
		const response = await fetch('http://localhost:8899/api/v1/jobs');
		const data = await response.json();
		console.log(data);
		articles = data.articles;
		} catch(error){
			console.log(error)
		}
	});
	
</script>



<main>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
	<h1 id="Header">JOBAZA {name} </h1>
	
	
	<div class="nav-bar">
		<a class="active" href="#home"></a>
		<a href="#wyszukaj" class="button">Wyszukaj</a>
		<a href="#Ogłoszenia" class="button">Ogloszenia</a>
		<a href="#Pracodawcy" class="button">Pracodawcy</a>
		<a href="#Pomoc" class="button">Pomoc</a>
	</div>
	<div class="card-div">
		<div class="card">
			<div class="card-image">Lorem ipsum dolor sit amet. </div>
			<div class="card-text">
				<span class="date">4 days ago</span>
				<h2>Lorem ipsum dolor sit amet.</h2>
			</div>


			<div class="card-image">Lorem ipsum dolor sit amet.</div>
		</div>
	</div>
	
</main>



<style>
	:global(body) {
		background-color: #363732;
		align-items: center;
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