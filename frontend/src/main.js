import App from './App.svelte';
import logging from './Login.js';
const app = new App({
	target: document.body,
	props: {}
	
});

// document.querySelector("#login").addEventListener("click",function(){
//  	document.querySelector(".popup").classList.add("active");
//  });
//  document.querySelector(".popup .close-btn").addEventListener("click",function(){
//  	document.querySelector(".popup").classList.remove("active");
//  });


export default app;